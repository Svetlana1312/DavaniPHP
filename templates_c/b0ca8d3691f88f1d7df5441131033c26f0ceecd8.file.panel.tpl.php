<?php /* Smarty version Smarty-3.1.21, created on 2015-09-04 20:44:30
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/panel.tpl" */ ?>
<?php /*%%SmartyHeaderCode:108650817555e9e68ef38610-33176457%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0ca8d3691f88f1d7df5441131033c26f0ceecd8' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/panel.tpl',
      1 => 1434117243,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '108650817555e9e68ef38610-33176457',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ACCIONES' => 0,
    'URL_ACTUAL' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55e9e68f008eb1_64707832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e9e68f008eb1_64707832')) {function content_55e9e68f008eb1_64707832($_smarty_tpl) {?><div class="row">
    <div class="col-xs-12">
        <h3>Área de notificaciones</h3>
        <hr>
        <small>(Ninguna notificación)</small>
        <hr>
        <h3>Opciones de la cuenta</h3>
        <hr>
    </div>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ACCIONES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <div onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['url'];?>
'" class="col-xs-12 col-sm-6">
        <div class="offer offer-info">
                <div class="shape">
                        <div class="shape-text">
                           <?php echo $_smarty_tpl->tpl_vars['item']->value['icono'];?>
                         
                        </div>
                </div>
                <div class="offer-content">
                        <h3 class="lead">
                           <?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>

                        </h3>                       
                        <p>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['descripcion'];?>

                        </p>
                </div>
        </div>
    </div>
    <?php } ?>    
</div>
<?php }} ?>
