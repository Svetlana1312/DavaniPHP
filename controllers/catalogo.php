<?php
    
    //obtener categoria
    if(!isset($_GET['p1']) || empty($_GET['p1'])){
        $categoria_id=0;
        
        //establecemos las subcategorias
        //include 'models/subcategorias_catalogo.php';
        $query="SELECT * FROM categorias WHERE categoria_id='$categoria_id' AND publicada=1";
        $result=$mysqli->query($query);
      /*  while($row=$result->fetch_array()){
           echo $row['nombre'].'<br>';//????? echo
        }
*/
        $smarty->assign('SUBCATEGORIAS',$result);
        //termina 'models/subcategorias_catalogo.php';
        //conjunto de componentes para la vista
        $list_templates[0]='../components/listarSubcategorias.tpl';
        
        //cargamos la el conjunto de vistas
        $smarty->assign('PLANTILLA',$list_templates);
        //cargamos la vista
        $smarty->display('davani/pages/default.tpl');
    }else{
        
        //include 'models/filtro_productos.php';
        $uri=explode('/',$_SERVER['REQUEST_URI']);
        $uri=explode('?',end($uri));
        $url_categoria=$mysqli->real_escape_string($uri[0]);
        $parametros=end($uri);
        $parametros= explode('&',$parametros);
        $parametros=crear_array_index($parametros,'=');
        $smarty->assign('PARAMETROS',$parametros);
        //termina 'models/filtro_productos.php';

       // include 'models/categoria.php';
        $query="SELECT * FROM categorias WHERE nombre_url='$url_categoria' ";
        $result=$mysqli->query($query);
        $row=$result->fetch_array();
        $categoria_id=$row['id'];
        //establecemos la categoria
        $smarty->assign('CATEGORIA',$row);
        // termina 'models/categoria.php';
        //establecemos las subcategorias
       // include 'models/subcategorias_catalogo.php';
        $query="SELECT * FROM categorias WHERE categoria_id='$categoria_id' AND publicada=1";
        $result=$mysqli->query($query);
       /* while($row=$result->fetch_array()){
            $row['nombre'].'<br>'; ///??? echo ???
        }
*/
        $smarty->assign('SUBCATEGORIAS',$result);
        // termina 'models/subcategorias_catalogo.php';
        //productos conjunto de la subcategorias
       // include 'models/productos_categorias.php';
        $contador=5*$parametros['page'];
        $list_pagina_actual=$parametros['page']-1;
          //contar todos las existencias
        $query_total="SELECT * FROM productos WHERE producto_id=0 AND categoria_id='$categoria_id' ";
        $result=$mysqli->query($query_total);
        $smarty->assign('TOTAL_PRODUCTOS',$result->num_rows);
           //listar actuales
        $query="SELECT * FROM productos WHERE producto_id=0 AND categoria_id='$categoria_id' ORDER BY modificado DESC  LIMIT $contador,5 ";
        $result=$mysqli->query($query);
        $smarty->assign('PRODUCTOS',$result);
        // termina 'models/productos_categorias.php';
        //conjunto de componentes para la vista
        //$list_templates[0]='../components/sendero.tpl';
        $list_templates[1]='../components/listarSubcategorias.tpl';
        $list_templates[2]='../components/listarProductos.tpl';
        //cargamos la el conjunto de vistas
        $smarty->assign('PLANTILLA',$list_templates);
        //cargamos la vista
        $smarty->display('davani/pages/default.tpl');
    }