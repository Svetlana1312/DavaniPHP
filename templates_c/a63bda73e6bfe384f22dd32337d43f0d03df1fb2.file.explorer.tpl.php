<?php /* Smarty version Smarty-3.1.21, created on 2015-07-13 15:20:47
         compiled from "./templates/davani/pages/explorer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69090469955a3bb2fb74a93-02758427%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a63bda73e6bfe384f22dd32337d43f0d03df1fb2' => 
    array (
      0 => './templates/davani/pages/explorer.tpl',
      1 => 1436793344,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '69090469955a3bb2fb74a93-02758427',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_ACTUAL' => 0,
    'PATH' => 0,
    'archivos' => 0,
    'TEMPLATE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55a3bb2fba4022_55471382',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a3bb2fba4022_55471382')) {function content_55a3bb2fba4022_55471382($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ("../blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </head>
    <body style="background: white">
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
                <?php echo '<script'; ?>
>
                var misArchivos=<?php echo $_smarty_tpl->tpl_vars['archivos']->value;?>
;
                alert(misArchivos);
                <?php echo '</script'; ?>
>
                
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
                            $(window.opener.inputPadre).val($url);
                            this.window.close();
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
        <!-- Framework functions -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
js/functions.js"><?php echo '</script'; ?>
>
        <!-- efects -->
    </body>
</html><?php }} ?>
