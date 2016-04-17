<?php /* Smarty version Smarty-3.1.21, created on 2015-06-17 22:37:56
         compiled from "./templates/davani/error/register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7423670315581daa44b6812-59352599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2f3ece250327fbf0cac54cde9ce8a7fff3cd74c' => 
    array (
      0 => './templates/davani/error/register.tpl',
      1 => 1434573278,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7423670315581daa44b6812-59352599',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'REGISTER_ERROR' => 0,
    'FIELD' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5581daa44f8a77_38051860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5581daa44f8a77_38051860')) {function content_5581daa44f8a77_38051860($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['REGISTER_ERROR']->value=='empty') {?>
	<div class="alert alert-danger">
		<strong>Error</strong> Por favor rellene el campo <?php echo $_smarty_tpl->tpl_vars['FIELD']->value;?>

	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['REGISTER_ERROR']->value=='email') {?>
	<div class="alert alert-danger">
		<strong>Error</strong> El email introducido ya está en uso 
	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
<?php }?><?php }} ?>
