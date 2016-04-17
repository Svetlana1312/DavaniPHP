<?php /* Smarty version Smarty-3.1.21, created on 2015-09-04 20:30:39
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/datos_cuenta.tpl" */ ?>
<?php /*%%SmartyHeaderCode:148492761955e9e34f65c3d6-95822263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a808d3a7259547c9c64b636e066ef9bed7bb4f1' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/datos_cuenta.tpl',
      1 => 1433955294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148492761955e9e34f65c3d6-95822263',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_ACTUAL' => 0,
    'DATOS_USUARIO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55e9e34f66c692_97603624',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e9e34f66c692_97603624')) {function content_55e9e34f66c692_97603624($_smarty_tpl) {?><div class="col-xs-12">
    <h4>Cambiar datos de mi cuenta</h4>
</div>
<div role="tabpanel">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#cuenta" aria-controls="cuenta" role="tab" data-toggle="tab">Datos cuenta</a></li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Direccion facturacion</a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="cuenta">
            <form id="form-mod" action="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/guardar',$('#form-mod').serialize(),'POST',$('#result'),false)">
                <div class="col-xs-12 col-sm-6">
                    <label for="">Nombre:</label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['DATOS_USUARIO']->value['nombre'];?>
" required="true" />
                    <label for="">Email de la cuenta:</label>
                    <input type="text" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['DATOS_USUARIO']->value['email'];?>
" required="true" />
                    <label for="">Cambiar Password:</label>
                    <input type="password" class="form-control" autocomplete="off" name="password" placeholder="Dejar vacio si no se va a cambiar" />
                    <input type="hidden" class="" name="id" value="<?php echo $_smarty_tpl->tpl_vars['DATOS_USUARIO']->value['id'];?>
" />
                </div>
                <div class="col-xs-12 col-sm-6">
                    <b>Fecha de creación de la cuenta</b><br>
                    <?php echo $_smarty_tpl->tpl_vars['DATOS_USUARIO']->value['registerDate'];?>

                </div>
                <div id="result" class="col-xs-12 col-sm-4 col-sm-offset-4">
                    <br>
                    <button type="submit" class="btn btn-warning"> Guardar cambios </button>
                </div>
            </form>
            <div class="clearfix"><br><br></div>
    </div>
    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>
</div>

<?php }} ?>
