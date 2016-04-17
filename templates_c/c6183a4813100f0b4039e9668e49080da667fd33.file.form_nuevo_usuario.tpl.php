<?php /* Smarty version Smarty-3.1.21, created on 2015-07-21 09:05:16
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/form_nuevo_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44532768455adef2c4d8ff9-79274944%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6183a4813100f0b4039e9668e49080da667fd33' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/form_nuevo_usuario.tpl',
      1 => 1433953155,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44532768455adef2c4d8ff9-79274944',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_ACTUAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_55adef2c4ecf10_38181545',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55adef2c4ecf10_38181545')) {function content_55adef2c4ecf10_38181545($_smarty_tpl) {?><div class="col-xs-12 col-sm-4">
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
