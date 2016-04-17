<?php
	if(!isset($_SESSION['usuario'])){
		if(isset($_GET['p1'])){
	   		if($_GET['p1']=='recuperar'){
	   			/*if(!isset($_SESSION['recuperar_intentos'])){
	   				$_SESSION['recuperar_intentos']=1;
	   				$_SESSION['recuperar_fecha']=date('Y-m-d H:i:s');
	   			}
	   			else{
	   				$_SESSION['recuperar_intentos']=$_SESSION['recuperar_intentos']+1;
	   			}
	   			if($_SESSION['recuperar_intentos']>3){
	   				$fecha1 = $_SESSION['recuperar_fecha'];
					$fecha2 = date('Y-m-d H:i:s');
					$minutos = (strtotime($fecha1)-strtotime($fecha2))/60;
					$minutos = abs($minutos); 
					$minutos = floor($minutos);
					if ($minutos >= 2) {
						$_SESSION['recuperar_fecha']=date('Y-m-d H:i:s');
					  	$_SESSION['recuperar_intentos']=0;
					}else{
						$smarty->assign('MINUTOS',2-$minutos);
		        		$smarty->display('davani/error/prevent.tpl');
		        		exit();
					}
	   				exit();
	   			}else{
	   				$_SESSION['recuperar_intentos']=0;
	   			}*/
	   			foreach ($_POST as $key => $value) {
	   				$$key=$mysqli->real_escape_string($value);
	   			}
	   			$query="SELECT * FROM tienda_usuarios WHERE email='$email' LIMIT 1";
	   			$result=$mysqli->query($query);
	   			if($result->num_rows>0){
	   				$row=$result->fetch_array();
	   				$nueva_pass=generarHash(6);
	   				$nueva_pass_c=crypt($nueva_pass,'$2a$07$usesomesillystringforsalt$');
	   				$query="UPDATE tienda_usuarios SET password='$nueva_pass_c' WHERE email='$email'";
	   				if($mysqli->query($query)){
	   					$para  = $email;
						$titulo = 'Petición de recuperación de cuenta - DaVani.es';
						$mensaje = "
						<html>
						<head>
						  <title>Petición de recuperación de cuenta - DaVani.es</title>
						</head>
						<body>
						<p>Hola ".$row['nombre'].", recientemente se ha realizado una petición de recuperación de la cuenta  en la web www.davani.es
							asociada a este email.<br><br>
							Sus nueva password es :<br>
							<b>$nueva_pass</b><br><br>
							Recuerde cambiar la password al iniciar sesión.
						</p>
						<p>
							Un cordial saludo 
						</p>
						</body>
						</html>
						";
						$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
						$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
						$cabeceras .= 'From: no-reply@davani.es' . "\r\n";
						if(mail($para, $titulo, $mensaje, $cabeceras)){
		   					$smarty->assign('ERROR',false);
			        		$smarty->display('davani/error/recuperar.tpl');
			        		exit();
						}else{
							echo 'hubo algún error';
						}
		        		exit();
	   				}else{
	   					$smarty->assign('ERROR',true);
		        		$smarty->display('davani/error/recuperar.tpl');
		        		exit();
	   				}
	   			}else{
	   				$smarty->assign('ERROR',true);
	        		$smarty->display('davani/error/recuperar.tpl');
	        		exit();
	   			}
	   		}else{
	   			header('location:'.ABSOLUTE_URL);
	   		}
	   		exit();
	   	}else{
		   	$smarty->assign('PLANTILLA','../components/form-recuperar.tpl');
		    $smarty->display('davani/pages/default.tpl');	
	   	}
	}else{
		header('location:'.ABSOLUTE_URL);
	}
   	
    