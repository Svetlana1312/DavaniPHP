<?php /* Smarty version Smarty-3.1.21, created on 2015-06-18 01:30:06
         compiled from "./templates/davani/components/lista.ciudades.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1037982296558202febe94d9-20273368%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1682d0983dc3c09a69812dcf56818bdca634b03b' => 
    array (
      0 => './templates/davani/components/lista.ciudades.tpl',
      1 => 1434567816,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1037982296558202febe94d9-20273368',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTA_CIUDADES' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_558202fec2d2c7_26097545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_558202fec2d2c7_26097545')) {function content_558202fec2d2c7_26097545($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_CIUDADES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</option>
<?php } ?><?php }} ?>
