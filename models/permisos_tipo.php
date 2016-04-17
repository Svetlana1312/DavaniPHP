<?php
    
    $query="SELECT * FROM tipos_usuarios WHERE nombre='".$_GET['opt1']."'";
    $result=$mysqli->query($query);
    $smarty->assign('INFO_GRUPO',$result->fetch_array());
    
    
    $query="SELECT * FROM acciones ";
    $smarty->assign('LISTA_ACCIONES',$mysqli->query($query));
    


    


