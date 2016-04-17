<?php
    $query="SELECT * FROM sistema ";
    $result=$mysqli->query($query);
    $smarty->assign('VARIABLES_SYS',$result);