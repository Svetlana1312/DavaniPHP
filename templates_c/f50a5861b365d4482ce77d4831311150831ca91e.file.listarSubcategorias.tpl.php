<?php /* Smarty version Smarty-3.1.21, created on 2016-04-17 11:32:40
         compiled from "C:\xampp\htdocs\davani_old\templates\davani\components\listarSubcategorias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:60415713583872ae53-38955019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f50a5861b365d4482ce77d4831311150831ca91e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\davani_old\\templates\\davani\\components\\listarSubcategorias.tpl',
      1 => 1447243087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60415713583872ae53-38955019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CATEGORIA' => 0,
    'SUBCATEGORIAS' => 0,
    'URL_ACTUAL' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_57135838c5b198_82965672',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57135838c5b198_82965672')) {function content_57135838c5b198_82965672($_smarty_tpl) {?><div class="row">
    <div class="col-xs-12">
        <h2><?php echo $_smarty_tpl->tpl_vars['CATEGORIA']->value['nombre'];?>
</h2>
        
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUBCATEGORIAS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre_url'];?>
" class="col-xs-12 col-sm-2 thumbnail list-categorias hidden-xs">
            <div class="row">
                <div class="hidden-xs col-sm-12">
                    <img class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagen_resized'];?>
" data-toggle="tooltip" data-placement="bottom"  />
                </div>
                <div class="col-xs-12 col-sm-12">
                    <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</h3>
                </div>
            </div>
        </a>
        <?php } ?>
        <ul class="visible-xs list-categorias">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUBCATEGORIAS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre_url'];?>
" class="col-xs-12">
                        <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</h3>
                    </a></li>
            <?php } ?>
        </ul>
    </div>
</div><?php }} ?>
