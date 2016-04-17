<?php /* Smarty version Smarty-3.1.21, created on 2015-09-04 20:27:34
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/mis-pedidos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112064854555e9e296a22086-72882065%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5cdffb1d1ca01b636b34779cb493d8900f404f7' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/mis-pedidos.tpl',
      1 => 1434363859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112064854555e9e296a22086-72882065',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NUM_PEDIDOS' => 0,
    'LIST_PEDIDOS' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55e9e296a5ee53_97453849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e9e296a5ee53_97453849')) {function content_55e9e296a5ee53_97453849($_smarty_tpl) {?><h3>Mis pedidos</h3>
<table class="table table-bordered">
    <thead>
        <tr class="bg-dark">
            <th>Número Pedido</th>
            <th>Fecha última mod.</th>
            <th>Estado</th>
            <th>Importe</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($_smarty_tpl->tpl_vars['NUM_PEDIDOS']->value==0) {?>
            <tr>
                <td colspan="5">No se han encontrado pedidos</td>
            </tr>
        <?php }?>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LIST_PEDIDOS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['numero_pedido'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['created_on'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['order_status'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</td>
            <td></td>
        </tr>
        <?php } ?>
    </tbody>
</table><?php }} ?>
