<?php /* Smarty version Smarty-3.1.21, created on 2015-07-07 19:54:09
         compiled from "/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/form.slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:270736376559c1241279c13-39371694%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '29a714b014e3e169945e74f6bb6861dde020ac24' => 
    array (
      0 => '/var/www/vhosts/aclass.pro/davani.aclass.pro/templates/davani/components/form.slider.tpl',
      1 => 1434563046,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270736376559c1241279c13-39371694',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_ACTUAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_559c124127e451_77485156',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_559c124127e451_77485156')) {function content_559c124127e451_77485156($_smarty_tpl) {?><div class="col-xs-12">
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
