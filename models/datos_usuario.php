<?php
	
    $query="SELECT * FROM tienda_usuarios WHERE id='".$_GET['opt2']."' LIMIT 1";
    $result=$mysqli->query($query);
    $smarty->assign('SELECTED_USUARIO',$result->fetch_array());

    $query="SELECT * FROM direcciones WHERE usuario_id='".$_GET['opt2']."' AND tipo='ST'";
    $result=$mysqli->query($query);
    if($result)
         $smarty->assign('SELECTED_ENVIO',$result);
    else
         echo "No esta asignado SELECTED_ENVIO";

    $query="SELECT * FROM direcciones WHERE usuario_id='".$_GET['opt2']."' AND tipo='BT' LIMIT 1";
    $result=$mysqli->query($query);
    $smarty->assign('SELECTED_FACTURACION',$result->fetch_array());




    