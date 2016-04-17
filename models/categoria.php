<?php

    $query="SELECT * FROM categorias WHERE nombre_url='$url_categoria' ";
    $result=$mysqli->query($query);
    $row=$result->fetch_array();
    $categoria_id=$row['id'];
    //establecemos la categoria
    $smarty->assign('CATEGORIA',$row);
