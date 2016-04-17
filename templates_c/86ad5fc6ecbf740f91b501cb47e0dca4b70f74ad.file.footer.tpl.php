<?php /* Smarty version Smarty-3.1.21, created on 2015-09-13 00:46:46
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/blocks/footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:86436040855f4ab5694f8d6-07256957%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86ad5fc6ecbf740f91b501cb47e0dca4b70f74ad' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/blocks/footer.tpl',
      1 => 1436794080,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86436040855f4ab5694f8d6-07256957',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MENU_LIST' => 1,
    'ABSOLUTE_URL' => 1,
    'item' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55f4ab569624a0_97333987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4ab569624a0_97333987')) {function content_55f4ab569624a0_97333987($_smarty_tpl) {?><div id="footer" class="row">
            <div class="col-xs-12 col-sm-3">
                <ul>
                    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MENU_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <li><span class="glyphicon glyphicon-circle-arrow-right"></span> <a href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;
echo $_smarty_tpl->tpl_vars['item']->value['nombre_url'];?>
"> <?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</a></li>
                    <?php } ?>
                </ul>
                <hr class="visible-xs">
            </div>
            <div class="col-xs-12 text-right col-sm-9">
               <?php echo getInfoSystem('COPYRIGHT');?>
<br/>
               Puede consultar nuestros textos legales <a href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
terminos-de-uso-y-legal">aquí</a>
            </div>
            <div class="col-xs-12 text-center text-muted">
                Powered by Aclass Internet y Comunicaciones SL<br>
                <a target="w3c" href="http://validator.w3.org/check?uri=http%3A%2F%2Fdavani.aclass.pro%2F">
                    <img src="https://www.w3.org/Icons/WWW/w3c_home_nb" alt="w3c validator logo" title="página validada" /><br/>
                    Página validada por w3c
                </a>
            </div>
            <a href="#top" class="col-xs-2 col-xs-offset-5 col-sm-1  col-sm-offset-11 text-center to-top clearfix btn-primary">
                <span class="glyphicon glyphicon-chevron-up center-block"></span>
                <span class="center-block text-center">TOP</span>
            </a>
        </div>
<?php }} ?>
