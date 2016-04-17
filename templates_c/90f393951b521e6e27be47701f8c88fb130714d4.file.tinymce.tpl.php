<?php /* Smarty version Smarty-3.1.21, created on 2015-11-27 11:54:45
         compiled from ".\templates\davani\pages\tinymce.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1079856583675ac61c3-98192958%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90f393951b521e6e27be47701f8c88fb130714d4' => 
    array (
      0 => '.\\templates\\davani\\pages\\tinymce.tpl',
      1 => 1442263664,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1079856583675ac61c3-98192958',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATOS_PAGINA' => 0,
    'ABSOLUTE_URL' => 1,
    'URL_ACTUAL' => 0,
    'PATH' => 0,
    'ARCHIVOS' => 0,
    'item' => 0,
    'folder' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56583675c8dac0_00001153',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56583675c8dac0_00001153')) {function content_56583675c8dac0_00001153($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
                <title><?php echo $_smarty_tpl->tpl_vars['DATOS_PAGINA']->value['titulo'];?>
</title>
                <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['DATOS_PAGINA']->value['descripcion'];?>
" />
                <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['DATOS_PAGINA']->value['keywords'];?>
" />
                <?php echo '<script'; ?>
>
                    var ABSOLUTE_URL='<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
';
                <?php echo '</script'; ?>
>
		<?php echo $_smarty_tpl->getSubTemplate ('../blocks/links_top.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</head>
	<body>
            <div class="col-xs-12">
    
    <h4>Explorador de archivos</h4>
    <div class="col-xs-12 col-sm-6">
        <form action="<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/create" method="POST">
            <label>Crear carpeta</label>
            <input type="text" name="folder" class="form-control" />
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
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ARCHIVOS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['tipo']=='carpeta') {?>
                <?php if ($_smarty_tpl->tpl_vars['item']->value['nombre']!='Subir carpeta') {?>
                    <div class="col-xs-12 col-sm-2 file dropdown" ondblclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;
echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
'" >
                <?php } else { ?>
                    <div class="col-xs-12 col-sm-2 file dropdown" ondblclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
'" >
                <?php }?>
                    <div class="row">
                        <div class="col-xs-12 hidden-xs">
                            <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['icono'];?>
"/>
                        </div>
                        <div class="col-xs-12">
                            <span class="glyphicon glyphicon-folder-open "></span>
                            <b><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</b>
                        </div>
                    </div>
                    <ul class="dropdown-menu">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value['nombre']!='Subir carpeta') {?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;
echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
">
                                    <span class="glyphicon glyphicon-folder-open"></span>
                                    Abrir
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
?<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
/">
                                    <span class="text-success glyphicon glyphicon-edit"></span>
                                    Cambiar nombre
                                </a>
                            </li>
                            <li>
                                <a href="javascript:borrarArchivo('<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
')">
                                    <span class="text-danger glyphicon glyphicon-trash"></span>
                                    Eliminar
                                </a>
                            </li>
                        <?php } else { ?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/">
                                    <span class="glyphicon glyphicon-upload"></span>
                                    Subir
                                </a>
                            </li>
                        <?php }?>
                        
                    </ul>
                </div>
            <?php }?>
        <?php } ?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ARCHIVOS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['item']->value['tipo']!='carpeta') {?>
                <div class="col-xs-12 col-sm-2 file">
                    <div class="row">
                        <div class="col-xs-12 hidden-xs">
                            <img class="img-responsive thumbnail" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['icono'];?>
"/>
                        </div>
                        <div class="col-xs-12">
                            <span class="glyphicon glyphicon-file"></span>
                            <b><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</b>
                        </div>
                    </div>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="javascript:mostrarUrl('<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
')">
                                <span class="text-info glyphicon glyphicon-link"></span>
                                Mostrar Url
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:cambiarNombre('<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
)" >
                                <span class="text-warning glyphicon glyphicon-folder-open"></span>
                                Mover a <b class="caret"></b>
                            </a>
                                <ul class="dropdown-menu">
                                    <?php  $_smarty_tpl->tpl_vars['folder'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['folder']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ARCHIVOS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['folder']->key => $_smarty_tpl->tpl_vars['folder']->value) {
$_smarty_tpl->tpl_vars['folder']->_loop = true;
?>
                                        <?php if ($_smarty_tpl->tpl_vars['folder']->value['tipo']=='carpeta') {?>
                                            <li><a href="javascript:mover('<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
','<?php echo $_smarty_tpl->tpl_vars['folder']->value['path'];?>
')"><?php echo $_smarty_tpl->tpl_vars['folder']->value['nombre'];?>
</a></li>
                                        <?php }?>
                                    <?php } ?>
                                </ul>
                        </li>
                        <li>
                            <a href="javascript:cambiarNombre('<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
','<?php echo $_smarty_tpl->tpl_vars['item']->value['extension'];?>
')" >
                                <span class="text-success glyphicon glyphicon-edit"></span>
                                Cambiar nombre
                            </a>
                        </li>
                        <li>
                            <a href="javascript:borrarArchivo('<?php echo $_smarty_tpl->tpl_vars['item']->value['path'];?>
')">
                                <span class="text-danger glyphicon glyphicon-trash"></span>
                                Eliminar
                            </a>
                        </li>
                    </ul>
                </div>
            <?php }?>
        <?php } ?>
        
            <?php echo '<script'; ?>
>
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
                    enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/rename',{oldname:surl,newname:n,tipo:stipo},'POST',false,false);
                }
                function mostrarUrl(str){
                    $('#modal-explorer').find('.modal-body').html(str);
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
                function seleccionar($url){
			  var args = top.tinymce.activeEditor.windowManager.getParams();
			  win = (args.window);
			  input = (args.input);
			  win.document.getElementById(input).value = $url;
			  top.tinymce.activeEditor.windowManager.close();
		}
            <?php echo '</script'; ?>
>
        
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
        <?php echo $_smarty_tpl->getSubTemplate ('../blocks/links_bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html><?php }} ?>
