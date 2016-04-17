<?php /* Smarty version Smarty-3.1.21, created on 2015-07-13 12:59:02
         compiled from "./templates/davani/pages/carrito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163532690755a399f6973b93-61683608%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ebcee8edc26a7ce3bc7af3258a4e6d592cae222' => 
    array (
      0 => './templates/davani/pages/carrito.tpl',
      1 => 1436779908,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163532690755a399f6973b93-61683608',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LOGIN' => 0,
    'PLANTILLA' => 0,
    'item' => 0,
    'TEMPLATE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55a399f69c5427_91379039',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a399f69c5427_91379039')) {function content_55a399f69c5427_91379039($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ("../blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </head>
    <body>
        <div class="container">
            <?php echo $_smarty_tpl->getSubTemplate ("../blocks/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <hr class="hidden-xs"/>
            <div id="sendero" class="row">
                <div class="col-xs-12">
                </div>
            </div>
            <div id="content" class="row">
                <div id="bar" class="col-xs-12 col-sm-3">
                    <!-- bar menu -->
                    <?php echo $_smarty_tpl->getSubTemplate ("../components/barmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <!-- login -->
                    <?php if ($_smarty_tpl->tpl_vars['LOGIN']->value!=true) {?>
                        <?php echo $_smarty_tpl->getSubTemplate ("../components/barlogin.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php } else { ?>
                        <?php echo $_smarty_tpl->getSubTemplate ('../components/barcuenta.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php }?>
                    <!-- facebook plguin -->
                    
                </div>
                <div id="main" class="col-xs-12 col-sm-9">
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PLANTILLA']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                        <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['item']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

                    <?php } ?>
                </div>
            </div>
            <hr/>
            <?php echo $_smarty_tpl->getSubTemplate ("../blocks/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        </div>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
js/functions.js"><?php echo '</script'; ?>
>
        <!-- Magnify js -->
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE_URL']->value;?>
js/imagezoom.js"><?php echo '</script'; ?>
>
        <!-- efects -->

    </body>
</html><?php }} ?>
