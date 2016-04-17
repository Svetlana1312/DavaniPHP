<?php /* Smarty version Smarty-3.1.21, created on 2015-07-13 15:53:13
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:212416473655a3c2c9cf32f8-90058424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '268547ab564f90bfa2d7d3e40ce93350030a12a2' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/login.tpl',
      1 => 1433944573,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212416473655a3c2c9cf32f8-90058424',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ABSOLUTE_URL' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55a3c2c9d3e8c7_55430496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a3c2c9d3e8c7_55430496')) {function content_55a3c2c9d3e8c7_55430496($_smarty_tpl) {?><div class="panel panel-default hidden-xs">
                        <div class="col-xs-12">
                            <h2>Iniciar sesión</h2>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-sm-offset-4 text-center">
                            <span class="glyphicon glyphicon-user" style="font-size:5em;"></span>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-sm-offset-4">
                            <form id="form-login" action="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
acceso/login',$('#form-login').serialize(),'POST',$('#result_login_content'),false)">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Usuario" name="usuario" value="" required />   
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Contraseña" name="password" value="" required />    
                                </div>
                                <div id="result_login_content">
                                    <button class="btn btn-block btn-primary">
                                        Entrar
                                    </button>
                                </div>
                            </form>
                            <a class="center-block text-center" href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
recuperar-cuenta">¿ Olvidó su contraseña ?</a>
                            <a class="center-block text-center" href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
crear-cuenta">Crear una cuenta</a>
                        </div>
                    </div><?php }} ?>
