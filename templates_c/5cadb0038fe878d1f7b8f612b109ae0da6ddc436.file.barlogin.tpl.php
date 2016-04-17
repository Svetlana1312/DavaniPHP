<?php /* Smarty version Smarty-3.1.21, created on 2016-04-17 13:34:13
         compiled from "C:\xampp\htdocs\davani_old\templates\davani\components\barlogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18494571374b5631692-54984814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cadb0038fe878d1f7b8f612b109ae0da6ddc436' => 
    array (
      0 => 'C:\\xampp\\htdocs\\davani_old\\templates\\davani\\components\\barlogin.tpl',
      1 => 1446806928,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18494571374b5631692-54984814',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ABSOLUTE_URL' => 1,
    'USUARIO' => 0,
    'MESSAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_571374b57621e0_71770468',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_571374b57621e0_71770468')) {function content_571374b57621e0_71770468($_smarty_tpl) {?>                <div class="panel panel-default hidden-xs" id="panel-login">
                    <div class="panel panel-heading">
                        <h2>Iniciar sesión</h2>
                    </div>
                    <div class="panel-body">
                        <form id="form-login" action="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
acceso/login',$('#form-login').serialize(),'POST',$('#panel-login'),false)">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Usuario" name="usuario" value="<?php echo $_smarty_tpl->tpl_vars['USUARIO']->value;?>
" required />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Contraseña" name="password" value="" required />    
                            </div>
                            <div class="errorMessage" style="color:red;"><?php echo $_smarty_tpl->tpl_vars['MESSAGE']->value;?>
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
crear-cuenta">Crear una cuenta</a>
                    </div>
                </div><?php }} ?>
