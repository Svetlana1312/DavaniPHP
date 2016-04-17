<?php /* Smarty version Smarty-3.1.21, created on 2015-09-13 00:46:46
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:53917813555f4ab568bfa14-28840309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '76440e0470e5e9604a7ea2bb40cd0fd3b1d60dde' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/slider.tpl',
      1 => 1433929348,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53917813555f4ab568bfa14-28840309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SLIDER_LIST' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55f4ab568fbd54_48928579',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4ab568fbd54_48928579')) {function content_55f4ab568fbd54_48928579($_smarty_tpl) {?><div id="carousel-id" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SLIDER_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['slider']['first'] = $_smarty_tpl->tpl_vars['item']->first;
?>
            <div class="item <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['slider']['first']) {?> active <?php }?>">
                <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagen'];?>
" alt="" class="img-responsive">
                <div class="container">
                   <div class="carousel-caption">
                       <h1><?php echo $_smarty_tpl->tpl_vars['item']->value['titulo'];?>
</h1>
                       <p class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['item']->value['descripcion'];?>
</p>
                       <p><a class="btn btn-lg btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['item']->value['enlace'];?>
" role="button"><?php echo $_smarty_tpl->tpl_vars['item']->value['texto'];?>
</a></p>
                   </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <a class="left carousel-control" href="#carousel-id" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
</div><?php }} ?>
