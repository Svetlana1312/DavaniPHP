<?php
    
    //obtener categoria
    if(!isset($_GET['p1']) || empty($_GET['p1'])){
        header('location:'.ABSOLUTE_URL);
    }else{
        $uri=explode('/',$_SERVER['REQUEST_URI']);
        $uri=explode('?',end($uri));
        $url_producto=$mysqli->real_escape_string($uri[0]);
        $parametros=$uri[1];
        
        //establecemos las subcategorias
       // include 'models/producto.php';
        $query="SELECT * FROM productos WHERE nombre_url='$url_producto'";
        $result=$mysqli->query($query);
        $row=$result->fetch_array();
        $smarty->assign('PRODUCTO',$row);
        $query="SELECT * FROM imagenes_productos WHERE producto_id='".$row['id']."' ";
        $result=$mysqli->query($query);
        $smarty->assign('IMAGENES_PRODUCTO',$result);
        // termina 'models/producto.php';
        //conjunto de componentes para la vista
        $list_templates[0]='../components/producto.tpl';
        //cargamos la el conjunto de vistas
        $smarty->assign('PLANTILLA',$list_templates);
        //cargamos la vista
        $smarty->display('davani/pages/default.tpl');
    }
    
    