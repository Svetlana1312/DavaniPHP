<?php

    include 'models/elementosmenu.php';
    
    //cargamos la el conjunto de vistas
    $smarty->assign('PLANTILLA','../components/default.tpl');
    //cargamos la vista
    $smarty->display('davani/pages/default.tpl');