<div class="col-xs-12">
    
    <h4>Explorador de archivos</h4>
    <div class="col-xs-12 col-sm-6">
        <form action="{$URL_ACTUAL}/create" method="POST">
            <label>Crear carpeta</label>
            <input type="text" name="folder" required class="form-control" />
            <input type="hidden" name="actual" value="{$PATH}" class="form-control" />
            <br>
            <button type="submit" class="btn btn-primary">Crear carpeta</button>
        </form>
    </div>
    <div class="col-xs-12 col-sm-6">
        <form action="{$URL_ACTUAL}/upload" enctype="multipart/form-data" method="POST">
            <label>Subir archivo</label>
            <input type="file" name="archivo" required="true" class="form-control" />
            <input type="hidden" name="actual" value="{$PATH}" />
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
        {foreach item=item from=$ARCHIVOS}
            {if $item.tipo=='carpeta'}
                {if $item.nombre!='Subir carpeta'}
                    <div class="col-xs-12 col-sm-2 file dropdown" ondblclick="window.location.href='{$URL_ACTUAL}{$item.url}'" >
                {else}
                    <div class="col-xs-12 col-sm-2 file dropdown" ondblclick="window.location.href='{$URL_ACTUAL}'" >
                {/if}
                    <div class="row">
                        <div class="col-xs-12 hidden-xs">
                            <img class="img-responsive" src="{$item.icono}"/>
                        </div>
                        <div class="col-xs-12">
                            <span class="glyphicon glyphicon-folder-open "></span>
                            <b>{$item.nombre}</b>
                        </div>
                    </div>
                    <ul class="dropdown-menu">
                        {if $item.nombre!='Subir carpeta'}
                            <li>
                                <a href="{$URL_ACTUAL}{$item.url}">
                                    <span class="glyphicon glyphicon-folder-open"></span>
                                    Abrir
                                </a>
                            </li>
                            <li>
                                <a href="javascript:cambiarNombre('{$item.url}','{$item.extension}')">
                                    <span class="text-success glyphicon glyphicon-edit"></span>
                                    Cambiar nombre
                                </a>
                            </li>
                            <li>
                                <a href="javascript:borrarArchivo('{$item.path}')">
                                    <span class="text-danger glyphicon glyphicon-trash"></span>
                                    Eliminar
                                </a>
                            </li>
                        {else}
                            <li>
                                <a href="{$URL_ACTUAL}/">
                                    <span class="glyphicon glyphicon-upload"></span>
                                    Subir
                                </a>
                            </li>
                        {/if}
                        
                    </ul>
                </div>
            {/if}
        {/foreach}
        {foreach item=item from=$ARCHIVOS}
            {if $item.tipo!='carpeta'}
                <div class="col-xs-12 col-sm-2 file">
                    <div class="row">
                        <div class="col-xs-12 hidden-xs">
                            <img class="img-responsive thumbnail" src="{$item.icono}"/>
                        </div>
                        <div class="col-xs-12">
                            <span class="glyphicon glyphicon-file"></span>
                            <b>{$item.nombre}</b>
                        </div>
                    </div>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="javascript:mostrarUrl('{$item.url}')">
                                <span class="text-info glyphicon glyphicon-link"></span>
                                Mostrar Url
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:cambiarNombre('{$item.url})" >
                                <span class="text-warning glyphicon glyphicon-folder-open"></span>
                                Mover a <b class="caret"></b>
                            </a>
                                <ul class="dropdown-menu">
                                    {foreach item=folder from=$ARCHIVOS}
                                        {if $folder.tipo=='carpeta'}
                                            <li><a href="javascript:mover('{$item.nombre}','{$item.path}','{$folder.path}')">{$folder.nombre}</a></li>
                                        {/if}
                                    {/foreach}
                                </ul>
                        </li>
                        <li>
                            <a href="javascript:cambiarNombre('{$item.url}','{$item.extension}')" >
                                <span class="text-success glyphicon glyphicon-edit"></span>
                                Cambiar nombre
                            </a>
                        </li>
                        <li>
                            <a href="javascript:borrarArchivo('{$item.path}')">
                                <span class="text-danger glyphicon glyphicon-trash"></span>
                                Eliminar
                            </a>
                        </li>
                    </ul>
                </div>
            {/if}
        {/foreach}
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
                    $('#modal-explorer').find('.modal-body').html('{/literal}{$ABSOLUTE_URL}{literal}'+str);
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