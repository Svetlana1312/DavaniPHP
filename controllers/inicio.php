<?php 

  //  include 'models/elementosmenu.php';
$query="SELECT * FROM pagina WHERE menu=1 AND publicada ORDER BY posicion ASC";
$result=$mysqli->query($query);
$smarty->assign('MENU_LIST',$result,true);
//  termina 'models/elementosmenu.php';
  //  include 'models/slider.php';
$query="SELECT * FROM slider ";
$result=$mysqli->query($query);
$smarty->assign('SLIDER_LIST',$result);
//  termina 'models/slider.php';
    //conjunto de componentes para la vista
    $list_templates[0]="../components/slider.tpl";
    $list_templates[1]="../components/slider_productos1.tpl";
    $list_templates[2]="../components/slider_productos2.tpl";
    $list_templates[3]="../components/slider_productos3.tpl";
    //cargamos la el conjunto de vistas
    $smarty->assign('PLANTILLA',$list_templates);
    //cargamos la vista
    $smarty->display('davani/pages/default.tpl');

    