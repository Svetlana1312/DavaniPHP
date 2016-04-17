<!DOCTYPE html>
<html lang="es">
    <head>
        {include file="../blocks/head.tpl"}
    </head>
    <body style="background: white">
    <div class="col-xs-12">
    
            <h4>Explorador de archivos</h4>
            <div class="col-xs-12 col-sm-6">
                <form action="{$URL_ACTUAL}/create" method="POST">
                    <label>Crear carpeta</label>
                    <input type="text" name="folder" class="form-control" />
                    <input type="hidden" name="actual" value="{$PATH}" class="form-control" />
                    <br>
                    <button type="submit" class="btn btn-primary">Crear carpeta</button>
                </form>
            </div>
            <div class="col-xs-12 col-sm-6">
                <form action="{$URL_ACTUAL}/upload" enctype="multipart/form-data" method="POST">
                    <label>Subir archivo</label>
                    <input type="file" name="archivo" class="form-control" />
                    <br>
                    <button class="btn btn-primary">Subir archivo</button>
                </form>
            </div>
            <div class="col-xs-12">
                <br>
            </div>
        </div>
        <div class="col-xs-12">
            <div class="col-xs-12">
                <script>
                var misArchivos={$archivos};
                alert(misArchivos);
                </script>
                {literal}
                    <script>
                        $('.file').bind('contextmenu',function(e){
                            e.preventDefault();
                            $(this).children('.dropdown-menu').css('display','block');
                        })
                        $('.dropdown-menu').bind('mouseleave',function(){
                           $(this).fadeOut('slow');
                        })
                        $('li.dropdown').click(function(){
                            $(this).children('ul.dropdown-menu').css('display','block');
                        })
                        $('li.dropdown').hover(function(){
                            $(this).children('ul.dropdown-menu').css('display','block');
                        })
                        function cambiarNombre(surl,stipo){
                            var n=false;
                            while(n.lenght==0||n==false){
                                n=prompt('Indica el nombre nuevo:');
                            }
                            enviarDatosAjax('{/literal}{$URL_ACTUAL}{literal}/rename',{oldname:surl,newname:n,tipo:stipo},'POST',false,false);
                        }
                        function mostrarUrl(str){
                            $('#modal-explorer').find('.modal-body').html(str);
                            $('#modal-explorer').modal();
                        }
                        function mover(sname,soldpath,spath){
                            var n=confirm('Desea mover el archivo : '+sname);
                            if(n)
                            enviarDatosAjax('{/literal}{$URL_ACTUAL}{literal}/move',{oldname:sname,oldpath:soldpath,newfolder:spath},'POST',false,false);
                        }
                        function borrarArchivo(surl){
                            var n=confirm('Desea borrar el archivo : '+surl);
                            if(n)
                            enviarDatosAjax('{/literal}{$URL_ACTUAL}{literal}/delete',{url:surl},'POST',false,false);
                        }
                        function seleccionar($url){
                            $(window.opener.inputPadre).val($url);
                            this.window.close();
                }
                    </script>
                {/literal}
            </div>
        </div>
        <div  class="modal fade" id="modal-explorer">
            <div class="modal-dialog">
                    <div class="modal-content">
                            <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Información del archivo</h4>
                            </div>
                            <div class="modal-body">
                                
                            </div>
                    </div>
            </div>
        </div>
        </div>
        <!-- Framework functions -->
        <script src="{$TEMPLATE_URL}js/functions.js"></script>
        <!-- efects -->
    </body>
</html>