<?php
    if(!capar()){
        if($_GET['opt1']){
            foreach($_POST as $key => $value){
                $$key=makeSafety_url($mysqli->real_escape_string($value));
            }
            switch ($_GET['opt1']){
                case 'guardar':
                    $query="UPDATE sistema SET valor='$valor' WHERE id='$id'";
                    if($mysqli->query($query)){
                        echo '<b class="text-success">Modificado con exito</b>';
                        ?>
                        <script>
                            setTimeout(function(){
                                window.location.href=window.location.href;
                            },1000);
                        </script>
                        <?php
                    }else{
                        echo '<b class="text-danger">Hubo algún error al modificar</b>';
                    }
                break;
            }
            exit();
        }else{
            include 'models/variables_sistema.php';
            //conjunto de componentes para la vista
            $list_templates[0]="../components/sendero.tpl";
            $list_templates[1]="../components/variables_sistema.tpl";
        }
    }else{
        header('location:'.ABSOLUTE_URL);
    }