<?php /* Smarty version Smarty-3.1.21, created on 2015-11-23 10:20:32
         compiled from "C:\wamp\www\davani_old\templates\davani\components\producto.tpl" */ ?>
<?php /*%%SmartyHeaderCode:217515652da60d48ee6-23016519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24f5603272a39b5bc35e3dfa6c7689ab9dac2b89' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\davani\\components\\producto.tpl',
      1 => 1442263658,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217515652da60d48ee6-23016519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PRODUCTO' => 0,
    'IMAGENES_PRODUCTO' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_5652da60dd99e2_80156858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5652da60dd99e2_80156858')) {function content_5652da60dd99e2_80156858($_smarty_tpl) {?><div class="row">
    <div class="col-xs-8 pull-right">
        <h3><?php echo $_smarty_tpl->tpl_vars['PRODUCTO']->value['nombre'];?>
</h3>
        <hr>
        <?php echo $_smarty_tpl->tpl_vars['PRODUCTO']->value['codigo'];?>

        <hr>
        <h5><small>precio de venta</small> <?php echo $_smarty_tpl->tpl_vars['PRODUCTO']->value['precio'];?>
 €</h5>
    </div>
    <div class="col-xs-4 pull-left" id="block-product-img" >
        <div class="col-xs-12">
            <br>
            <img data-imagezoom="<?php echo $_smarty_tpl->tpl_vars['PRODUCTO']->value['imagen'];?>
" data-zoomviewsize="[300,300]"  data-opacity="0" data-zoomviewborder="3px solid #DCDCDC"
                 data-cursor="all-scroll" class="img-responsive super" src="<?php echo $_smarty_tpl->tpl_vars['PRODUCTO']->value['imagen_resized'];?>
" />  
            <br>
            <hr>
        </div>
        <div class="col-xs-12">
            <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                   <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['IMAGENES_PRODUCTO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['item']->index=-1;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['asd']['iteration']=0;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
 $_smarty_tpl->tpl_vars['item']->index++;
 $_smarty_tpl->tpl_vars['item']->first = $_smarty_tpl->tpl_vars['item']->index === 0;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['asd']['first'] = $_smarty_tpl->tpl_vars['item']->first;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['asd']['iteration']++;
?>
                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['asd']['first']) {?>
                            <div class="item active">
                            <?php } else { ?>
                            <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['asd']['iteration']%2!=0) {?>
                                <div class="item">
                            <?php }?>
                        <?php }?>
                            <div class="col-sm-6">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagen_resized'];?>
" data-big="<?php echo $_smarty_tpl->tpl_vars['item']->value['imagen'];?>
" onclick="changeImage(this)"   class="img-responsive" alt="a">
                                    </div>
                                </div>
                            </div>
                        <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['asd']['iteration']%2==0) {?>
                            </div>
                        <?php }?>
                    <?php } ?>
                    <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['asd']['iteration']%2!=0) {?>
                    </div>
                    <?php }?> 
                </div>
                <?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['asd']['iteration']>2) {?>
                <div class="controls">
                    <a class="left glyphicon glyphicon-chevron-left btn btn-magnenta pull-left" href="#carousel-example" data-slide="prev"></a>
                    <a class="right glyphicon glyphicon-chevron-right btn btn-magnenta pull-right" href="#carousel-example" data-slide="next"></a>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
    <div class="col-xs-12"><br></div>
    <div role="tabpanel" class="col-xs-12">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Descripcion</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="descripcion">
                <div class="col-xs-12"><?php echo $_smarty_tpl->tpl_vars['PRODUCTO']->value['descripcion'];?>
</div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

<?php }} ?>
