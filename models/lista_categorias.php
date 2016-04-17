<?php

    $query="SELECT * FROM categorias  ";
    //establecemos la categoria
    $smarty->assign('LIST_CATEGORIAS',$mysqli->query($query));  
