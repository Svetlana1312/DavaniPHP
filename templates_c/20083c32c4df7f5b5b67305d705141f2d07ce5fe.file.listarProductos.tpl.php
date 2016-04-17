<?php /* Smarty version Smarty-3.1.21, created on 2015-09-08 09:54:52
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/listarProductos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200989333555ee944c0ea341-35570425%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20083c32c4df7f5b5b67305d705141f2d07ce5fe' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/listarProductos.tpl',
      1 => 1433929345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200989333555ee944c0ea341-35570425',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PARAMETROS' => 0,
    'TOTAL_PRODUCTOS' => 0,
    'url_categoria' => 0,
    'PRODUCTOS' => 0,
    'item' => 0,
    'ABSOLUTE_URL' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55ee944c13a604_85371903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55ee944c13a604_85371903')) {function content_55ee944c13a604_85371903($_smarty_tpl) {?>
<div class="row">
    <div class="col-xs-12">
        <h3>Lista de productos</h3>
        <hr>
    </div>
    <div class="col-xs-12">
        <?php if ($_smarty_tpl->tpl_vars['PARAMETROS']->value['page']=='') {?>
            <?php echo paginate(5,1,$_smarty_tpl->tpl_vars['TOTAL_PRODUCTOS']->value,$_smarty_tpl->tpl_vars['TOTAL_PRODUCTOS']->value/5,$_smarty_tpl->tpl_vars['url_categoria']->value);?>

        <?php } else { ?>
            <?php echo paginate(5,$_smarty_tpl->tpl_vars['PARAMETROS']->value['page'],$_smarty_tpl->tpl_vars['TOTAL_PRODUCTOS']->value,(int)$_smarty_tpl->tpl_vars['TOTAL_PRODUCTOS']->value/5,$_smarty_tpl->tpl_vars['url_categoria']->value);?>

        <?php }?>
        
    </div>
    <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PRODUCTOS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
    <div class="col-xs-12 list-productos">
        <div class="row">
            <div class="col-xs-6 col-sm-2">
                <img class="img-responsive thumbnail"  src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagen_resized'];?>
" />
            </div>
            <div class="col-xs-6 col-sm-10">
                <div class="row hidden-xs">
                    <div class="col-xs-6">
                        <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</h3>
                        <p><?php echo $_smarty_tpl->tpl_vars['item']->value['codigo'];?>
</p>
                        <h5 class="col-xs-12">Colores disponibles</h5>
                        <span class=" col-xs-1 thumbnail" style="background-color: red"></span>
                        <span class=" col-xs-1 thumbnail" style="background-color: white"></span>
                        <span class=" col-xs-1 thumbnail" style="background-color: greenyellow"></span>
                        <span class=" col-xs-1 thumbnail" style="background-color: #5e5e5e"></span>
                        <span class=" col-xs-1 thumbnail" style="background-color: darkmagenta"></span>    
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <br>
                        <h4 class="text-info"><?php echo $_smarty_tpl->tpl_vars['item']->value['precio'];?>
 €</h4>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
producto/<?php echo $_smarty_tpl->tpl_vars['item']->value['nombre_url'];?>
" class="btn btn-magnenta"> Ver producto </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 visible-xs" >
                <h4><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</h4>
            </div>
            <div class="col-xs-12 visible-xs clearfix text-left">
                <div class="row">
                    <div class="col-xs-6">
                        <span class=" col-xs-3 thumbnail" style="background-color: red"></span>
                        <span class=" col-xs-3 thumbnail" style="background-color: white"></span>
                        <span class=" col-xs-3 thumbnail" style="background-color: greenyellow"></span>
                        <span class=" col-xs-3 thumbnail" style="background-color: #5e5e5e"></span>
                        <span class=" col-xs-3 thumbnail" style="background-color: darkmagenta"></span>    
                    </div>
                    <div class="col-xs-6">
                        <h4 class="text-info"><?php echo $_smarty_tpl->tpl_vars['item']->value['precio'];?>
 €</h4>
                        <button class="btn btn-default"> Ver producto </button>
                        <br>
                    </div> 
                </div>
                
            </div>
        </div>
    </div>
    <?php } ?>
    <div class="col-xs-12">
        <?php if ($_smarty_tpl->tpl_vars['PARAMETROS']->value['page']=='') {?>
            <?php echo paginate(5,1,$_smarty_tpl->tpl_vars['TOTAL_PRODUCTOS']->value,(int)$_smarty_tpl->tpl_vars['TOTAL_PRODUCTOS']->value/5,$_smarty_tpl->tpl_vars['url_categoria']->value);?>

        <?php } else { ?>
            <?php echo paginate(5,$_smarty_tpl->tpl_vars['PARAMETROS']->value['page'],$_smarty_tpl->tpl_vars['TOTAL_PRODUCTOS']->value,$_smarty_tpl->tpl_vars['TOTAL_PRODUCTOS']->value/5,$_smarty_tpl->tpl_vars['url_categoria']->value);?>

        <?php }?>
    </div>
</div><?php }} ?>
