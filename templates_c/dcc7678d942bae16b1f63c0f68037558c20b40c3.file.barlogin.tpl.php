<?php /* Smarty version Smarty-3.1.21, created on 2015-10-07 22:13:17
         compiled from "C:\wamp\www\davani\templates\davani\components\barlogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17067561598fd22e7a4-12062773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcc7678d942bae16b1f63c0f68037558c20b40c3' => 
    array (
      0 => 'C:\\wamp\\www\\davani\\templates\\davani\\components\\barlogin.tpl',
      1 => 1444253705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17067561598fd22e7a4-12062773',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ABSOLUTE_URL' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_561598fd242b01_15654782',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_561598fd242b01_15654782')) {function content_561598fd242b01_15654782($_smarty_tpl) {?>                <div class="panel panel-default hidden-xs">
                    <div class="panel panel-heading">
                        <h2>Iniciar sesión</h2>
                    </div>
                    <div class="panel-body">
                        <form id="form-login" action="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
acceso/login',$('#form-login').serialize(),'POST',$('#result-login'),false)">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Usuario" name="usuario" value="" required />   
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Contraseña" name="password" value="" required />    
                            </div>
                            <div id="result-login">
                                <button class="btn btn-block btn-primary">
                                    Entrar
                                </button>
                            </div>
                        </form>
                        <a class="center-block text-center" href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
recuperar-cuenta">¿ Olvidó su contraseña ?</a>
                        <a class="center-block text-center" href="<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
index.php?pagina=crear-cuenta">Crear una cuenta</a>
                    </div>
                </div><?php }} ?>
