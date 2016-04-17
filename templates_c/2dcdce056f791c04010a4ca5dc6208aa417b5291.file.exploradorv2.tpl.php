<?php /* Smarty version Smarty-3.1.21, created on 2015-07-17 18:07:07
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/exploradorv2.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48505496755a9282bcee095-88621323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dcdce056f791c04010a4ca5dc6208aa417b5291' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/exploradorv2.tpl',
      1 => 1436786058,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48505496755a9282bcee095-88621323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_ACTUAL' => 0,
    'PATH' => 0,
    'ABSOLUTE_URL' => 1,
    'ARCHIVOS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55a9282bd3b2e6_95575390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a9282bd3b2e6_95575390')) {function content_55a9282bd3b2e6_95575390($_smarty_tpl) {?><div class="col-xs-12">
    
    <h4>Explorador de archivos</h4>
    <div class="col-xs-12 col-sm-6">
        <form action="<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/create" method="POST">
            <label>Crear carpeta</label>
            <input type="text" name="folder" required class="form-control" />
            <input type="hidden" name="actual" value="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
" class="form-control" />
            <br>
            <button type="submit" class="btn btn-primary">Crear carpeta</button>
        </form>
    </div>
    <div class="col-xs-12 col-sm-6">
        <form action="<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/upload" enctype="multipart/form-data" method="POST">
            <label>Subir archivo</label>
            <input type="file" name="archivo" required="true" class="form-control" />
            <input type="hidden" name="actual" value="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
" />
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
        <img class="loadimg" src="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
img/loader-explorer.gif">
        <b>Desliza el ratón hacia abajo para cargar más archivos</b>
    </div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    var MisArchivos=<?php echo $_smarty_tpl->tpl_vars['ARCHIVOS']->value;?>
;
   	var max_archivos_listar=MisArchivos.length-1;
    var cargado=null;
    var i=0;
    var max_archivos=6;
    var contador=1;
    <?php echo '</script'; ?>
>

            <?php echo '<script'; ?>
>
                $(document).ready(function(){
                        var nuevo='<div class="col-xs-12 col-sm-2 file dropdown" ondblclick="window.location.href=\''+MisArchivos[0].url+'\'" ><div class="row"><div class="col-xs-12 hidden-xs"><img onload="cargarMas(0)" class="img-responsive" src="'+MisArchivos[0].icono+'"/></div><div class="col-xs-12"><span class="glyphicon glyphicon-folder-open "></span><b>'+MisArchivos[0].nombre+'</b></div></div><ul class="dropdown-menu"><li><a href=""><span class="glyphicon glyphicon-folder-open"></span>Abrir</a></li><li><a ><span class="text-success glyphicon glyphicon-edit"></span>Cambiar nombre</a></li><li><a><span class="text-danger glyphicon glyphicon-trash"></span>Eliminar</a></li><li><a href=""><span class="glyphicon glyphicon-upload"></span>Subir</a></li></ul></div>';
                            $('#cc_ex').append(nuevo);
                });
                $(document).scroll(function(){
                    if($(window).scrollTop() + $(window).height() == $(document).height()) {
					   if(i<MisArchivos.length-1){
                        	cargarMas(i);
                        }else{
                        	$('img.loadimg').parent('div').remove();
                        	loadActions();
                        }
					}
                });
                function cargarMas(n){
                    if(n<MisArchivos.length-1&&contador<max_archivos){
                    	i++;
                    	contador++;
                    	var nuevo='<div class="col-xs-12 col-sm-2 file dropdown" ondblclick="window.location.href=\''+MisArchivos[i].url+'\'" ><div class="row"><div class="col-xs-12 hidden-xs"><img onload="cargarMas('+i+')" class="img-responsive" src="'+MisArchivos[i].icono+'"/></div><div class="col-xs-12"><span class="glyphicon glyphicon-folder-open "></span><b>'+MisArchivos[i].nombre+'</b></div></div><ul class="dropdown-menu"><li><a href=""><span class="glyphicon glyphicon-folder-open"></span>Abrir</a></li><li><a ><span class="text-success glyphicon glyphicon-edit"></span>Cambiar nombre</a></li><li><a><span class="text-danger glyphicon glyphicon-trash"></span>Eliminar</a></li><li><a href=""><span class="glyphicon glyphicon-upload"></span>Subir</a></li></ul></div>';
                        $('#cc_ex').append(nuevo);    
                    }else{
                    	loadActions()
                        contador=0;
                        $('img.loadimg').siblings('b').html('Cargados '+(i+1)+' de '+(MisArchivos.length)+' archivos . Desliza el ratón hacia abajo para cargar más archivos');
                        if(i>=MisArchivos.length-1){$('img.loadimg').parent('div').remove();}
                    }
                }
                function loadActions(){
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
                }
                function cambiarNombre(surl,stipo){
                    var n=false;
                    while(n.lenght==0||n==false){
                        n=prompt('Indica el nombre nuevo:');
                    }
                    enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/rename',{oldname:surl,newname:n,tipo:stipo},'POST',false,false);
                }
                function mostrarUrl(str){
                    $('#modal-explorer').find('.modal-body').html('<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
'+str);
                    $('#modal-explorer').modal();
                }
                function mover(sname,soldpath,spath){
                    var n=confirm('Desea mover el archivo : '+sname);
                    if(n)
                    enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/move',{oldname:sname,oldpath:soldpath,newfolder:spath},'POST',false,false);
                }
                function borrarArchivo(surl){
                    var n=confirm('Desea borrar el archivo : '+surl);
                    if(n)
                    enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/delete',{url:surl},'POST',false,false);
                }
            <?php echo '</script'; ?>
>
        
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
</div><?php }} ?>
