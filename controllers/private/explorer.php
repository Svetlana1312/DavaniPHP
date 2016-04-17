<?php
    // comprobamos que el usuario tiene permiso para entrar aqui
    if(testAccion($_GET['accion'], $_SESSION['tipo_usuario'])){
        if($_GET['opt1']){
            switch ($_GET['opt1']){
                case 'rename':
                    foreach ($_POST as $key => $value ){
                        $$key=$value;
                    }
                    $path=explode('/',$oldname);
                    $path=array_slice($path,0,count($path)-1);
                    $path=implode('/',$path);

                   if(rename($oldname,$path.'/'.$newname)){
                        echo '<b class="text-success">Se ha cambiado el nombre correctamente</b>';

                    }else{
                        echo '<b class="text-danger">Hubo un error al cambiar el nombre</b>';
                    }

                break;
                case 'move':
                    foreach ($_POST as $key => $value ){
                        $$key=$value;
                    }
                    $oldpath=explode('/',$oldname);
                    $file_name=end($oldpath);
                    $destino=$newfolder.'/'.$file_name;

                     //   $antigua_ruta=str_replace('//','/',$oldpath);
                    //$nueva_ruta=  str_replace('//','/',$newfolder.'/'.$oldname);
                    if($tipo=='archivo'){
                        if(rename($oldname,$destino)){

                            echo '<b class="text-success">Se ha movido el archivo correctamente</b>';

                        }else{
                            echo '<b class="text-danger">Hubo un error al mover el archivo</b>';
                        }

                    }
                    elseif(rename($oldname,$destino)){

                        echo '<b class="text-success">Se ha movido la carpeta correctamente</b>';

                    }else{
                        echo '<b class="text-danger">No se ha podido mover la carpeta</b>';
                    }

                break;
                case 'delete':
                    foreach ($_POST as $key => $value ){
                        $$key=$value;
                    }
                    $url=str_replace('//','/',$url);
                    chown($url, 'root');
                    if(is_dir($url)){
                       if(!rmdir($url)) echo '<b class="text-danger">Hubo un error al borrar la carpeta</b>'; 
                       else{
                           echo '<b class="text-success">Carpeta borrada con éxito</b>'; 

                       }
                    }else{
                      if(!unlink($url)) echo '<b class="text-danger">Hubo un error al borrar el archivo</b>'; 
                      else{
                          echo '<b class="text-success">Archivo borrado con éxito</b>';
                      }
                    }

                break;
                case 'create':
                    foreach ($_POST as $key => $value ){
                        $$key=$value;
                    }
                    mkdir($actual.'/'.$folder);
                    //header('location:'.ABSOLUTE_URL.'mi-cuenta/explorador-de-archivos/');
                    header('location:'.$_SERVER['HTTP_REFERER']);
                break;
                case 'upload':
                    foreach ($_POST as $key => $value ){
                        $$key=$value;
                    }
                    $uploaddir = str_replace('//','/',$actual).'/';
                    $uploadfile = $uploaddir . basename($_FILES['archivo']['name']);
                    move_uploaded_file($_FILES['archivo']['tmp_name'], $uploadfile);
                    chmod($uploadfile, 0777);
                    chown($uploadfile, '10002 1004');
                    header('location:'.$_SERVER['HTTP_REFERER']);
                break;
                case 'input':
                    include 'models/explorer.php';
                    $smarty->display('davani/pages/explorer.tpl');
                    exit();
                break;
                case 'tinymce':
                    include 'models/explorer.php';
                    $smarty->display('davani/pages/tinymce.tpl');
                    exit();
                break;
            }
            exit();
        }else{
            include 'models/explorer.php';
            //conjunto de componentes para la vista
            $list_templates[0]="../components/sendero.tpl";
            $list_templates[1]="../components/exploradorv2.tpl";
        }
    }else{
        header('location:'.ABSOLUTE_URL);
   }
?>
<script>
    function refresh(){location.reload();}
</script>
