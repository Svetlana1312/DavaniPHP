<?php /* Smarty version Smarty-3.1.21, created on 2015-12-01 18:48:13
         compiled from "C:\wamp\www\davani_old\templates\davani\components\lista_paginas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19823565ddd5d24ddd2-59783441%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e0024aacb83817bc33c4be2cc4e2fa5f110ce979' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\davani\\components\\lista_paginas.tpl',
      1 => 1442263657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19823565ddd5d24ddd2-59783441',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PAGINAS_SYS' => 0,
    'item' => 0,
    'URL_ACTUAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565ddd5d2c3d75_17841014',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565ddd5d2c3d75_17841014')) {function content_565ddd5d2c3d75_17841014($_smarty_tpl) {?><div class="col-xs-12">
    <h4>Modificar paginas del sistema</h4>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr class="bg-defaul">
                <th>Nombre</th>
                <th>Titulo</th>
                <th>Menu</th>
                <th>Publicar</th>
                <th>Accion</th>
            </tr>
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PAGINAS_SYS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['item']->value['titulo'];?>
</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['menu']==1) {?>
                        <span class="glyphicon glyphicon-ok text-success"></span>
                    <?php } else { ?>
                        <span class="glyphicon glyphicon-remove text-danger"></span>
                    <?php }?>
                </td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['publicada']==1) {?>
                        <span class="glyphicon glyphicon-ok text-success"></span>
                    <?php } else { ?>
                        <span class="glyphicon glyphicon-remove text-danger"></span>
                    <?php }?>
                </td>
                <td>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre_url'];?>
" class="btn btn-warning btn-circle">
                        <span class="glyphicon glyphicon-cog"></span>
                    </a>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value['sistema']==0) {?>
                    <button class="btn btn-danger  btn-circle">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                    <?php } else { ?>
                    <button disabled class="btn btn-danger  btn-circle">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>   
                    <?php }?>
                </td>
            </tr>
        <?php } ?>
        </table>
    </div>
</div><?php }} ?>
