<?php /* Smarty version Smarty-3.1.21, created on 2016-04-17 11:32:20
         compiled from "C:\xampp\htdocs\davani_old\templates\davani\components\slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2899457135824a14782-31030887%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ec5e4668f9886ae9991eb9ac5a8b7bd16f12a84' => 
    array (
      0 => 'C:\\xampp\\htdocs\\davani_old\\templates\\davani\\components\\slider.tpl',
      1 => 1442263658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2899457135824a14782-31030887',
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
  'unifunc' => 'content_57135824d6fe56_79872771',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_57135824d6fe56_79872771')) {function content_57135824d6fe56_79872771($_smarty_tpl) {?><div id="carousel-id" class="carousel slide carousel-fade" data-ride="carousel">
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
