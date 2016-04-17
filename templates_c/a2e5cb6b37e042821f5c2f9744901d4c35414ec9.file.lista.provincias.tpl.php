<?php /* Smarty version Smarty-3.1.21, created on 2015-12-01 18:50:48
         compiled from ".\templates\davani\components\lista.provincias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16438565dddf8d0f573-91220637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2e5cb6b37e042821f5c2f9744901d4c35414ec9' => 
    array (
      0 => '.\\templates\\davani\\components\\lista.provincias.tpl',
      1 => 1448014425,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16438565dddf8d0f573-91220637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CASO' => 0,
    'LISTA_PROVINCIAS' => 0,
    'DATOS_FACTURACION' => 0,
    'item' => 0,
    'STATE_ID' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565dddf8e2a5f3_81326262',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565dddf8e2a5f3_81326262')) {function content_565dddf8e2a5f3_81326262($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['CASO']->value&&$_smarty_tpl->tpl_vars['CASO']->value=='DIR-FACT') {?>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_PROVINCIAS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['DATOS_FACTURACION']->value['virtuemart_state_id']==$_smarty_tpl->tpl_vars['item']->value['id']) {?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
        <?php } else { ?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
        <?php }?>
    <?php } ?>
<?php } else { ?>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_PROVINCIAS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <?php if ($_smarty_tpl->tpl_vars['STATE_ID']->value&&$_smarty_tpl->tpl_vars['STATE_ID']->value==$_smarty_tpl->tpl_vars['item']->value['id']) {?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
        <?php } else { ?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
        <?php }?>
    <?php } ?>
<?php }?>
<?php }} ?>
