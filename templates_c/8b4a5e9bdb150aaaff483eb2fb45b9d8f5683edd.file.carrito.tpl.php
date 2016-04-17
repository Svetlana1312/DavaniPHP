<?php /* Smarty version Smarty-3.1.21, created on 2015-07-13 12:59:02
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/carrito.tpl" */ ?>
<?php /*%%SmartyHeaderCode:137456988355a399f6a6f3d6-00593715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b4a5e9bdb150aaaff483eb2fb45b9d8f5683edd' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/carrito.tpl',
      1 => 1436780026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '137456988355a399f6a6f3d6-00593715',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ABSOLUTE_URL' => 1,
    'LOGIN' => 0,
    'URL_ACTUAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55a399f6a822e1_10382251',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a399f6a822e1_10382251')) {function content_55a399f6a822e1_10382251($_smarty_tpl) {?>
	<div class="row">
		<div class="col-xs-12">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-xs-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</h5>
							</div>
							<div class="col-xs-6">
								<a href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Continuar comprando
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Nombre del producto</strong></h4><h4><small>Descripcion del producto</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-danger btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-2"><img class="img-responsive" src="">
						</div>
						<div class="col-xs-4">
							<h4 class="product-name"><strong>Nombre del producto</strong></h4><h4><small>Descripcion del producto</small></h4>
						</div>
						<div class="col-xs-6">
							<div class="col-xs-6 text-right">
								<h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-xs-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-xs-2">
								<button type="button" class="btn btn-danger btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="text-center">
							<div class="col-xs-9">
								<h6 class="text-right">Realizastes algún cambio?</h6>
							</div>
							<div class="col-xs-3">
								<button type="button" class="btn btn-warning btn-sm btn-block">
									Actualizar carrito
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-xs-9">
							<h4 class="text-right">Total <strong>50.00 €</strong></h4>
						</div>
						<div class="col-xs-3">
							<?php if ($_smarty_tpl->tpl_vars['LOGIN']->value==true) {?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/finalizar" type="button" class="btn btn-success btn-block">
								Siguiente paso
							</a>
							<?php } else { ?>
							Por favor <a href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
acceso">inicia sesion</a> o <a href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
crear-cuenta">crea una cuenta</a>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><?php }} ?>
