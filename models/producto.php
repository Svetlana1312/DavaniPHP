<?php

    $query="SELECT * FROM productos WHERE nombre_url='$url_producto'";
    $result=$mysqli->query($query);
    $row=$result->fetch_array();
    $smarty->assign('PRODUCTO',$row);
    $query="SELECT * FROM imagenes_productos WHERE producto_id='".$row['id']."' ";
    $result=$mysqli->query($query);
    $smarty->assign('IMAGENES_PRODUCTO',$result);