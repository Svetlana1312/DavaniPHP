<?php
    
    if(isset($_GET['pagina']) && !empty($_GET['pagina'])){
        $pagina=$mysqli->real_escape_string($_GET['pagina']);
    }  else {
        $pagina='inicio';
}
    
    $query="SELECT * FROM pagina WHERE nombre_url='$pagina' LIMIT 1";
    $result=$mysqli->query($query);
    $controlador='';
    if($result->num_rows==0) 
    {
        header ('location:'.ABSOLUTE_URL);
    }
    else{
        $row=$result->fetch_array();
        $controlador=$row['controlador'];
        $smarty->assign('DATOS_PAGINA',$row);
    }