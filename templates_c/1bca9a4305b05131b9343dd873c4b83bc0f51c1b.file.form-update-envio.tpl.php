<?php /* Smarty version Smarty-3.1.21, created on 2015-12-01 18:50:12
         compiled from ".\templates\davani\components\form-update-envio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27619565dddd480db20-55666417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1bca9a4305b05131b9343dd873c4b83bc0f51c1b' => 
    array (
      0 => '.\\templates\\davani\\components\\form-update-envio.tpl',
      1 => 1448969232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27619565dddd480db20-55666417',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'URL_ACTUAL' => 0,
    'res' => 0,
    'DATOS_USUARIO' => 0,
    'LISTA_PAISES' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565dddd4906009_57395725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565dddd4906009_57395725')) {function content_565dddd4906009_57395725($_smarty_tpl) {?><form id="datos_envio" action="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/update-envio',$('#datos_envio').serialize(),'POST',false,false)">

    <input type="hidden" class="" name="id" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['id'];?>
" />
    <input type="hidden" class="" name="usuario_id" value="<?php echo $_smarty_tpl->tpl_vars['DATOS_USUARIO']->value['id'];?>
" />
    <div class="col-xs-12 col-sm-2">
        <label for="">Trato <b class="text-danger">*</b></label>
        <select name="title" class="form-control" >
            <?php if ($_smarty_tpl->tpl_vars['res']->value['title']=='Sr') {?>
                <option selected>Sr</option>
                <option>Sra</option>
            <?php } else { ?>
                <option >Sr</option>
                <option selected>Sra</option>
            <?php }?>

        </select>
    </div>

    <div class="col-xs-12 col-sm-6">

        <label for="">Nombre <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['name'];?>
" required="true" />

        <label for="">Apellidos <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="apellidos" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['middle_name'];?>
" required="true" />
        <label for="">Compania <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="company" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['company'];?>
" required="true" />
       <!-- <label for="">CIF/DNI/NIE <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="cif" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['NIFDNINIE'];?>
" required="true" /> -->
        <label for="">Paìs <b class="text-danger">*</b></label>
        <select name="pais" class="form-control" id="pais" onchange="enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['URL_ACTUAL']->value;?>
/get_provincias',{id:$(this).val(),state_id:<?php echo $_smarty_tpl->tpl_vars['res']->value['virtuemart_state_id'];?>
 },'POST','#select_provincias',false)" required="true" >
        <option value="">Selecciona un paìs</option>

        <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_PAISES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
            <?php if ($_smarty_tpl->tpl_vars['res']->value['virtuemart_country_id']==$_smarty_tpl->tpl_vars['item']->value['id']) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
              <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</option>
              <?php }?>
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
                            <input type="text" class="form-control" name="ciudad" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['city'];?>
" required="true" />
                            <label for="">CP  <b class="text-danger">*</b> </label>
                            <input type="text" class="form-control" name="cp" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['zip'];?>
" required="true" />
                            <label for="">Direcciòn de envìo  <b class="text-danger">*</b></label>
                            <input type="text" class="form-control" name="direccion" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['address_1'];?>
" required="true" />
                            <label for="">Telèfono  <b class="text-danger">*</b></label>
                            <input type="text" class="form-control" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['phone_1'];?>
" required="true" />
                            <label for="">Fax</label>
                            <input type="text" class="form-control" name="fax" value="<?php echo $_smarty_tpl->tpl_vars['res']->value['fax'];?>
"  />
                            <p class="text-center ">
                                Al hacer clic entendemos que aceptas nuestras polìticas de protección de datos las cuales puedes ver <a href="http://davani.aclass.pro/terminos-de-uso-y-legal">aquí</a>
                            </p>
                            <div id="result_envio" class="col-xs-12 col-sm-16">
                                <button type="submit" class="btn btn-warning">Guardar</button>
                                <button type="button" class="btn btn-warning" onclick="resetForm();">Resetear</button>
                                <button type="button" class="btn btn-warning" onclick="window.location.href=ABSOLUTE_URL + 'mi-cuenta/datos-personales'">Cancelar</button>
                            </div>
                        </div>


                    </form>

<?php echo '<script'; ?>
>

    document.getElementById('pais').onchange();
    function resetForm()
    {
        document.getElementById('datos_envio').reset();
        document.getElementById('pais').onchange();
        return false;
    }
<?php echo '</script'; ?>
>
<?php }} ?>
