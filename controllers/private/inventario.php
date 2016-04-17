<?php

   if(!empty($_GET['opt1'])){
       if(!empty($_GET['opt2'])){
           switch ($_GET['opt2']){
              case 'alta_color':
                    foreach ($_POST as $key => $value){
                        $$key=$mysqli->real_escape_string($value);    
                    }
                    $query="INSERT INTO colores (imagen,nombre) VALUES ('$imagen','$nombre') ";
                    if($mysqli->query($query)){
                        echo '<b class="text-success">Creado con éxito</b>';
                    }else{
                        echo '<b class="text-danger">Hubo algún problema</b>';
                    }
              break;
              case 'alta_categoria':
                  //comprobamos que no se repita la url
                  $query="SELECT * FROM categorias WHERE nombre_url='$nombre_url' AND categoria_id='$categoria_id'";
                  $result=$mysqli->query($query);
                  if($result->num_rows!=0){
                    $smarty->assign('ERROR',true);
                      $smarty->assign('ERROR_DESC','Ya existe una categoria con la misma Url');
                $smarty->display('davani/error/default.tpl');
                exit();
                  }else{
                    //obtenemos su posicion
                    $query="SELECT MAX(posicion) FROM categorias WHERE categoria_id=0";
                    $result=$mysqli->query($query);
                    $row=$result->fetch_array();
                    $posicion=$row[0]+1;
                    //insertamos
                    $query="INSERT INTO categorias (categoria_id,nombre,nombre_url,imagen,imagen_resized,
                      descripcion,publicada,posicion) 
            VALUES ('$categoria_id','$nombre','$nombre_url','$imagen','$imagen',
                      '$descripcion','$publicada','$posicion') ";
                    if($mysqli->query($query)){
                        $smarty->assign('ERROR',false);
                  $smarty->display('davani/error/default.tpl');
                  exit();
                    }else{
                        $smarty->assign('ERROR',true);
                        $smarty->assign('ERROR_DESC',$mysqli->error);
                  $smarty->display('davani/error/default.tpl');
                  exit();
                    }
                  }  
                break;
          }
       exit();
       }else{
          //primer parametro
          foreach ($_POST as $key => $value){
               $$key=$mysqli->real_escape_string($value);    
          }
          switch ($_GET['opt1']){
              case 'alta_producto':
                    include 'models/lista_categorias.php';
                    $list_templates[0]='../components/sendero.tpl';
                    $list_templates[1]='../components/form.alta_producto.tpl';
              break;
              case 'alta_categoria':
                    include 'models/lista_categorias_heredadas.php';
                    $mi_sendero[0]='mi cuenta';
                    $mi_sendero[1]='inventario';
                    $mi_sendero[2]='añadir categoria';
                    $smarty->assign('CUSTOM_SENDERO',$mi_sendero);
                    $list_templates[0]='../components/sendero.tpl';
                    $list_templates[1]='../components/form.alta_categoria.tpl';
              break;
              case 'colores':
                    include 'models/colores.php';
                    $list_templates[0]='../components/sendero.tpl';
                    $list_templates[1]='../components/colores.tpl';
              break;
              case 'tallas':
                    include 'models/tallas.php';
                    $list_templates[0]='../components/sendero.tpl';
                    $list_templates[1]='../components/tallas.tpl';
              break;
          }
       }
   }else{
       $list_templates[0]='../components/sendero.tpl';
       $list_templates[1]='../components/menu_inventario.tpl';
   }
