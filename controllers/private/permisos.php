<?php

    
    if(isset($_GET['opt1'])&&!empty($_GET['opt1'])){
       if($_GET['opt2']){
           $opcion=$mysqli->real_escape_string($_GET['opt2']);
           foreach($_POST as $key => $value){
               $$key=$value;
           }
           switch($opcion){
               case 'modificar':
                  if($check=='true'){
                      $query="INSERT INTO permisos (tipo_usuario_id,accion_id) VALUES ('$tipo_id','$accion_id')";
                      if($mysqli->query($query)){
                          echo '<b class="text-success">Cambiado con éxito</b>';
                      }else{
                          echo '<b class="text-danger">Hubo algún error '.$mysqli->error.'</b>';
                      }
                  }else{
                      $query="DELETE FROM  permisos WHERE accion_id='$accion_id' AND tipo_usuario_id='$tipo_id'";
                      if($mysqli->query($query)){
                          echo '<b class="text-success">Cambiado con éxito</b>';
                      }else{
                          echo '<b class="text-danger">Hubo algún error $mysqli->error </b>';
                      }
                  }
               break;
           }
           exit();
       }else{
            include 'models/permisos_tipo.php';
            $list_templates[0]='../components/sendero.tpl';
            $list_templates[1]='../components/modificar_permisos.tpl';
            
       }
    }else{
       include 'models/grupos_usuarios.php';
       $list_templates[0]='../components/sendero.tpl';
       $list_templates[1]='../components/grupos_usuarios.tpl';
    }