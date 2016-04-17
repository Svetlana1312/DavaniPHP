<?php
        
        $query="SELECT * FROM categorias WHERE categoria_id='$categoria_id' AND publicada=1";
        $result=$mysqli->query($query);
        while($row=$result->fetch_array()){
            $row['nombre'].'<br>';
        }
        
        $smarty->assign('SUBCATEGORIAS',$result);