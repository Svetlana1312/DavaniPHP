<?php
    if(!capar()){
        if(isset($_GET['opt1'])){
            foreach($_POST as $key => $value){
                $$key=$mysqli->real_escape_string($value);
            }
            switch ($_GET['opt1']){
                case 'filter':
                    $word=ltrim($word);
                    if(!empty($word)){
                        $query="SELECT * FROM v_usuarios_adm WHERE  email LIKE '%$word%' OR nombre LIKE '%$word%' OR nombre_completo LIKE '%$word%' ";
                        $result=$mysqli->query($query);
                        if($result->num_rows>0){
                            $smarty->assign('LISTA_USUARIOS',$mysqli->query($query));
                            $smarty->assign('FILTER',true);
                            $smarty->display('davani/components/lista_usuarios.tpl');
                        }else{
                            echo '<tr><td colspan="6">No se han encontrado coincidencias</td></tr>';
                        }
                        
                    }else{
                        $query="SELECT * FROM v_usuarios_adm";
                        $result=$mysqli->query($query);
                        if($result->num_rows>0){
                            $smarty->assign('LISTA_USUARIOS',$mysqli->query($query));
                            $smarty->assign('FILTER',true);
                            $smarty->display('davani/components/lista_usuarios.tpl');
                        }else{
                            echo '<tr><td colspan="6">No se han encontrado coincidencias</td></tr>';
                        }
                    }
                    exit();
                break;
                case 'modificar':///??????Dejar que pueda editar los datos de este usuario ??
                    if(!empty($_GET['opt2'])){
                        include 'models/datos_usuario.php';
                        $list_templates[0]="../components/sendero.tpl";
                        $list_templates[1]="../components/datos_usuario.tpl";
                        $smarty->assign('PLANTILLA',$list_templates);
                        $smarty->display('davani/pages/default.tpl');
                        exit();
                    }else{
                        header('location:'.ABSOLUTE_URL.'403');
                    }
                break;
                case 'crear':
                    //test other user same email
                    $query="SELECT * FROM tienda_usuarios WHERE email='$email'";
                    $result=$mysqli->query($query);
                    if($result->num_rows>0){?>
                        <div class="alert alert-danger">
                            <strong>Ya existe un usuario con ese email</strong>
                        </div>
                        <button type="submit" class="btn btn-info">
                            Crear usuario
                        </button>
                    <?php }else{

                        $now=date("Y-m-d H:i:s");
                        $password_c=crypt($password, '$2a$07$usesomesillystringforsalt$');//codificamos la contraseña, !!! CAMBIAR LA SAL!!!!!
                        $query="INSERT INTO tienda_usuarios (nombre,nombre_completo,email,password,tipo_usuario_id,
					registerDate,lastvisitDate,activation) VALUES ('$nombre_contacto','$nombre_contacto','$email','$password_c',3,'$now','$now','')";

                       // $mysqli->query($query);
                        
                       /* $query="SELECT * FROM tienda_usuarios WHERE email='$email'";
                        $result=$mysqli->query($query);
                        $row=$result->fetch_array();
                        $id=$row['id'];
                        $password_c=crypt($password,'$2a$07$usesomesillystringforsalt$');
                        $login_c=crypt($email,'$2a$07$usesomesillystringforsalt$');
                        $query="INSERT INTO datos_acceso (pass,login,usuario_id) VALUES  ('$password_c','$login_c','$id') ";*/
                        if($mysqli->query($query)){
                            echo '<b class="text-success">Modificado con exito</b>';
                            ?>
                            <script>
                                setTimeout(function(){
                                    window.location.href=window.location.href;
                                },3000);
                            </script>
                            <?php
                        }else{
                            echo '<b class="text-danger">Hubo algún error al crear</b>';
                        }   
                    }
                break;
                case 'delete': 
                    $query="DELETE FROM tienda_usuarios WHERE id='$id'";
                    if($mysqli->query($query)){
                            echo '<b class="text-success">Borrado con exito</b>';
                            ?>
                            <script>
                                setTimeout(function(){
                                    window.location.href=window.location.href;
                                },3000);
                            </script>
                            <?php
                        }else{
                            echo '<b class="text-danger">Hubo algún error al borrar</b>';
                        } 
                break;
            }
            exit();
        }else{
            include 'models/usuarios.php';
            //conjunto de componentes para la vista
            $smarty->assign('FILTER',false);

            $list_templates[0]="../components/sendero.tpl";
            $list_templates[1]="../components/form_nuevo_usuario.tpl";
            $list_templates[2]="../components/lista_usuarios.tpl";
        }
    }else{
        header('location:'.ABSOLUTE_URL);
    }