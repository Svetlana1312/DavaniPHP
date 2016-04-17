<?php /* Smarty version Smarty-3.1.21, created on 2015-09-04 20:44:30
         compiled from "./templates/davani/pages/cuenta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143211895455e9e68ee1fb45-42994281%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '634ca976e6b9ca58b8cd6d350f18f721ab8ac44c' => 
    array (
      0 => './templates/davani/pages/cuenta.tpl',
      1 => 1436792403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143211895455e9e68ee1fb45-42994281',
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
  'unifunc' => 'content_55e9e68ee7d924_90316082',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e9e68ee7d924_90316082')) {function content_55e9e68ee7d924_90316082($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es">
    <head>
        <?php echo $_smarty_tpl->getSubTemplate ("../blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    </head>
    <body>
        <?php echo $_smarty_tpl->getSubTemplate ("../../librarys/js/facebooktrigger.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <div class="container">
            <?php echo $_smarty_tpl->getSubTemplate ("../blocks/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <hr class="hidden-xs"/>
            <div id="sendero" class="row">
                <div class="col-xs-12">
                </div>
            </div>
            <div id="content" class="row">
                <div id="bar" class="col-xs-12 col-sm-2">
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
                <div id="main" class="col-xs-12 col-sm-10">
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
        
        
        <!--Start of Tawk.to Script-->
<?php echo '<script'; ?>
 type="text/javascript">
var $_Tawk_API={},$_Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/557824a0da5e8eab747077fc/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
<?php echo '</script'; ?>
>
<!--End of Tawk.to Script-->

    </body>

</html><?php }} ?>
