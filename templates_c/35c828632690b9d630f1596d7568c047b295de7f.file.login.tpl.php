<?php /* Smarty version Smarty-3.1.21, created on 2015-11-24 17:18:28
         compiled from "C:\wamp\www\davani_old\templates\davani\components\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2671456548dd4753ab3-83793265%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35c828632690b9d630f1596d7568c047b295de7f' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\davani\\components\\login.tpl',
      1 => 1445071186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2671456548dd4753ab3-83793265',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ABSOLUTE_URL' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56548dd476abd1_14297320',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56548dd476abd1_14297320')) {function content_56548dd476abd1_14297320($_smarty_tpl) {?><div class="panel panel-default hidden-xs">
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
