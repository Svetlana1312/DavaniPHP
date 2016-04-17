<?php /* Smarty version Smarty-3.1.21, created on 2015-06-17 19:37:55
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/form.busqueda.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15768560665581b07342f6d1-88978807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '017f1599309044d924e629cd3f9366dc70a0c288' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/form.busqueda.tpl',
      1 => 1434562639,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15768560665581b07342f6d1-88978807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU_CATEGORIAS_LIST' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5581b073438898_90584130',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5581b073438898_90584130')) {function content_5581b073438898_90584130($_smarty_tpl) {?><div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
	<legend>Formulario de búsqueda</legend>
	<div class="input-group">
        <div class="input-group-btn search-panel">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
            	<span id="search_concept">Filtrar categorias</span> <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
              <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MENU_CATEGORIAS_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
              		<li><a href=""><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</a></li>
              <?php } ?>
            </ul>
        </div>
        <input type="hidden" name="search_param" value="all" id="search_param">         
        <input type="text" class="form-control" name="x" placeholder="Search term...">
        <span class="input-group-btn">
            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
        </span>
    </div>
</div><?php }} ?>
