<?php /* Smarty version Smarty-3.1.21, created on 2015-07-07 19:54:09
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/lista.slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1655957793559c12412bd140-82486309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ca67b64a21d3a5a60284ce94b2c18d6d2761efa' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/lista.slider.tpl',
      1 => 1434563703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1655957793559c12412bd140-82486309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SLIDER_LIST' => 0,
    'item' => 0,
    'URL_ACTUAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_559c1241302611_13557238',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559c1241302611_13557238')) {function content_559c1241302611_13557238($_smarty_tpl) {?><div class="col-xs-12">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="bg-dark">
                <tr>
                    <th>Imagen</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Texto botón</th>
                    <th>Enlace</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SLIDER_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <tr>
                    <td style="max-width: 80px">
                        <img  src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagen'];?>
" class="img-responsive" onclick="openKCFinder($(imagen_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
))" />
                        <input type="hidden" id="imagen_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagen'];?>
" name='imagen' />
                    </td>
                    <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['titulo'];?>
" id="titulo_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="titulo"  class="form-control"/></td>
                    <td><input type="text" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['descripcion'];?>
" id="descripcion_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" name="descripcion"  class="form-control"/></td>
                    <td  style="word-break: all;max-width: 80px">
                        <input type="text" id="texto_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['texto'];?>
" name="texto"  class="form-control"/>
                    </td>
                    <td  style="word-break: all;max-width: 80px">
                        <input type="text" id="enlace_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['enlace'];?>
" name="enlace"  class="form-control"/>
                    </td>
                    <td style="word-break: all;max-width: 132px">
                        <a target="slider_enlace_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['enlace'];?>
" class="btn btn-info">
                            <span class="glyphicon glyphicon-eye-open"></span>
                        </a>
                        <a class="btn btn-warning" href="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/modificar',{id:<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,titulo:$('#titulo_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
').val(),descripcion:$('#descripcion_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
').val(),texto:$('#texto_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
').val(),enlace:$('#enlace_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
').val(),imagen:$('#imagen_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
').val()},'POST',false,true)">
                            <span class="glyphicon glyphicon-floppy-save"></span>
                        </a>
                        <a class="btn btn-danger" href="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/delete',{id:<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
},'POST',false,true)">
                            <span class="glyphicon glyphicon-floppy-remove"></span>
                        </a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
            
    <small>(Haz clic en cada imagen para cargar una imagen nueva)</small>
</div><?php }} ?>
