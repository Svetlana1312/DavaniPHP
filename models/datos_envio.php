<?php
	
    $query="SELECT * FROM direcciones WHERE usuario_id='".$_SESSION['usuario']."' AND tipo='ST'";
    $result=$mysqli->query($query);
if($result)
    $smarty->assign('DATOS_ENVIO',$result);
else
    echo "No esta asignado DATOS_ENVIO";

    