<?php
$query="SELECT * FROM v_usuarios_adm";
$smarty->assign('LISTA_USUARIOS',$mysqli->query($query));

