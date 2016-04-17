<?php /* Smarty version Smarty-3.1.21, created on 2015-12-01 18:48:43
         compiled from "C:\wamp\www\davani_old\templates\davani\components\form_nuevo_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21365565ddd7b959b80-74866236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be130e568119499a0bddae182f22db997fba9aa9' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\davani\\components\\form_nuevo_usuario.tpl',
      1 => 1442263656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21365565ddd7b959b80-74866236',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_ACTUAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565ddd7b963ef3_84184259',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565ddd7b963ef3_84184259')) {function content_565ddd7b963ef3_84184259($_smarty_tpl) {?><div class="col-xs-12 col-sm-4">
    <h4>Crear nuevo usuario</h4>
    <form id="form-add" action="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/crear',$('#form-add').serialize(),'POST',$('#result'),false)">
        <label>Nombre de usuario</label>
        <input type="text" name="nombre_contacto" required="true" class="form-control"/>
        <label>Email usuario</label>
        <input type="text" name="email" required="true" class="form-control"/>
        <label>Password</label>
        <input type="text" name="password" required="true" class="form-control"/>
        <div id="result" >
            <br>
            <button type="submit" class="btn btn-info">
                Crear usuario
            </button>
        </div>
    </form>
</div><?php }} ?>
