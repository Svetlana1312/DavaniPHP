<?php /* Smarty version Smarty-3.1.21, created on 2015-06-18 13:47:38
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/modificar_permisos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6978368925582afdaef3bb9-80965531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bd7347805d28d54b5d6b1fc52cfe0b0f4350275' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/modificar_permisos.tpl',
      1 => 1434359031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6978368925582afdaef3bb9-80965531',
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
  'unifunc' => 'content_5582afdaf15282_37599410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5582afdaf15282_37599410')) {function content_5582afdaf15282_37599410($_smarty_tpl) {?>
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
