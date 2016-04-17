<?php /* Smarty version Smarty-3.1.21, created on 2015-11-16 05:26:53
         compiled from "C:\wamp\www\davani_old\templates\davani\components\form-recuperar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2126356495b0dc6e3b1-05405318%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba3d73019e799a8fcc9a0cf0e37e3bd0216f8e7f' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\davani\\components\\form-recuperar.tpl',
      1 => 1442263656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2126356495b0dc6e3b1-05405318',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DATOS_PAGINA' => 0,
    'URL_ACTUAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56495b0dcabb23_81585272',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56495b0dcabb23_81585272')) {function content_56495b0dcabb23_81585272($_smarty_tpl) {?><h2>Recuperar cuenta</h2>
<?php echo $_smarty_tpl->tpl_vars['DATOS_PAGINA']->value['contenido'];?>

<form id="form-reset" action="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/recuperar',$('#form-reset').serialize(),'POST',$('#result-reset'),false)"
    <legend>Formulario de recuperación de cuenta</legend>
    <div class="form-group col-xs-12 col-sm-6 center-block">
        <div class="input-group">
            <label class="center-block text-center" for="">Por favor introduce su email de cuenta</label>
        </div>
        <div class="input-group">
          <input type="text" class="form-control" name="email" placeholder="ejemplo@mail.com...">
          <span class="input-group-btn">
            <button class="btn btn-success" type="submit">Recuperar</button>
          </span>
        </div>
        <div id="result-reset">
          
        </div>
    </div>
</form>
<?php }} ?>
