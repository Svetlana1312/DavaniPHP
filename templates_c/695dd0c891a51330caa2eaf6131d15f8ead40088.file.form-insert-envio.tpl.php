<?php /* Smarty version Smarty-3.1.21, created on 2015-12-01 18:41:19
         compiled from ".\templates\davani\components\form-insert-envio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14970565ddbbf5aa684-04570415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '695dd0c891a51330caa2eaf6131d15f8ead40088' => 
    array (
      0 => '.\\templates\\davani\\components\\form-insert-envio.tpl',
      1 => 1448969232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14970565ddbbf5aa684-04570415',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_ACTUAL' => 0,
    'DATOS_USUARIO' => 0,
    'LISTA_PAISES' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565ddbbf625d58_16792987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565ddbbf625d58_16792987')) {function content_565ddbbf625d58_16792987($_smarty_tpl) {?><form id="datos_envio" action="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/insert-envio',$('#datos_envio').serialize(),'POST',false,false)">


    <div class="col-xs-12 col-sm-2">
        <label for="">Trato <b class="text-danger">*</b></label>
        <select name="title" class="form-control" >
                <option>Sr</option>
                <option>Sra</option>
        </select>
    </div>

    <div class="col-xs-12 col-sm-6">
        <input type="hidden" class="" name="usuario_id" value="<?php echo $_smarty_tpl->tpl_vars['DATOS_USUARIO']->value['id'];?>
" />
        <label for="">Nombre <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="nombre" value="" required="true" />

        <label for="">Apellidos <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="apellidos" value="" required="true" />
        <label for="">Compania <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="company" value="" required="true" />
       <!-- <label for="">CIF/DNI/NIE <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="cif" value="" required="true" /> -->
        <label for="">Paìs <b class="text-danger">*</b></label>
        <select name="pais" class="form-control" id="pais" onchange="enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/get_provincias',{id:$(this).val()},'POST','#select_provincias',false)" required="true" >
        <option value="">Selecciona un paìs</option>

        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_PAISES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                  <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
        <?php } ?>
        </select>
        <label for="">Provincia  <b class="text-danger">*</b></label>
        <select name="provincia" class="form-control" id="select_provincias" >
            <option disabled selected>Elige un paìs</option>

        </select>
                            <!--  <label for="">Ciudad </label>
                              <select name="ciudad" class="form-control" id="select_ciudades" required="true" />
                                  <option disabled selected>Elige un paìs</option>
                              </select>-->
        <label for="">Ciudad  <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="ciudad" value="" required="true" />
        <label for="">CP  <b class="text-danger">*</b> </label>
        <input type="text" class="form-control" name="cp" value="" required="true" />
        <label for="">Direcciòn de envìo  <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="direccion" value="" required="true" />
        <label for="">Telèfono  <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="telefono" value="" required="true" />
        <label for="">Fax</label>
        <input type="text" class="form-control" name="fax" value=""  />
        <p class="text-center ">
            Al hacer clic entendemos que aceptas nuestras polìticas de protección de datos las cuales puedes ver <a href="http://davani.aclass.pro/terminos-de-uso-y-legal">aquí</a>
        </p>
        <div id="result_envio" class="col-xs-12 col-sm-16">
            <button class="btn btn-warning">Insertar</button>
            <button type="button" class="btn btn-warning" onclick="resetForm();">Resetear</button>
            <button type="button" class="btn btn-warning" onclick="window.location.href=ABSOLUTE_URL + 'mi-cuenta/datos-personales'">Cancelar</button>
    </div>
    </div>


</form>
<?php echo '<script'; ?>
>
    function resetForm()
    {
        document.getElementById('datos_envio').reset();
        document.getElementById('pais').onchange();
        return false;
    }
<?php echo '</script'; ?>
><?php }} ?>
