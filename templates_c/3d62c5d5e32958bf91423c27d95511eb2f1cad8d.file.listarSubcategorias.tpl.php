<?php /* Smarty version Smarty-3.1.21, created on 2015-09-08 09:54:52
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/listarSubcategorias.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27061531755ee944c0b5774-55758813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d62c5d5e32958bf91423c27d95511eb2f1cad8d' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/listarSubcategorias.tpl',
      1 => 1433929346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27061531755ee944c0b5774-55758813',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CATEGORIA' => 0,
    'SUBCATEGORIAS' => 0,
    'URL_ACTUAL' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ee944c0e7607_07927705',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ee944c0e7607_07927705')) {function content_55ee944c0e7607_07927705($_smarty_tpl) {?><div class="row">
    <div class="col-xs-12">
        <h2><?php echo $_smarty_tpl->tpl_vars['CATEGORIA']->value['nombre'];?>
</h2>
        
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUBCATEGORIAS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
        <a href="<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre_url'];?>
" class="col-xs-12 col-sm-2 thumbnail list-categorias hidden-xs">
            <div class="row">
                <div class="hidden-xs col-sm-12">
                    <img class="img-responsive" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagen_resized'];?>
" data-toggle="tooltip" data-placement="bottom"  />
                </div>
                <div class="col-xs-12 col-sm-12">
                     <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</h3>
                </div>
            </div>
        </a>
        <?php } ?>
        <ul class="visible-xs list-categorias">
        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUBCATEGORIAS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <li><a href="<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre_url'];?>
" class="col-xs-12">
            <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</h3>
                </a></li>
        <?php } ?>
        </ul>
    </div>
</div><?php }} ?>
