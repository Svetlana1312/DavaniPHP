<?php /* Smarty version Smarty-3.1.21, created on 2015-12-01 18:51:45
         compiled from "C:\wamp\www\davani_old\templates\davani\components\sendero.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23567565dde314f7aa5-42291999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac5ca1af4f2b14ab4bdaacd2864a6b8e153bb57f' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\davani\\components\\sendero.tpl',
      1 => 1442263658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23567565dde314f7aa5-42291999',
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
  'unifunc' => 'content_565dde315138d3_42856256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565dde315138d3_42856256')) {function content_565dde315138d3_42856256($_smarty_tpl) {?><div id="sendero" class="row">
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
