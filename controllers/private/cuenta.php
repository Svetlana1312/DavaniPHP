<?php
    if(!capar()){
        if(!empty($_GET['opt1'])){
            if(!empty($_GET['opt2'])){
                switch($_GET['opt2'])
                {
                    case 'get_provincias':
                        foreach ($_POST as $key => $value) {
                            $$key=$mysqli->real_escape_string($value);
                        }
                        if($id == '') echo "<option>Elige un pais</option>";
                        else{
                            $query="SELECT * FROM states WHERE country_id='$id'";
                            $result=$mysqli->query($query);
                            if($result->num_rows==0)
                                echo '<option>No existen opciones</option>';
                            else{
                                $smarty->assign('LISTA_PROVINCIAS',$result);
                                $smarty->assign('STATE_ID',$state_id);
                                $smarty->display('davani/components/lista.provincias.tpl');

                            }
                        }
                        exit();
                        break;
                    case 'insert-envio':
                        foreach($_POST as $key => $value){
                            if (strlen(rtrim(ltrim($value)))==0 && $key !='fax' )
                            {
                                $smarty->assign('REGISTER_ERROR','empty');
                                //$smarty->assign('FIELD',$key);
                                $smarty->display('davani/error/modify.tpl');
                                exit();
                            }
                            $$key=$mysqli->real_escape_string($value);
                        }
                        $data=date('Y-m-d H:i:s');
                        $query="INSERT into direcciones(tipo,name,company,middle_name,virtuemart_country_id,
                            virtuemart_state_id,city,zip,address_1,phone_1,fax,usuario_id,title,created_on,created_by) VALUES
                            ('ST','$nombre','$company','$apellidos','$pais','$provincia',
                             '$ciudad','$cp','$direccion','$telefono','$fax','$usuario_id','$title','$data','$usuario_id')";
                        if(!$mysqli->query($query))
                            echo('<b class="text-danger">Hubo algún error al registrar la direccion</b>');
                        else
                        {
                            echo '<b class="text-success">Insertado con exito</b>';

                        }


                        break;
                    case 'update-envio':
                        foreach($_POST as $key => $value){

                            if (strlen(rtrim(ltrim($value)))==0 && $key !='fax' )
                            {
                                $smarty->assign('REGISTER_ERROR','empty');
                                // $smarty->assign('FIELD',$key);
                                $smarty->display('davani/error/modify.tpl');
                                exit();
                            }
                            $$key=$mysqli->real_escape_string($value);
                        }

                        $data=date('Y-m-d H:i:s');
                        $query="UPDATE direcciones SET name='$nombre',company='$company',middle_name='$apellidos',
                         virtuemart_country_id='$pais',virtuemart_state_id='$provincia',
                         city='$ciudad',zip='$cp',address_1='$direccion',phone_1='$telefono', fax='$fax',title='$title',
                         modified_on='$data',modified_by='$uauario_id'
                         WHERE id='$id'  LIMIT 1";

                        if($mysqli->query($query))
                            echo '<b class="text-success">Modificado con exito</b>';
                         else
                             echo '<b class="text-danger">Hubo error al intentar modificar</b>';

                        break;
                    case 'delete-envio':
                        $query="DELETE FROM direcciones WHERE id='$_POST[id]'";

                        if($mysqli->query($query))
                        {
                            echo '<b class="text-success">Dirección borrada con exito</b>';
                            ?>
                            <script>
                                $('#modal-process').find('.close').click(function() {
                                    document.location.href = document.referrer;
                                });
                            </script>
                                <?php
                        }
                          else
                              echo '<b class="text-danger">Hubo error al intentar borrar</b>';

                        break;


                }
                exit();

            }else{  //solo tenemos el primer parametro
                switch ($_GET['opt1']){
                    case 'guardar':
                        foreach($_POST as $key => $value){
                            $$key=$mysqli->real_escape_string($value);
                        }
                        if($password){

                            if($password != $password_conf)
                            {
                                $smarty->assign('REGISTER_ERROR','password_no_coincide');
                                $smarty->display('davani/error/modify.tpl');
                                exit();
                            }else{
                                $password_c=  crypt($password,'$2a$07$usesomesillystringforsalt$');
                                $query="UPDATE tienda_usuarios SET password='$password_c' WHERE id='$id'";
                                // die("Id is $id");
                                $mysqli->query($query) or die($mysqli->error);
                            }

                        }

                        //comprobamos que todos los campos estén completos
                        if(strlen(rtrim(ltrim($nombre)))==0 || strlen(rtrim(ltrim($nombre_completo)))==0 ||
                            strlen(rtrim(ltrim($email)))==0){
                            $smarty->assign('REGISTER_ERROR','empty');
                            //$smarty->assign('FIELD',$key);
                            $smarty->display('davani/error/modify.tpl');
                            exit();

                        }
                        if(!filter_var($email,FILTER_VALIDATE_EMAIL))
                        {
                            $smarty->assign('REGISTER_ERROR','email_no_valido');
                            $smarty->assign('FIELD',$email);
                            $smarty->display('davani/error/modify.tpl');
                            exit();
                        }
                        //consultamos el email
                        $query="SELECT * FROM tienda_usuarios WHERE email='$email' AND id!='$id'";
                        $result=$mysqli->query($query) or die($mysqli->error);
                        if($result->num_rows > 0){
                            $smarty->assign('REGISTER_ERROR','email_existe');
                            $smarty->assign('FIELD',$email);
                            $smarty->display('davani/error/modify.tpl');
                            exit();
                        }
                        //consultamos el nombre del usuario si existe ya y pertenece a otra persona
                        $query="SELECT * FROM tienda_usuarios WHERE nombre='$nombre' AND id!='$id'";
                        $result=$mysqli->query($query) or die($mysqli->error);
                        if($result->num_rows > 0){
                            $smarty->assign('REGISTER_ERROR','usuario_existe');
                            $smarty->assign('FIELD',$nombre);
                            $smarty->display('davani/error/modify.tpl');
                            exit();
                        }

                        $query="UPDATE tienda_usuarios SET nombre_completo='$nombre_completo',
                                 nombre='$nombre',email='$email' WHERE id='$id'";
                        $mysqli->query($query);

                        echo '<b class="text-success">Modificado con exito</b>';
                        //  header('location:'.ABSOLUTE_URL);

                        /*else{
                            echo '<b class="text-danger">Hubo algún error al modificar</b>';
                        }*/
                        break;
                    case 'guardar-fact':


                        //comprobamos que todos los campos estén completos
                        foreach($_POST as $key => $value){


                            if (strlen(rtrim(ltrim($value)))==0 && $key !='fax' )
                            {
                                $smarty->assign('REGISTER_ERROR','empty');
                                // $smarty->assign('FIELD',$key);
                                $smarty->display('davani/error/modify.tpl');
                                exit();
                            }
                            $$key=$mysqli->real_escape_string($value);
                        }

                        //consultamos si estamos redactando una direccion de facturacion ya existente

                        $query="SELECT * FROM direcciones WHERE usuario_id='$usuario_id' AND tipo='BT'";
                        $result=$mysqli->query($query) or die($mysqli->error);
                        if($result->num_rows > 0){
                            $data=date('Y-m-d H:i:s');
                            $query="UPDATE direcciones SET name='$nombre',company='$company',middle_name='$apellidos',
                         NIFDNINIE='$cif',virtuemart_country_id='$pais',virtuemart_state_id='$provincia',
                         city='$ciudad',zip='$cp',address_1='$direccion',phone_1='$telefono', fax='$fax',title='$title',
                         modified_on='$data',modified_by='$usuario_id'
                         WHERE usuario_id='$usuario_id' AND tipo='BT' LIMIT 1";
                            $mysqli->query($query) or die($mysqli->error);
                            echo '<b class="text-success">Modificado con exito</b>';

                            exit();
                        }
                        $data=date('Y-m-d H:i:s');
                        $query="INSERT into direcciones(tipo,name,company,middle_name,NIFDNINIE,virtuemart_country_id,
                            virtuemart_state_id,city,zip,address_1,phone_1,fax,usuario_id,title,created_on,created_by) VALUES
                            ('BT','$nombre','$company','$apellidos','$cif','$pais','$provincia',
                             '$ciudad','$cp','$direccion','$telefono','$fax','$usuario_id','$title','$data','$usuario_id')";
                        if(!$mysqli->query($query))
                            echo('<b class="text-danger">Hubo algún error al modificar</b>');
                        else
                        {
                            echo '<b class="text-success">Insertado con exito</b>';
                            $data=date('Y-m-d H:i:s');
                            $query="INSERT into direcciones(tipo,name,company,middle_name,NIFDNINIE,virtuemart_country_id,
                            virtuemart_state_id,city,zip,address_1,phone_1,fax,usuario_id,title,created_on,created_by) VALUES
                            ('ST','$nombre','$company','$apellidos','$cif','$pais','$provincia',
                             '$ciudad','$cp','$direccion','$telefono','$fax','$usuario_id','$title','$data','$usuario_id')";
                            $mysqli->query($query);
                        }

                        //  header('location:'.ABSOLUTE_URL);
                        ?>
                        <script>
                            setTimeout(function(){
                                window.location.href = ABSOLUTE_URL + 'mi-cuenta/datos-personales';
                            },2000);
                        </script>
                        <?php

                        break;
                    case 'get_provincias':
                        foreach ($_POST as $key => $value) {
                            $$key=$mysqli->real_escape_string($value);
                        }
                        if($id == '') echo "<option>Elige un pais</option>";
                        else {
                            $query = "SELECT * FROM states WHERE country_id='$id'";
                            $result = $mysqli->query($query);
                            if ($result->num_rows == 0)
                                echo '<option>No existen opciones</option>';
                            else {
                                $smarty->assign('LISTA_PROVINCIAS', $result);
                                $smarty->assign('CASO', 'DIR-FACT');
                                $smarty->display('davani/components/lista.provincias.tpl');

                            }
                        }
                        exit();
                        break;
                    /* case 'get_ciudades':
                         foreach ($_POST as $key => $value) {
                             $$key=$mysqli->real_escape_string($value);
                         }
                         $query="SELECT * FROM cities WHERE state_id='$id'";
                         $result=$mysqli->query($query);
                         if($result->num_rows==0)
                             echo '<option>No existen opciones</option>';
                         else{
                             $smarty->assign('LISTA_CIUDADES',$result);

                             $smarty->display('davani/components/lista.ciudades.tpl');
                             exit();
                         }

                         break;*/

                    case 'insert-dir':
                        $smarty->display('davani/components/form-insert-envio.tpl');
                        exit();
                        break;
                    case 'update-dir':
                        $query="SELECT * FROM direcciones WHERE id='$_POST[id]'";
                        $result=$mysqli->query($query);
                        $res=$result->fetch_assoc();
                        $smarty->assign('res',$res);
                        $smarty->display('davani/components/form-update-envio.tpl');
                        exit();

                        break;
                    case 'delete-dir':
                        $query="SELECT * FROM direcciones WHERE id='$_POST[id]'";
                        $result=$mysqli->query($query);
                        $res=$result->fetch_assoc();
                        $smarty->assign('res',$res);
                        $smarty->display('davani/components/form-delete-envio.tpl');
                        exit();

                        break;
                }
                exit();
            }
        }else{
            //conjunto de componentes para la vista si no hay ningun parametro

            $list_templates[0]="../components/sendero.tpl";
            $list_templates[1]="../components/datos_cuenta.tpl";
        }
    }else{
               // si hay que capar
        header('location:'.ABSOLUTE_URL);
    }








