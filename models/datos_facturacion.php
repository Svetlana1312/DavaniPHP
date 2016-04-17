<?php
	
    $query="SELECT * FROM direcciones WHERE usuario_id='".$_SESSION['usuario']."' AND tipo='BT' LIMIT 1";
    $result=$mysqli->query($query);
    $smarty->assign('DATOS_FACTURACION',$result->fetch_array());

    