<?php 
    if($_SESSION['usuario']){
    	header('location:'.ABSOLUTE_URL);
    	exit();
    }else{
    	if($_GET['p1']){
    		switch ($_GET['p1']) {
    			case 'crear':
				//print_r($_POST);
    				foreach ($_POST as $key => $value) {
    				//comprobamos que todos los campos est�n completos
    					if(strlen(rtrim(ltrim($value)))==0){
    						$smarty->assign('REGISTER_ERROR','empty');
    						$smarty->assign('FIELD',$key);
    						$smarty->display('davani/error/register.tpl');
    						exit(); //????
							
    					}else{
    						$$key=$mysqli->real_escape_string($value);
    					}
    				}
    				if(!filter_var($email,FILTER_VALIDATE_EMAIL))
					{
    						$smarty->assign('REGISTER_ERROR','email_no_valido');
    						$smarty->assign('FIELD',$email);
    						$smarty->display('davani/error/register.tpl');
							exit();
    				}

					if($email != $email_conf){
					$smarty->assign('REGISTER_ERROR','email_no_coincide');
					//$smarty->assign('FIELD',$email);
					$smarty->display('davani/error/register.tpl');
					exit();
				}
					if($pass != $pass_conf){
						$smarty->assign('REGISTER_ERROR','password_no_coincide');
						//$smarty->assign('FIELD',$email);
						$smarty->display('davani/error/register.tpl');
						exit();
					}
					//consultamos el email
					$query="SELECT * FROM tienda_usuarios WHERE email='$email'";
					$result=$mysqli->query($query) or die($mysqli->error);
					if($result->num_rows > 0){
							$smarty->assign('REGISTER_ERROR','email_existe');
    						//$smarty->assign('FIELD',$email);
    						$smarty->display('davani/error/register.tpl');
							exit();
					}
					//consultamos el nombre de usuario
					$query="SELECT * FROM tienda_usuarios WHERE nombre='$nombre'";
					$result=$mysqli->query($query) or die($mysqli->error);
					if($result->num_rows > 0){
						$smarty->assign('REGISTER_ERROR','usuario_existe');
						//$smarty->assign('FIELD',$email);
						$smarty->display('davani/error/register.tpl');
						exit();
					}
					$now=date("Y-m-d H:i:s");
					$pass_c=crypt($pass, '$2a$07$usesomesillystringforsalt$');//codificamos la contraseña, !!! CAMBIAR LA SAL!!!!!
					$query="INSERT INTO tienda_usuarios (nombre,nombre_completo,email,password,tipo_usuario_id,
					registerDate,lastvisitDate,activation) VALUES ('$nombre','$nombre_completo','$email','$pass_c',3,'$now','$now','')";
					if($mysqli->query($query)){
					 $to = $email;
                     $subject = "Nueva cuenta creada en DaVani ";
                     $txt = "Registraciòn comletada con exito en la pàgina de DaVani!\n Su contrase�a es: $pass";
                     $headers = "From: vsvetla@gmail.com" . "\r\n" ;


					if(!mail($to,$subject,$txt,$headers)){
							$smarty->assign('REGISTER_ERROR','mail_no_enviado');
    						$smarty->display('davani/error/register.tpl');
							 exit();
						}
					
					else{
							$smarty->assign('REGISTER_ERROR','mail_enviado');
    						//$smarty->assign('URL_VUELTA',$_SERVER[HTTP_REFERER]);
    						$smarty->display('davani/error/register.tpl');
							 exit();
						}
    	           }
				break;

    		}
    	}else{
    		//include 'models/paises.php';//carga los paises de la tabla paises
			// unico componente de Plantilla ser� form-registro.tpl
	    	$smarty->assign('PLANTILLA','../components/form-registro.tpl');
	   	 	$smarty->display('davani/pages/default.tpl');	
	   	 }
    }
   