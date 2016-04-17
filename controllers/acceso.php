<?php
	if(isset($_SESSION['usuario'])){
		header('location:'.ABSOLUTE_URL);
	}
	if(isset($_GET['p1'])){
		switch ($_GET['p1']) {
			case 'login':
			        foreach ($_POST as $key => $value){
			        	if(trim($value)==''){
			        		$smarty->assign('ERROR_LOGIN',true);
			        		$smarty->display('davani/error/login.tpl');
			        		exit();
			        	}else{
			            	$$key=$mysqli->real_escape_string($value);
			        	}
			        }
			        $password_c=crypt($password, '$2a$07$usesomesillystringforsalt$');
			        //buscamos coincidencias
			        $query="SELECT * FROM tienda_usuarios WHERE email='$usuario' AND password='$password_c' LIMIT 1";
			        $result=$mysqli->query($query) or die($mysqli->error);
			        if($result->num_rows>0){
			        	$row=$result->fetch_array();
			        	//hay coincidencia iniciamos la sesion
			        	$_SESSION['tipo_usuario']=$row['tipo_usuario_id'];
			        	$_SESSION['usuario']=$row['id'];
			        	//acciones automáticas , 
			        	//update fecha lastvisit
			        	$fecha=date("Y-m-d H:i:s");
			        	$query="UPDATE tienda_usuarios SET lastvisitDate='$fecha' WHERE id='$_SESSION[usuario]'";
			        	$mysqli->query($query) or die($mysqli->error);
			        	//redirigimos hacia la misma página
			        	$smarty->assign('URL_VUELTA',$_SERVER['HTTP_REFERER']);
			        	$smarty->assign('ERROR_LOGIN',false);
		        		$smarty->display('davani/error/login.tpl');
		        		exit();
			        }else{
                        //$smarty->assign('PASS',$password);
						$smarty->assign('URL_VUELTA',$_SERVER['HTTP_REFERER']);
			        	$smarty->assign('ERROR_LOGIN',true);
						//$smarty->assign('USUARIO',$usuario);
						//$smarty->assign('MESSAGE','Datos incorrectos!');
		        		$smarty->display('davani/error/login.tpl');
		        		exit();
			        }
				break;
		}
		exit();
	}else{
    	//include 'models/elementosmenu.php';
		$query="SELECT * FROM pagina WHERE menu=1 AND publicada ORDER BY posicion ASC";
		$result=$mysqli->query($query);
		$smarty->assign('MENU_LIST',$result,true);
		//termina 'models/elementosmenu.php';
	    //cargamos la el conjunto de vistas
	    $list_templates[0]='../components/default.tpl';
	    $list_templates[1]='../components/login.tpl';
	    $smarty->assign('PLANTILLA',$list_templates);
	    //cargamos la vista
	    $smarty->display('davani/pages/default.tpl');
	}