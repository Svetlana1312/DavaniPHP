<?php /* Smarty version Smarty-3.1.21, created on 2015-12-01 18:51:45
         compiled from "C:\wamp\www\davani_old\templates\davani\components\barcuenta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15726565dde314d42d1-99908598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '087b6c83b535cee54d9e3459f96c4b201cf17333' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\davani\\components\\barcuenta.tpl',
      1 => 1446985037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15726565dde314d42d1-99908598',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATOS_USUARIO' => 0,
    'ABSOLUTE_URL' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565dde314e8506_52990250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565dde314e8506_52990250')) {function content_565dde314e8506_52990250($_smarty_tpl) {?><div class="panel panel-default hidden-xs">
                    <div class="panel panel-heading">
                        <h2>Bienvenid@ <?php echo $_smarty_tpl->tpl_vars['DATOS_USUARIO']->value['nombre'];?>
</h2>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li><a class="center-block text-center" href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
mi-cuenta"><h2>Mi perfil</h2></a></li>
                            <li><a class="center-block text-center" href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
mi-cuenta/logout"><h2>Cerrar session</h2></a></li>
                        </ul>
                    </div>
                </div><?php }} ?>
