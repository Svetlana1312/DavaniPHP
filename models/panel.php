<?php

    $query="SELECT * FROM v_acciones WHERE tipo_id='".$_SESSION['tipo_usuario']."'";
    $result=$mysqli->query($query);
    $smarty->assign('ACCIONES',$result);