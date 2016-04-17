<?php
    
    $query="SELECT * FROM slider ";
    $result=$mysqli->query($query);
    $smarty->assign('SLIDER_LIST',$result);