<?php /* Smarty version Smarty-3.1.21, created on 2015-11-16 11:00:02
         compiled from ".\templates\davani\components\lista.ciudades.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204455649a922394720-02594561%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '930ed08f809a1cbd28a7a65a3912fc87c32382dd' => 
    array (
      0 => '.\\templates\\davani\\components\\lista.ciudades.tpl',
      1 => 1447650838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204455649a922394720-02594561',
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
  'unifunc' => 'content_5649a9223f2b71_61907964',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5649a9223f2b71_61907964')) {function content_5649a9223f2b71_61907964($_smarty_tpl) {?><?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_CIUDADES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
<?php } ?><?php }} ?>
