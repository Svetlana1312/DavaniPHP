<?php

    $query="SELECT * FROM tipos_usuarios ";
    $smarty->assign('LISTA_TIPOS_USUARIOS',$mysqli->query($query));