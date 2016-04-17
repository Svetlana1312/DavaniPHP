<?php
    $query="SELECT * FROM pagina ORDER BY menu  ASC , posicion DESC ";
    $result=$mysqli->query($query);
    $smarty->assign('PAGINAS_SYS',$result);

