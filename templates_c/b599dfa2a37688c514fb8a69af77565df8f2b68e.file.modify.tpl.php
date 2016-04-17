<?php /* Smarty version Smarty-3.1.21, created on 2015-11-17 06:47:33
         compiled from ".\templates\davani\error\modify.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18419564abf753b2112-96792768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b599dfa2a37688c514fb8a69af77565df8f2b68e' => 
    array (
      0 => '.\\templates\\davani\\error\\modify.tpl',
      1 => 1447650838,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18419564abf753b2112-96792768',
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
  'unifunc' => 'content_564abf7544d673_92307743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564abf7544d673_92307743')) {function content_564abf7544d673_92307743($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['REGISTER_ERROR']->value=='empty') {?>
	<div class="alert alert-danger">
		<strong>Error</strong> Por favor rellene el campo <?php echo $_smarty_tpl->tpl_vars['FIELD']->value;?>

	</div>
	<button class="btn btn-lg btn-success  center-block">Modificar cuenta</button>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['REGISTER_ERROR']->value=='email_existe') {?>
	<div class="alert alert-danger">
		<strong>Error</strong> El email <?php echo $_smarty_tpl->tpl_vars['FIELD']->value;?>
 introducido ya está en uso 
	</div>
	<button class="btn btn-lg btn-success  center-block">Modificar cuenta</button>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['REGISTER_ERROR']->value=='usuario_existe') {?>
	<div class="alert alert-danger">
		<strong>Error</strong> El usuario <?php echo $_smarty_tpl->tpl_vars['FIELD']->value;?>
 introducido ya está en uso
	</div>
	<button class="btn btn-lg btn-success  center-block">Modificar cuenta</button>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['REGISTER_ERROR']->value=='email_no_valido') {?>
	<div class="alert alert-danger">
		<strong>Error</strong> <?php echo $_smarty_tpl->tpl_vars['FIELD']->value;?>
 no es un email válido
	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['REGISTER_ERROR']->value=='password_no_coincide') {?>
	<div class="alert alert-danger">
		<strong>Error</strong> La contraseña no coincide. Por favor, vuelva a introducirla.
	</div>
	<button class="btn btn-lg btn-success  center-block">Modificar cuenta</button>
<?php }?><?php }} ?>
