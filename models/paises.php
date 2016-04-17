<?php 
	$query="SELECT * FROM countries  ORDER BY name ";
	$smarty->assign('LISTA_PAISES',$mysqli->query($query));

?>