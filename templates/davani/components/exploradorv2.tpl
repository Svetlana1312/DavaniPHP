<div class="col-xs-12">
    
    <h4>Explorador de archivos</h4>
    <div class="col-xs-12 col-sm-6">
        <form action="{$ABSOLUTE_URL}/mi-cuenta/explorador-de-archivos/create" method="POST">
            <label>Crear carpeta</label>
            <input type="text" name="folder" required class="form-control" />
            <input type="hidden" name="actual" value="{$PATH}" class="form-control" />
            <br>
            <button type="submit" class="btn btn-primary">Crear carpeta</button>
        </form>
    </div>
    <div class="col-xs-12 col-sm-6">
        <form action="{$ABSOLUTE_URL}mi-cuenta/explorador-de-archivos/upload" enctype="multipart/form-data" method="POST">
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
    <div class="col-xs-12" id="cc_ex">

    </div>
    <div class="col-xs-12">
        <img class="loadimg" src="{$ABSOLUTE_URL}img/loader-explorer.gif">
        <b>Desliza el ratón hacia abajo para cargar más archivos</b>
    </div>
</div>
<script type="text/javascript">
    var MisArchivos={$ARCHIVOS};
   	var max_archivos_listar=MisArchivos.length-1;

    var cargado=null;
    var i=0;
    var max_archivos=6;
    var contador=1;
    </script>
{literal}
            <script>

                $(document).ready(function(){
                        var nuevo='<div class="col-xs-12 col-sm-2 file dropdown"' +
                                ' ondblclick="window.location.href=\''+MisArchivos[0].url+'\'" >' +
                                '<div class="row">' +
                                '<div class="col-xs-12 hidden-xs">' +
                                '<img onload="cargarMas(0)" class="img-responsive" src="'+MisArchivos[0].icono+'"/>' +
                                '</div>'+
                                '<div class="col-xs-12">' +
                                '<b>'+MisArchivos[0].nombre+'</b>' +
                                '</div>' +
                                '</div>' +
                                '<ul class="dropdown-menu">' +
                                '<li><a href=""><span class="glyphicon glyphicon-folder-open"></span>Abrir</a></li>' +
                                '<li><a href="javascript:cambiarNombre(\''+MisArchivos[0].path+'\',\''+MisArchivos[0].tipo+'\');"><span class="text-success glyphicon glyphicon-edit"></span>Cambiar nombre</a></li>' +
                                '<li><a href="javascript:mover(\''+MisArchivos[0].path+'\',\''+MisArchivos[0].tipo+'\');"><span class="text-success glyphicon glyphicon-edit"></span>Mover a</a></li>' +
                                '<li><a href="javascript:borrarArchivo(\''+MisArchivos[0].path+'\');"><span class="text-danger glyphicon glyphicon-trash"></span>Eliminar</a></li>' +
                                '<li><a href=""><span class="glyphicon glyphicon-upload"></span>Subir</a></li>' +
                                '</ul></div>';
                            $('#cc_ex').append(nuevo);
                });
                var bottom=$(document).height()-$(window).height();
                $(document).scroll(function(){

                    var position=$(this).scrollTop();
                    //if(position===bottom){
                        if(i<MisArchivos.length-1){
                            cargarMas(i);
                        }else{
                            $('img.loadimg').parent('div').remove();
                            loadActions();
                        }
                   // }

                   /* if($(window).scrollTop() + $(window).height() == $(document).height()) {
					   if(i<MisArchivos.length-1){
                        	cargarMas(i);
                        }else{
                        	$('img.loadimg').parent('div').remove();
                        	loadActions();
                        }
					}*/
                });
                function cargarMas(n){
                    if(n<(MisArchivos.length-1) && contador<max_archivos){
                    	i++;
                    	contador++;
                    	var nuevo='<div class="col-xs-12 col-sm-2 file dropdown" ondblclick="window.location.href=\''+MisArchivos[i].url+'\'" >' +
                                '<div class="row">' +
                                '<div class="col-xs-12 hidden-xs">' +
                                '<img onload="cargarMas('+i+')" class="img-responsive" src="'+MisArchivos[i].icono+'"/>' +
                                '</div>' +
                                '<div class="col-xs-12">' +
                                '<b>'+MisArchivos[i].nombre+'</b>' +
                                '</div></div>' +
                                '<ul class="dropdown-menu">' +
                                '<li><a href=""><span class="glyphicon glyphicon-folder-open"></span>Abrir</a></li>' +
                                '<li><a href="javascript:cambiarNombre(\''+MisArchivos[i].path+'\',\''+MisArchivos[i].tipo+'\');"><span class="text-success glyphicon glyphicon-edit"></span>Cambiar nombre</a></li>' +
                                '<li><a href="javascript:mover(\''+MisArchivos[i].path+'\',\''+MisArchivos[i].tipo+'\');"><span class="text-success glyphicon glyphicon-edit"></span>Mover a</a></li>' +
                                '<li><a href="javascript:borrarArchivo(\''+MisArchivos[i].path+'\');"><span class="text-danger glyphicon glyphicon-trash"></span>Eliminar</a></li>' +
                                '<li><a href=""><span class="glyphicon glyphicon-upload"></span>Subir</a></li></ul></div>';
                        $('#cc_ex').append(nuevo);
                    }else{
                    	loadActions();
                        contador=0;
                        $('img.loadimg').siblings('b').html('Cargados '+(i+1)+' de '+(MisArchivos.length)+' archivos . Desliza el ratón hacia abajo para cargar más archivos');
                        if(i>=MisArchivos.length-1){$('img.loadimg').parent('div').remove();}
                    }
                }
                function loadActions(){
                	$('.file').bind('contextmenu',function(e){
                    	e.preventDefault();
                    	$(this).children('.dropdown-menu').css('display','block');
	                });
	                $('.dropdown-menu').bind('mouseleave',function(){
	                   $(this).fadeOut('slow');
	                });
	                $('li.dropdown').click(function(){
	                    $(this).children('ul.dropdown-menu').css('display','block');
	                });
	                $('li.dropdown').hover(function(){
	                    $(this).children('ul.dropdown-menu').css('display','block');
	                });
                }
                function cambiarNombre(surl,stipo){
                    var n=false;
                    while(n.lenght==0||n==false){
                        n=prompt('Indica el nombre nuevo:');
                    }
                    enviarDatosAjax('{/literal}{$ABSOLUTE_URL}{literal}mi-cuenta/explorador-de-archivos/rename',{oldname:surl,newname:n,tipo:stipo},'POST',false,true);
                }
                function mostrarUrl(str){
                    $('#modal-explorer').find('.modal-body').html('{/literal}{$ABSOLUTE_URL}{literal}'+str);
                    $('#modal-explorer').modal();
                }
                function mover(sname,stipo){
                    var snewpath=prompt('Donde desea mover el archivo  '+sname+' ?');
                    if(snewpath)
                    enviarDatosAjax('{/literal}{$ABSOLUTE_URL}{literal}mi-cuenta/explorador-de-archivos/move',{oldname:sname,tipo:stipo,newfolder:snewpath},'POST',false,true);
                }
                function borrarArchivo(surl){
                    var n=confirm('Desea borrar el archivo '+surl+'?');
                    if(n)
                    enviarDatosAjax('{/literal}{$ABSOLUTE_URL}{literal}mi-cuenta/explorador-de-archivos/delete',{url:surl},'POST',false,true);
                }
            </script>
        {/literal}
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