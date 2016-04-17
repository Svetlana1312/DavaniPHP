<?php
    $accion=$mysqli->real_escape_string($_GET['accion']);
    $query="SELECT * FROM v_acciones WHERE url='$accion' AND tipo_id='".$_SESSION['tipo_usuario']."' LIMIT 1";
    $result=$mysqli->query($query);
    if($result->num_rows==0){ 
        header ('location:'.ABSOLUTE_URL);
        exit();
    }
    $row=$result->fetch_array();
    include 'controllers/private/'.$row['controlador'];
    