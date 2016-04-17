<?php
    
    $query="SELECT * FROM pagina WHERE menu=1 AND publicada ORDER BY posicion ASC";
    $result=$mysqli->query($query);
    $smarty->assign('MENU_LIST',$result,true);