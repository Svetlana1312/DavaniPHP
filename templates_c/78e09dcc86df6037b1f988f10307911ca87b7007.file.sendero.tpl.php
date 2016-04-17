<?php /* Smarty version Smarty-3.1.21, created on 2015-09-04 20:44:30
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/sendero.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40843522155e9e68ef2b2a8-80576241%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '78e09dcc86df6037b1f988f10307911ca87b7007' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/sendero.tpl',
      1 => 1434121045,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40843522155e9e68ef2b2a8-80576241',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SENDERO' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55e9e68ef35ec5_36104849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e9e68ef35ec5_36104849')) {function content_55e9e68ef35ec5_36104849($_smarty_tpl) {?><div id="sendero" class="row">
    <div class="col-xs-12">
            <ol class="breadcrumb">
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SENDERO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <li>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['enlace'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</a>
                    </li>
                <?php } ?>
            </ol>
            </div>
</div><?php }} ?>
