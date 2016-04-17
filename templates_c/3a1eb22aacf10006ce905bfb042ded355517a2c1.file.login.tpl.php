<?php /* Smarty version Smarty-3.1.21, created on 2015-09-04 20:39:38
         compiled from "./templates/davani/error/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19461940855e9e56a3c8130-16500532%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a1eb22aacf10006ce905bfb042ded355517a2c1' => 
    array (
      0 => './templates/davani/error/login.tpl',
      1 => 1434305622,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19461940855e9e56a3c8130-16500532',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ERROR_LOGIN' => 0,
    'URL_VUELTA' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55e9e56a3fdc85_90986446',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e9e56a3fdc85_90986446')) {function content_55e9e56a3fdc85_90986446($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['ERROR_LOGIN']->value==true) {?>
	<button class="btn btn-block btn-primary">
        Entrar
    </button>
	<div class="alert alert-danger">Datos no válidos</div>
<?php } else { ?>
	<b class="text-success">Iniciando sesión</b>
	<?php echo '<script'; ?>
>
			window.location.href='<?php echo $_smarty_tpl->tpl_vars['URL_VUELTA']->value;?>
';
	<?php echo '</script'; ?>
>
<?php }?><?php }} ?>
