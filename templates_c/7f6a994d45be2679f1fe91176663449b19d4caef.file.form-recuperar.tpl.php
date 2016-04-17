<?php /* Smarty version Smarty-3.1.21, created on 2015-09-04 20:38:18
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/form-recuperar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:194118619155e9e51a630890-13505159%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f6a994d45be2679f1fe91176663449b19d4caef' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/form-recuperar.tpl',
      1 => 1434009822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '194118619155e9e51a630890-13505159',
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
  'unifunc' => 'content_55e9e51a637208_24296348',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e9e51a637208_24296348')) {function content_55e9e51a637208_24296348($_smarty_tpl) {?><h2>Recuperar cuenta</h2>
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
