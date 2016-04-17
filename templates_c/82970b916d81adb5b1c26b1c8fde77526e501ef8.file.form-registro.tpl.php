<?php /* Smarty version Smarty-3.1.21, created on 2015-10-07 21:35:12
         compiled from "C:\wamp\www\davani\templates\davani\components\form-registro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17354561590102e3063-71687584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82970b916d81adb5b1c26b1c8fde77526e501ef8' => 
    array (
      0 => 'C:\\wamp\\www\\davani\\templates\\davani\\components\\form-registro.tpl',
      1 => 1444243642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17354561590102e3063-71687584',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_ACTUAL' => 0,
    'LISTA_PAISES' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_56159010314d86_07408171',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56159010314d86_07408171')) {function content_56159010314d86_07408171($_smarty_tpl) {?><h2>Formulario de registro</h2>
<form id="form-registro" action="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/crear',$('form-registro').serialize(),'POST','#result_registro',false)">
    <div class="row">
        <div class="col-xs-12">
            <legend>Datos personales</legend>
        </div>
        <div class="col-xs-12 col-sm-2">
            <label for="">Trato <b class="text-danger">*</b></label>
            <select name="title" class="form-control" >
                <option>Sr</option>
                <option>Sra</option>
            </select>
        </div>
        <div class="col-xs-12 col-sm-3">
            <label for="">Nombre <b class="text-danger">*</b></label>
            <input type="text" class="form-control" name="nombre" value="" required="true" />
        </div>
        <div class="col-xs-12 col-sm-4">
            <label for="">Apellidos <b class="text-danger">*</b></label>
            <input type="text" class="form-control" name="apellidos" value="" required="true" />
        </div>
        <div class="col-xs-12 col-sm-3">
            <label for="">CIF/DNI/NIE <b class="text-danger">*</b></label>
            <input type="text" class="form-control" name="cif" value="" required="true" />
        </div>
        <div class="col-xs-12 col-sm-4">
            <label for="">País <b class="text-danger">*</b></label>
            <select name="pais" class="form-control" onchange="enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/get_ciudades',{id:$(this).val()},'POST','#select_ciudades',false)">
                <option disabled selected >Selecciona un país</option>
                <option value="195">España</option>
                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_PAISES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['nombre'];?>
</option>
                <?php } ?>
            </select> 
        </div>
        <div class="col-xs-12 col-sm-4">
            <label for="">Provincia </label>
            <select name="provincia" class="form-control" id="select_ciudades">
                <option disabled selected>Elige un país</option>
            </select>
        </div>
        <div class="col-xs-12 col-sm-4">
            <label for="">Ciudad </label> <input type="text" class="form-control" name="ciudad" value="" required="true" />    
        </div>  
        <div class="col-xs-12 col-sm-2">
            <label for="">CP </label> <input type="text" class="form-control" name="cp" value="" required="true" />    
        </div>
        <div class="col-xs-12 col-sm-10">
            <label for="">Dirección de facturación</label>
            <input type="text" class="form-control" name="direccion" value="" required="true" /> 
        </div>
        <div class="col-xs-12 col-sm-3">
            <label for="">Teléfono</label>
            <input type="text" class="form-control" name="telefono" value="" required="true" /> 
        </div>
        <div class="col-xs-12">
            <legend>Información de la cuenta</legend>
        </div>
        <div class="col-xs-12 col-sm-6">
            <label for="">Correo electrónico <b class="text-danger">*</b></label>
            <input type="text" class="form-control" name="email" value="" required="true" />
        </div>
        <div class="col-xs-12 col-sm-6">
            <label for="">Contraseña <b class="text-danger">*</b></label>
            <input type="password" class="form-control" name="pass" value="" required="true" />
        </div>
    </div>
    <p class="text-center ">
        Al hacer clic entendemos que aceptas nuestras políticas de protección de datos las cuales puedes ver <a href="http://davani.aclass.pro/terminos-de-uso-y-legal">aquí</a>
    </p>
    <div id="result_registro">
        <button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
    </div>
</form><?php }} ?>
