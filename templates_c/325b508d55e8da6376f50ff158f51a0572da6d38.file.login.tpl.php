<?php /* Smarty version Smarty-3.1.21, created on 2015-12-01 15:07:10
         compiled from ".\templates\davani\error\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:716565da98ed02e13-76772357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '325b508d55e8da6376f50ff158f51a0572da6d38' => 
    array (
      0 => '.\\templates\\davani\\error\\login.tpl',
      1 => 1446921109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '716565da98ed02e13-76772357',
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
  'unifunc' => 'content_565da98ed62806_85181189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565da98ed62806_85181189')) {function content_565da98ed62806_85181189($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['ERROR_LOGIN']->value==true) {?>
	<button class="btn btn-block btn-primary" onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['URL_VUELTA']->value;?>
';">
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
