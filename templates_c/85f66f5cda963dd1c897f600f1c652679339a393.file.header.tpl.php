<?php /* Smarty version Smarty-3.1.21, created on 2015-12-01 18:51:45
         compiled from "C:\wamp\www\davani_old\templates\davani\blocks\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12656565dde31380ad5-28978136%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85f66f5cda963dd1c897f600f1c652679339a393' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\davani\\blocks\\header.tpl',
      1 => 1444340062,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12656565dde31380ad5-28978136',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ABSOLUTE_URL' => 1,
    'MENU_LIST' => 1,
    'list' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565dde313d7c37_76219668',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565dde313d7c37_76219668')) {function content_565dde313d7c37_76219668($_smarty_tpl) {?><div id="header" class="row">
                <div class="col-xs-12 col-sm-3">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
">
                        <img class="img-responsive center-block" alt="" src="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
img/logo.png" />
                    </a>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="row">
                        <div class="col-xs-12 text-right ">
                            <br class="visible-xs">
                            ningún producto en la cesta (0)
                            <span class="glyphicon glyphicon-shopping-cart"></span>
                            <b class="">|</b>
                            <span class="text-muted">Cambiar idioma</span>
                            <select>
                                <option>Español</option>
                            </select>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 pull-right">
                            <div class="input-group">
                                <input type="text" onkeyup="enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
buscar/',{word:$(this).val(},'POST','#result_busqueda',false)" class="form-control" placeholder="Buscar productos...">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary" type="button">
                                        <span class="glyphicon glyphicon-search"></span>
                                    </button>
                                </span>
                            </div>
                            <div id="result_busqueda">
                                
                            </div>
                        </div>
                        <div class="col-xs-12 hidden-sm">
                           <nav class="navbar" role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                                <span class="glyphicon glyphicon-menu-hamburger"></span>
                                            </button>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                                            <ul class="nav navbar-nav">
                                                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MENU_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;
echo $_smarty_tpl->tpl_vars['list']->value['nombre_url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['nombre'];?>
</a></li>
                                                <?php } ?>
                                            </ul>
                                    </div><!-- /.navbar-collapse -->
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                           <nav class="navbar" role="navigation">
                                    <!-- Brand and toggle get grouped for better mobile display -->
                                    <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                                <span class="glyphicon glyphicon-menu-hamburger"></span>
                                            </button>
                                    </div>

                                    <!-- Collect the nav links, forms, and other content for toggling -->
                                    <div class="collapse navbar-collapse navbar-ex1-collapse">
                                            <ul class="nav navbar-nav">
                                                <?php  $_smarty_tpl->tpl_vars['list'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['list']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MENU_LIST']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['list']->key => $_smarty_tpl->tpl_vars['list']->value) {
$_smarty_tpl->tpl_vars['list']->_loop = true;
?>
                                                    <li><a href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;
echo $_smarty_tpl->tpl_vars['list']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['list']->value['name'];?>
</a></li>
                                                <?php } ?>
                                            </ul>
                                    </div><!-- /.navbar-collapse -->
                            </nav>
                    </div>
            </div><?php }} ?>
