<?php 
	if($_POST){
		if(!capar()){
			foreach ($_POST as $key => $value) {
				$$key=$mysqli->real_escape_string($value);
			}

		}else{
			header('location:'.ABSOLUTE_URL);
		}
	}else{
		//pagina de busqueda listar productos
		$list_templates[0]='../components/form.busqueda.tpl';
		//$list_templates[1]='../components/lista.productos.busqueda.tpl';
		$smarty->assign('PLANTILLA',$list_templates);
		$smarty->display('davani/pages/default.tpl');
	}
?>