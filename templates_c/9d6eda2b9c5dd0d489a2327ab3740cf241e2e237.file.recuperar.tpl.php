<?php /* Smarty version Smarty-3.1.21, created on 2015-09-04 20:38:27
         compiled from "./templates/davani/error/recuperar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:192359186955e9e523c049b9-74194556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d6eda2b9c5dd0d489a2327ab3740cf241e2e237' => 
    array (
      0 => './templates/davani/error/recuperar.tpl',
      1 => 1434008989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '192359186955e9e523c049b9-74194556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERROR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55e9e523c387c2_65850982',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e9e523c387c2_65850982')) {function content_55e9e523c387c2_65850982($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['ERROR']->value==true) {?>
<div class="alert alert-danger">
	<strong>El email introducido no es válido</strong>
</div>
<?php } else { ?>
<div class="alert alert-success">
	<strong>Se le ha enviado un email de recuperación , revise su buzón de entrada</strong>
</div>
<?php }?><?php }} ?>
