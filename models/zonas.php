<?php

    $query="SELECT * FROM v_zonas ";
    $smarty->assign('ZONAS',$mysqli->query($query));
