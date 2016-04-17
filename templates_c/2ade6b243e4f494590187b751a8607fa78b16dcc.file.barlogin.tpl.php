<?php /* Smarty version Smarty-3.1.21, created on 2015-09-13 00:46:46
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/barlogin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:112700432555f4ab56861b15-46656292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ade6b243e4f494590187b751a8607fa78b16dcc' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/barlogin.tpl',
      1 => 1433944837,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '112700432555f4ab56861b15-46656292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ABSOLUTE_URL' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55f4ab568bd1f6_83051728',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55f4ab568bd1f6_83051728')) {function content_55f4ab568bd1f6_83051728($_smarty_tpl) {?>                <div class="panel panel-default hidden-xs">
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
crear-cuenta">Crear una cuenta</a>
                    </div>
                </div><?php }} ?>
