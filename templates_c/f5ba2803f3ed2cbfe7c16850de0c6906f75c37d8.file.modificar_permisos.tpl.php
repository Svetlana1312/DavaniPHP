<?php /* Smarty version Smarty-3.1.21, created on 2015-11-29 23:34:49
         compiled from "C:\wamp\www\davani_old\templates\davani\components\modificar_permisos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18304565b7d89970a36-65876916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5ba2803f3ed2cbfe7c16850de0c6906f75c37d8' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\davani\\components\\modificar_permisos.tpl',
      1 => 1442263658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18304565b7d89970a36-65876916',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'INFO_GRUPO' => 0,
    'LISTA_ACCIONES' => 0,
    'item' => 0,
    'URL_ACTUAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565b7d899c10d8_34025195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565b7d899c10d8_34025195')) {function content_565b7d899c10d8_34025195($_smarty_tpl) {?>
<h3>Modificar permisos para grupo <small><?php echo $_smarty_tpl->tpl_vars['INFO_GRUPO']->value['nombre'];?>
</small></h3>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <tr>
                <th>Accion</th>
                <th>Descripcion</th>
                <th>Permitida</th>
            </tr>
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_ACCIONES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['icono'];?>
 <?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['item']->value['descripcion'];?>
</td>
                    <td>
                        <input type="checkbox" class="form-control" <?php if (testAccion($_smarty_tpl->tpl_vars['item']->value['id'],$_smarty_tpl->tpl_vars['INFO_GRUPO']->value['id'])==true) {?> checked <?php }?>
                        onclick="enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/modificar',{accion_id:<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
,tipo_id:<?php echo $_smarty_tpl->tpl_vars['INFO_GRUPO']->value['id'];?>
,check:$(this).is(':checked')},'POST',false,true)"
                        /> 
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div><?php }} ?>
