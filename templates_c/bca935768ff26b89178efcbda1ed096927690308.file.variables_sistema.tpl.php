<?php /* Smarty version Smarty-3.1.21, created on 2015-07-07 17:15:40
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/variables_sistema.tpl" */ ?>
<?php /*%%SmartyHeaderCode:783290687559bed1c1697b2-45659167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bca935768ff26b89178efcbda1ed096927690308' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/variables_sistema.tpl',
      1 => 1434365625,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '783290687559bed1c1697b2-45659167',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VARIABLES_SYS' => 0,
    'item' => 0,
    'URL_ACTUAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_559bed1c1d63f2_70570921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559bed1c1d63f2_70570921')) {function content_559bed1c1d63f2_70570921($_smarty_tpl) {?><div class="col-xs-12">
    <h4>Modificar variables del sistema</h4>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th>Nombre</th>
                <th>Valor</th>
                <th>Descripcion</th>
                <th>Accion</th>
            </tr>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['VARIABLES_SYS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['foo']['iteration']++;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['input']=='input') {?>
                    <input type="text" class="form-control valor<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['iteration'];?>
" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['valor'];?>
' >
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['input']=='textarea') {?>
                    <textarea class="form-control valor<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['iteration'];?>
" ><?php echo $_smarty_tpl->tpl_vars['item']->value['valor'];?>
</textarea>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['input']=='image') {?>
                    <input type="text" onclick="openKCFinder(this)" class="form-control valor<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['iteration'];?>
" value='<?php echo $_smarty_tpl->tpl_vars['item']->value['valor'];?>
' >
                    <?php }?>
                </td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['descripcion'];?>
</td>
                <td>
                    <button type="button" class="btn btn-warning btn-circle" 
                    onclick="enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/guardar',{id:'<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
',valor:makeSafety_url($('.valor<?php echo $_smarty_tpl->getVariable('smarty')->value['foreach']['foo']['iteration'];?>
').val())},'POST',false,false)">
                        <span class="glyphicon glyphicon-cog"></span>
                    </button>
                </td>
            </tr>
        <?php } ?>
        </table>
    </div>
</div>
<?php }} ?>
