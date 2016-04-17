<?php

$contador=5*$parametros['page'];
$list_pagina_actual=$parametros['page']-1;
//contar todos las existencias
$query_total="SELECT * FROM productos WHERE producto_id=0 AND categoria_id='$categoria_id' ";
$result=$mysqli->query($query_total);
$smarty->assign('TOTAL_PRODUCTOS',$result->num_rows);
//listar actuales
$query="SELECT * FROM productos WHERE producto_id=0 AND categoria_id='$categoria_id' ORDER BY modificado DESC  LIMIT $contador,5 ";
$result=$mysqli->query($query);
$smarty->assign('PRODUCTOS',$result);
