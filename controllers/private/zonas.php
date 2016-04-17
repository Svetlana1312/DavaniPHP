<?php
    if(!capar()){
        if(isset($_GET['opt1'])){
            $list_templates[0]="../components/sendero.tpl";
        }else{
            include 'models/zonas.php';
            $list_templates[0]="../components/sendero.tpl";
            $list_templates[1]="../components/lista_zonas.tpl";
        }
    }else{
        header('location:'.ABSOLUTE_URL);
    }
