<?php /* Smarty version Smarty-3.1.21, created on 2015-11-29 23:35:58
         compiled from "C:\wamp\www\davani_old\templates\davani\components\form.slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2173565b7dce799127-13373052%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4cb8e3c9c46d744d9d91997c87f89986c2321add' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\davani\\components\\form.slider.tpl',
      1 => 1442263656,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2173565b7dce799127-13373052',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_ACTUAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565b7dce7d38d1_34589645',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565b7dce7d38d1_34589645')) {function content_565b7dce7d38d1_34589645($_smarty_tpl) {?><div class="col-xs-12">
    <form id="form-add" action="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/crear',$('#form-add').serialize(),'POST',false,true)">
    <legend>Añadir un baner al slider</legend>
    <label>Titulo</label>
    <input type="text" class="form-control" name="titulo" placeholder="Escribe el titulo del baner" /> 
    <label>Descripción</label>
    <input type="text" class="form-control" name="descripcion" placeholder="Escribe la descripción del baner" /> 
    <label>Imagen</label>
    <input type="text" class="form-control" onclick="openKCFinder(this)" name="imagen" placeholder="Url de la imagen del baner, haz clic para elegir" /> 
    <label>Texto del botón</label>
    <input type="text" class="form-control" name="texto" placeholder="Url de la imagen del baner, haz clic para elegir" /> 
    <label>Enlace del botón</label>
    <input type="text" class="form-control" name="enlace" placeholder="Escribe la url del botón" />
    <br>
    <button class="btn btn-warning">
        Crear baner
    </button>
    </form>
</div><?php }} ?>
