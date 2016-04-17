<?php /* Smarty version Smarty-3.1.21, created on 2015-11-29 23:35:07
         compiled from "C:\wamp\www\davani_old\templates\davani\components\grupos_usuarios.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20209565b7d9beb1ab8-00297762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d84d55556cf7af15fd4a566825708aa28795beb' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\davani\\components\\grupos_usuarios.tpl',
      1 => 1442263656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20209565b7d9beb1ab8-00297762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LISTA_TIPOS_USUARIOS' => 0,
    'item' => 0,
    'URL_ACTUAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565b7d9bed4b38_82575891',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565b7d9bed4b38_82575891')) {function content_565b7d9bed4b38_82575891($_smarty_tpl) {?><div class="table-responsive">
    <table class="table table-bordered table-hover">
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_TIPOS_USUARIOS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['descripcion'];?>
</td>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
" class="btn btn-warning">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div><?php }} ?>
