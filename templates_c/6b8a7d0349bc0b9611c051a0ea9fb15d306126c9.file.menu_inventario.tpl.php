<?php /* Smarty version Smarty-3.1.21, created on 2015-12-01 18:51:37
         compiled from "C:\wamp\www\davani_old\templates\davani\components\menu_inventario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24855565dde295957d6-18421144%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b8a7d0349bc0b9611c051a0ea9fb15d306126c9' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\davani\\components\\menu_inventario.tpl',
      1 => 1442263658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24855565dde295957d6-18421144',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_ACTUAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565dde29615770_21325420',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565dde29615770_21325420')) {function content_565dde29615770_21325420($_smarty_tpl) {?><div onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/alta_producto'" class="col-xs-12 col-sm-6">
    <div class="offer offer-info">
            <div class="shape">
                    <div class="shape-text">
                        <span class="glyphicon glyphicon-plus"></span>                        
                    </div>
            </div>
            <div class="offer-content">
                    <h3 class="lead">
                       Nuevo producto
                    </h3>                       
                    <p>
                        Añadir un nuevo producto
                    </p>
            </div>
    </div>
</div>
<div onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/lista_producto'" class="col-xs-12 col-sm-6">
    <div class="offer offer-info">
            <div class="shape">
                    <div class="shape-text">
                        <span class="glyphicon glyphicon-gift"></span>                        
                    </div>
            </div>
            <div class="offer-content">
                    <h3 class="lead">
                       Mis productos
                    </h3>                       
                    <p>
                        Administrar productos
                    </p>
            </div>
    </div>
</div>
<div onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/alta_categoria'" class="col-xs-12 col-sm-6">
    <div class="offer offer-info">
            <div class="shape">
                    <div class="shape-text">
                       <span class="glyphicon glyphicon-plus"></span>                            
                    </div>
            </div>
            <div class="offer-content">
                    <h3 class="lead">
                       Nueva categoria
                    </h3>                       
                    <p>
                        Añadir una categoria
                    </p>
            </div>
    </div>
</div>
<div onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/lista_categorias'" class="col-xs-12 col-sm-6">
    <div class="offer offer-info">
            <div class="shape">
                    <div class="shape-text">
                        <span class="glyphicon glyphicon-folder-open"></span>                        
                    </div>
            </div>
            <div class="offer-content">
                    <h3 class="lead">
                       Mis categorias
                    </h3>                       
                    <p>
                        Administrar categorias
                    </p>
            </div>
    </div>
</div>
<div onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/colores'" class="col-xs-12 col-sm-6">
    <div class="offer offer-info">
            <div class="shape">
                    <div class="shape-text">
                        <span class="glyphicon glyphicon-tint"></span>                        
                    </div>
            </div>
            <div class="offer-content">
                    <h3 class="lead">
                        Colores
                    </h3>                       
                    <p>
                        Administrar colores de los productos
                    </p>
            </div>
    </div>
</div>
<div onclick="window.location.href='<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/tallas'" class="col-xs-12 col-sm-6">
    <div class="offer offer-info">
            <div class="shape">
                    <div class="shape-text">
                        <span class="glyphicon glyphicon-subscript"></span>                        
                    </div>
            </div>
            <div class="offer-content">
                    <h3 class="lead">
                        Tallas
                    </h3>                       
                    <p>
                        Administrar tallas de los productos
                    </p>
            </div>
    </div>
</div><?php }} ?>
