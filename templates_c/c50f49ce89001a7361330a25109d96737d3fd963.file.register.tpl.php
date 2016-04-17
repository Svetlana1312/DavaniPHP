<?php /* Smarty version Smarty-3.1.21, created on 2015-11-16 05:32:10
         compiled from ".\templates\davani\error\register.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1070656495c4aa775b6-02177108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c50f49ce89001a7361330a25109d96737d3fd963' => 
    array (
      0 => '.\\templates\\davani\\error\\register.tpl',
      1 => 1446984948,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1070656495c4aa775b6-02177108',
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
  'unifunc' => 'content_56495c4ad9c498_58375586',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56495c4ad9c498_58375586')) {function content_56495c4ad9c498_58375586($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['REGISTER_ERROR']->value=='empty') {?>
	<div class="alert alert-danger">
		<strong>Error</strong> Por favor rellene el campo <?php echo $_smarty_tpl->tpl_vars['FIELD']->value;?>

	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['REGISTER_ERROR']->value=='email_existe') {?>
	<div class="alert alert-danger">
		<strong>Error</strong> El email <?php echo $_smarty_tpl->tpl_vars['FIELD']->value;?>
 introducido ya está en uso 
	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['REGISTER_ERROR']->value=='email_no_valido') {?>
	<div class="alert alert-danger">
		<strong>Error</strong> <?php echo $_smarty_tpl->tpl_vars['FIELD']->value;?>
 no es un email válido
	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['REGISTER_ERROR']->value=='mail_no_enviado') {?>
	<div class="alert alert-danger">
		<strong>Error</strong> El mensaje no se ha podido enviar
	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['REGISTER_ERROR']->value=='mail_enviado') {?>
	<div class="alert alert-danger">
		El proceso de registración se ha completado con exito!<br />
         Pronto recibirá un email con los datos de su cuenta.	
	</div>
	
	<?php echo '<script'; ?>
>
		setTimeout(function(){window.location.href = ABSOLUTE_URL;},2000);
	<?php echo '</script'; ?>
>
   
	
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['REGISTER_ERROR']->value=='usuario_existe') {?>
	<div class="alert alert-danger">
		<strong>Error</strong> Usuario con este nombre ya existe. Por favor, indique otro nombre de usuario.
	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['REGISTER_ERROR']->value=='email_no_coincide') {?>
	<div class="alert alert-danger">
		<strong>Error</strong> El correo electrónico no coincide. Por favor, vuelva a introducirlo.
	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['REGISTER_ERROR']->value=='password_no_coincide') {?>
	<div class="alert alert-danger">
		<strong>Error</strong> La contraseña no coincide. Por favor, vuelva a introducirla.
	</div>
	<button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
<?php }?><?php }} ?>
