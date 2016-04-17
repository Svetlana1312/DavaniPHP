<?php /* Smarty version Smarty-3.1.21, created on 2015-06-11 11:16:13
         compiled from "./templates/davani/error/prevent.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1752065376557951dd8bfaa0-06763760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6396bd171fd71bcb5dc96a8fbee6b41af128b4bc' => 
    array (
      0 => './templates/davani/error/prevent.tpl',
      1 => 1434014028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1752065376557951dd8bfaa0-06763760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MINUTOS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_557951dd8efff4_29667019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557951dd8efff4_29667019')) {function content_557951dd8efff4_29667019($_smarty_tpl) {?><div class="alert alert-warning">
	<strong>Has superado los 3 intentos , vuelve a intentarlo en 
	<?php if ($_smarty_tpl->tpl_vars['MINUTOS']->value==0) {?>
	menos de 1
	<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['MINUTOS']->value;?>

	<?php }?>
	minutos o contacte con un administrador</strong>
</div>
<?php }} ?>
