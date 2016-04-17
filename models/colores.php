<?php

    $query="SELECT * FROM colores ";
    $smarty->assign('LIST_COLORES',$mysqli->query($query));