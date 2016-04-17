<?php

    if(!isset($_SESSION['usuario']) || empty($_SESSION['usuario'])){
        header('location:'.ABSOLUTE_URL.'acceso');
    }else{
        if(!isset($_GET['accion'])|| empty($_GET['accion'])){
            //incluimos las opciones del panel
           // include 'models/panel.php';
            $query="SELECT * FROM v_acciones WHERE tipo_id='".$_SESSION['tipo_usuario']."'";
            $result=$mysqli->query($query);
            $smarty->assign('ACCIONES',$result);
            // termina 'models/panel.php';
            //conjunto de componentes para la vista
            $list_templates[0]="../components/sendero.tpl";
            $list_templates[1]="../components/panel.tpl";
            //cargamos la el conjunto de vistas
            $smarty->assign('PLANTILLA',$list_templates);
            $smarty->display('davani/pages/cuenta.tpl');
        }else{
          //  include 'models/testAccion.php';
            $accion=$mysqli->real_escape_string($_GET['accion']);
            $query="SELECT * FROM v_acciones WHERE url='$accion' AND tipo_id='".$_SESSION['tipo_usuario']."' LIMIT 1";
            $result=$mysqli->query($query);
            if($result->num_rows==0){
                header ('location:'.ABSOLUTE_URL);
                exit();
            }
            $row=$result->fetch_array();
            include 'controllers/private/'.$row['controlador'];
            //  termina 'models/testAccion.php';
            //cargamos la el conjunto de vistas
            $smarty->assign('PLANTILLA',$list_templates);
            $smarty->display('davani/pages/cuenta.tpl');
        }
    }