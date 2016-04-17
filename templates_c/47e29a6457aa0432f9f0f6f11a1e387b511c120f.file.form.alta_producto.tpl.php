<?php /* Smarty version Smarty-3.1.21, created on 2015-12-01 18:51:45
         compiled from "C:\wamp\www\davani_old\templates\davani\components\form.alta_producto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29852565dde31524524-94610439%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47e29a6457aa0432f9f0f6f11a1e387b511c120f' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\davani\\components\\form.alta_producto.tpl',
      1 => 1442263656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29852565dde31524524-94610439',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LIST_CATEGORIAS' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565dde315743c5_42917815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565dde315743c5_42917815')) {function content_565dde315743c5_42917815($_smarty_tpl) {?><form action="javascript:alert('Opcion no disponible')">
    <div class="col-xs-12 col-sm-6">
        <label>Nombre de producto</label>
        <input type="text" name="nombre" class="form-control" />
        <label>Url de producto (<small>Debe ser único</small>)</label>
        <input type="text" name="nombre" class="form-control" />
        <label>Código Referencia (<small>Debe ser único</small>)</label>
        <input type="text" name="nombre" class="form-control" />
        <label>Stock </label>
        <input type="text" name="stock" class="form-control"  value="0"/>
        <label>Publicar</label>
        <select name="publicado" class="form-control">
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>
    </div>
    <div class="col-xs-12 col-sm-6">
        <label>Imagen principal</label>
        <input type="text" class="form-control" name="imagen" onclick="openKCFinder(this)" /> 
        <label>Categoria</label>
        <select name="categoria_id" class="form-control" required>
            <option selected disabled >Selecciona una categoría</option>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LIST_CATEGORIAS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</option>
            <?php } ?>
        </select>
        <label>Precio </label>
        <input type="text" name="precio" class="form-control"  value="0"/>
        <label>Peso (en KG)</label>
        <input type="text" name="peso" class="form-control"  value="0"/>
    </div>
    <div class="col-xs-12">
        <label>Descripcion</label>
        <textarea id="editor" class="form-control"></textarea>
        <?php echo $_smarty_tpl->getSubTemplate ('../components/tinymce.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </div>
    <div class="col-xs-12" id="result">
        <button class="btn btn-info">Crear producto</button>
    </div>
</form><?php }} ?>
