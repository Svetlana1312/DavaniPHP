<?php 
    
    $list_templates[0]="../components/default.tpl";
    $list_templates[1]="../components/form-contacto.tpl";
    
    $smarty->assign('PLANTILLA',$list_templates);
    $smarty->display('davani/pages/default.tpl');
