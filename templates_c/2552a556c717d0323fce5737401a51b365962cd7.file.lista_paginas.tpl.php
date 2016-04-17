<?php /* Smarty version Smarty-3.1.21, created on 2015-07-21 15:31:43
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/lista_paginas.tpl" */ ?>
<?php /*%%SmartyHeaderCode:625161055ae49bf724f60-45572133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2552a556c717d0323fce5737401a51b365962cd7' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/lista_paginas.tpl',
      1 => 1433953840,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '625161055ae49bf724f60-45572133',
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
  'unifunc' => 'content_55ae49bf748c89_04948941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ae49bf748c89_04948941')) {function content_55ae49bf748c89_04948941($_smarty_tpl) {?><div class="col-xs-12">
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
