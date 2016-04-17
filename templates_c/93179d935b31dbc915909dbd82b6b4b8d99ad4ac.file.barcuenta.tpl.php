<?php /* Smarty version Smarty-3.1.21, created on 2015-09-04 20:44:30
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/barcuenta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:117866647255e9e68ef20365-95632061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93179d935b31dbc915909dbd82b6b4b8d99ad4ac' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/barcuenta.tpl',
      1 => 1434006592,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '117866647255e9e68ef20365-95632061',
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
  'unifunc' => 'content_55e9e68ef28ae4_89912157',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e9e68ef28ae4_89912157')) {function content_55e9e68ef28ae4_89912157($_smarty_tpl) {?><div class="panel panel-default hidden-xs">
                    <div class="panel panel-heading">
                        <h2>Bienvenid@ <?php echo $_smarty_tpl->tpl_vars['DATOS_USUARIO']->value['username'];?>
</h2>
                    </div>
                    <div class="panel-body">
                        <ul>
                            <li><a class="center-block text-center" href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
mi-cuenta"><h2>Mi cuenta</h2></a></li>
                            <li><a class="center-block text-center" href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
mi-cuenta/logout"><h2>Cerrar session</h2></a></li>
                        </ul>
                    </div>
                </div><?php }} ?>
