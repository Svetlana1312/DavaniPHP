<?php
	
    $query="SELECT * FROM tienda_usuarios WHERE id='".$_SESSION['usuario']."' LIMIT 1";
    $result=$mysqli->query($query);
    $smarty->assign('DATOS_USUARIO',$result->fetch_array());
    $smarty->assign('LOGIN',true);
    