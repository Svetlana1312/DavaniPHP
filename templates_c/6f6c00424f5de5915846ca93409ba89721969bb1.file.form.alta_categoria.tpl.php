<?php /* Smarty version Smarty-3.1.21, created on 2015-11-23 23:32:40
         compiled from "C:\wamp\www\davani_old\templates\davani\components\form.alta_categoria.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1648956539408375662-70415281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6f6c00424f5de5915846ca93409ba89721969bb1' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\davani\\components\\form.alta_categoria.tpl',
      1 => 1442263656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1648956539408375662-70415281',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_ACTUAL' => 0,
    'LIST_CATEGORIAS' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5653940839fdd8_41047034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5653940839fdd8_41047034')) {function content_5653940839fdd8_41047034($_smarty_tpl) {?><form id="form-add" action="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/alta_categoria',$('#form-add').serialize(),'POST',false,false)">
    <div class="col-xs-12 col-sm-6">
        <label>Nombre de la categoria</label>
        <input type="text" name="nombre" required class="form-control" />
        <label>Url de la categoria (<small>Debe ser único</small>)</label>
        <input type="text" name="nombre_url" required class="form-control" />
        <label>Publicar</label>
        <select name="publicada" class="form-control">
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>
    </div>
    <div class="col-xs-12 col-sm-6">
        <label>Imagen principal</label>
        <input type="text" class="form-control" name="imagen" onclick="openKCFinder(this)" /> 
        <label>Categoria padre</label>
        <select name="categoria_id" class="form-control" required>
            <option value="0">Ninguna</option>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LIST_CATEGORIAS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['padre'];?>
-><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</option>
            <?php } ?>
        </select>
    </div>
    <div class="col-xs-12">
        <label>Descripcion</label>
        <textarea id="editor" name="descripcion" class="form-control"></textarea>
        <?php echo $_smarty_tpl->getSubTemplate ('../components/tinymce.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div class="col-xs-12" id="result">
        <button class="btn btn-info">Crear producto</button>
    </div>
</form><?php }} ?>
