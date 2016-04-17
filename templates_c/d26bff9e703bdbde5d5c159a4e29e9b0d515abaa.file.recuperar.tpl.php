<?php /* Smarty version Smarty-3.1.21, created on 2015-11-16 05:26:58
         compiled from ".\templates\davani\error\recuperar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1168556495b1288d802-77363918%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd26bff9e703bdbde5d5c159a4e29e9b0d515abaa' => 
    array (
      0 => '.\\templates\\davani\\error\\recuperar.tpl',
      1 => 1442263661,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1168556495b1288d802-77363918',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERROR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56495b128f12b0_31996786',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56495b128f12b0_31996786')) {function content_56495b128f12b0_31996786($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['ERROR']->value==true) {?>
<div class="alert alert-danger">
	<strong>El email introducido no es válido</strong>
</div>
<?php } else { ?>
<div class="alert alert-success">
	<strong>Se le ha enviado un email de recuperación , revise su buzón de entrada</strong>
</div>
<?php }?><?php }} ?>
