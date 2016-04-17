<?php
    if(!capar()){
        if($_GET['opt1']){
            if($_GET['opt2']){
                foreach($_POST as $key => $value){
                    $$key=$mysqli->real_escape_string($value);
                }
                switch ($_GET['opt2']){
                    case 'guardar':
                        $query="SELECT * FROM pagina WHERE nombre_url='$nombre_url' AND id!='$id'";
                        $result=$mysqli->query($query);
                        if($result->num_rows>0){?>
                            <script>
                                $('input[name="nombre_url"]').focus();
                            </script>
                            <br>
                            <div class="alert alert-danger">
                                <strong>Existe una página con la misma URL</strong>
                            </div>
                            <button class="btn btn-warning">Modificar</button>
                        <?php }else{
                            $query="UPDATE pagina SET nombre_url='$nombre_url', nombre='$nombre' , descripcion='$descripcion'"
                                    . ", titulo='$titulo' , keywords='$keywords'  ,menu=b'$menu' "
                                    . ", contenido='$contenido' , publicada=b'$publicada' WHERE id='$id' ";
                            if($mysqli->query($query)){?>
                            <script>
                                setTimeout(function(){window.location.href=window.location.href},1000);
                            </script>
                            <br>
                            <div class="alert alert-success">
                                <strong>Modificado con éxito</strong>
                            </div>
                            <?php }else{?>
                                <div class="alert alert-danger">
                                <strong>Hubo un error <?=$mysqli->error?></strong>
                            </div>
                            <?php }
                        }
                        exit();
                    break;
                }
                exit(); 
            }else{
                include 'models/paginas_sistema.php';
                //entramos en la pagina en concreto
                include 'models/info_pagina.php';
                

                $list_templates[0]="../components/sendero.tpl";
                $list_templates[1]="../components/modificar_pagina.tpl";
            }
        }else{
            include 'models/paginas_sistema.php';
            //conjunto de componentes para la vista
            $list_templates[0]="../components/sendero.tpl";
            $list_templates[1]="../components/lista_paginas.tpl";
        }
    }else{
        header('location:'.ABSOLUTE_URL);
    }