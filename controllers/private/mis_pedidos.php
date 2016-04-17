<?php
    
    $query="SELECT * FROM v_pedidos WHERE usuario_id='".$_SESSION['usuario']."' ORDER BY created_on DESC";
    $smarty->assign('LIST_PEDIDOS',$mysqli->query($query));
    $smarty->assign('NUM_PEDIDOS',($mysqli->query($query)->num_rows));
    $list_templates[0]='../components/sendero.tpl';
    $list_templates[1]='../components/mis-pedidos.tpl';