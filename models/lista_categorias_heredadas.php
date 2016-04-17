<?php

    $query="SELECT * FROM v_categorias_heredadas ";
    //establecemos la categoria

    $smarty->assign('LIST_CATEGORIAS',$mysqli->query($query));  