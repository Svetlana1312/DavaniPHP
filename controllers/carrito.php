<?php 

    //include 'models/elementosmenu.php';
$query="SELECT * FROM pagina WHERE menu=1 AND publicada ORDER BY posicion ASC";
$result=$mysqli->query($query);
$smarty->assign('MENU_LIST',$result,true);
   //termina 'models/elementosmenu.php';
    if(isset($_GET['p1'])){
    	switch ($_GET['p1']) {
    		case 'finalizar':
				/*Prueba sermepa*/
			    include 'controllers/sermepa.php';
			    try{
			        $pasarela = new Sermepa();
			        $pasarela->importe(10.50);
			        $pasarela->pedido(date('ymdHis'));  //generamos el número de recibo usando date por ejemplo
			        $pasarela->clave('qwertyasdf0123456789');//clave asignada por el banco.
			        $pasarela->codigofuc('329473490');
			        $pasarela->producto_descripcion('Demo');
			        $pasarela->titular('Com-3');
			        $pasarela->nombre_comercio('Ejemplo');
			        //Si el comercio tiene notificación "on-line". 
			        //URL del comercio que recibirá un post con los datos de la transacción .
			        $pasarela->url_notificacion(ABSOLUTE_URL.'carrito/verificar'); 
			        $pasarela->url_ok(ABSOLUTE_URL.'carrito/exito'); // Si le das aceptar finalizada la compra desde la pasarela de pagos
			        $pasarela->url_ko(ABSOLUTE_URL.'carrito/error'); // Si le das cancelar desde la pasarela de pagos
			        $pasarela->firma();
			        //Generamos botón submit
			        $pasarela->submit('nombre_submit','Pagar');
			        $pasarela->ejecutarRedireccion(); 
			    }
			    catch(Exception $e){
			        echo $e->getMessage();   
			    }
			    $formulario = $pasarela->create_form();
			    exit();
			break;
			case 'error':
				//conjunto de componentes para la vista
			    $list_templates[0]="../components/carrito_error.tpl";
			    //cargamos la el conjunto de vistas
			    $smarty->assign('PLANTILLA',$list_templates);
			    //cargamos la vista
			    $smarty->display('davani/pages/carrito.tpl');
			break;
			case 'exito':
				//conjunto de componentes para la vista
			    $list_templates[0]="../components/carrito_exito.tpl";
			    //cargamos la el conjunto de vistas
			    $smarty->assign('PLANTILLA',$list_templates);
			    //cargamos la vista
			    $smarty->display('davani/pages/carrito.tpl');
			break;
			case 'verificar':
				$variables="";
				foreach ($_POST as $key => $value) {
					$variables.=$key.':'.$value."\r\n";
				}
				file_put_contents('controllers/pedido.txt',$variables);
			break;
    	}
    }else{
    	//conjunto de componentes para la vista
	    $list_templates[0]="../components/carrito.tpl";
	    //cargamos la el conjunto de vistas
	    $smarty->assign('PLANTILLA',$list_templates);
	    //cargamos la vista
	    $smarty->display('davani/pages/carrito.tpl');
    }
    