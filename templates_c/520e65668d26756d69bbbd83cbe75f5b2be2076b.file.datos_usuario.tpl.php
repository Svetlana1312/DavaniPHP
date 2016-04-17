<?php /* Smarty version Smarty-3.1.21, created on 2015-12-01 18:49:40
         compiled from "C:\wamp\www\davani_old\templates\davani\components\datos_usuario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31348565dddb4d6f4b6-49285118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '520e65668d26756d69bbbd83cbe75f5b2be2076b' => 
    array (
      0 => 'C:\\wamp\\www\\davani_old\\templates\\davani\\components\\datos_usuario.tpl',
      1 => 1448968160,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31348565dddb4d6f4b6-49285118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ABSOLUTE_URL' => 1,
    'SELECTED_USUARIO' => 0,
    'SELECTED_FACTURACION' => 0,
    'LISTA_PAISES' => 0,
    'item' => 0,
    'SELECTED_ENVIO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21',
  'unifunc' => 'content_565dddb4ea1328_42628247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_565dddb4ea1328_42628247')) {function content_565dddb4ea1328_42628247($_smarty_tpl) {?><div class="col-xs-12">
    <h4>Cambiar datos de la cuenta</h4>
</div>
<div role="tabpanel">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#cuenta" aria-controls="cuenta" role="tab" data-toggle="tab">Datos cuenta</a></li>
    <li role="presentation"><a href="#facturacion" aria-controls="facturacion" role="tab" data-toggle="tab">Direccion facturacion</a></li>
      <li role="presentation"><a href="#envio" aria-controls="envio" role="tab" data-toggle="tab">Direccion de envio</a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="cuenta">
            <form id="form-mod" action="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
mi-cuenta/datos-personales/guardar',$('#form-mod').serialize(),'POST',false,false)">
                <div class="col-xs-12 col-sm-6">
                    <label for="">Nombre usuario<b class="text-danger">*</b></label>
                    <input type="text" class="form-control" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_USUARIO']->value['nombre'];?>
" required="true"  />
                    <label for="">Nombre completo<b class="text-danger">*</b></label>
                    <input type="text" class="form-control" name="nombre_completo" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_USUARIO']->value['nombre_completo'];?>
" required="true" />
                    <label for="">Email de la cuenta<b class="text-danger">*</b></label>
                    <input type="text" class="form-control" name="email" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_USUARIO']->value['email'];?>
" required="true" />
                    <label for="">Cambiar Contraseña:</label>
                    <input type="password" class="form-control" autocomplete="off" name="password" placeholder="Dejar vacio si no se va a cambiar" />
                    <label for="">Confirmar Contraseña:</label>
                    <input type="password" class="form-control" autocomplete="off" name="password_conf" placeholder="Dejar vacio si no se va a cambiar" />
                    <input type="hidden" class="" name="id" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_USUARIO']->value['id'];?>
" />
                </div>
                <div class="col-xs-12 col-sm-6">
                    <b>Fecha de creación de la cuenta</b><br>
                    <?php echo $_smarty_tpl->tpl_vars['SELECTED_USUARIO']->value['registerDate'];?>

                </div>
                <div id="result" class="col-xs-12 col-sm-4 col-sm-offset-4">
                    <br>
                    <button type="submit" class="btn btn-warning"> Guardar cambios </button>
                </div>
            </form>
            <div class="clearfix"><br><br></div>
    </div>
      <div role="tabpanel" class="tab-pane" id="facturacion">
          <form id="datos_facturacion" action="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
mi-cuenta/datos-personales/guardar-fact',$('#datos_facturacion').serialize(),'POST',false,false)"
                  >

              <input type="hidden" class="" name="usuario_id" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_USUARIO']->value['id'];?>
" />
                 <div class="col-xs-12 col-sm-2">
                  <label for="">Trato <b class="text-danger">*</b></label>
                  <select name="title" class="form-control" >
                     <?php if ($_smarty_tpl->tpl_vars['SELECTED_FACTURACION']->value['title']=='Sr') {?>
                            <option selected>Sr</option> <!-- hay que controlar el elemento seleccionado !! -->
                            <option>Sra</option>
                      <?php } else { ?>
                      <option >Sr</option> <!-- hay que controlar el elemento seleccionado !! -->
                      <option selected>Sra</option>
                      <?php }?>

                  </select>
                 </div>

              <div class="col-xs-12 col-sm-6">

                  <label for="">Nombre <b class="text-danger">*</b></label>
                  <input type="text" class="form-control" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_FACTURACION']->value['name'];?>
" required="true" />

                  <label for="">Apellidos <b class="text-danger">*</b></label>
                  <input type="text" class="form-control" name="apellidos" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_FACTURACION']->value['middle_name'];?>
" required="true" />
                  <label for="">Companìa <b class="text-danger">*</b></label>
                  <input type="text" class="form-control" name="company" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_FACTURACION']->value['company'];?>
" required="true" />
                  <label for="">CIF/DNI/NIE <b class="text-danger">*</b></label>
                  <input type="text" class="form-control" name="cif" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_FACTURACION']->value['NIFDNINIE'];?>
" required="true" />
                  <label for="">Paìs <b class="text-danger">*</b></label>
                  <select name="pais" class="form-control" id="pais_f" onchange="enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
mi-cuenta/datos-personales/get_provincias',{id:$(this).val()},'POST','#select_provincias_f',false)" required="true" >
                        <option value="">Selecciona un paìs</option>

                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LISTA_PAISES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                    <?php if ($_smarty_tpl->tpl_vars['SELECTED_FACTURACION']->value['virtuemart_country_id']==$_smarty_tpl->tpl_vars['item']->value['id']) {?>
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
                  <select name="provincia" class="form-control" id="select_provincias_f" onreset="document.getElementById('pais_f').onchange();" >
                        <option disabled selected>Elige un paìs</option>

                  </select>
                  <!--  <label for="">Ciudad </label>
                    <select name="ciudad" class="form-control" id="select_ciudades" required="true" />
                        <option disabled selected>Elige un paìs</option>
                    </select> -->
                    <label for="">Ciudad  <b class="text-danger">*</b></label>
                    <input type="text" class="form-control" name="ciudad" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_FACTURACION']->value['city'];?>
" required="true" />
                  <label for="">CP  <b class="text-danger">*</b> </label>
                  <input type="text" class="form-control" name="cp" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_FACTURACION']->value['zip'];?>
" required="true" />
                  <label for="">Direcciòn de facturación  <b class="text-danger">*</b></label>
                  <input type="text" class="form-control" name="direccion" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_FACTURACION']->value['address_1'];?>
" required="true" />
                  <label for="">Telèfono  <b class="text-danger">*</b></label>
                  <input type="text" class="form-control" name="telefono" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_FACTURACION']->value['phone_1'];?>
" required="true" />
                  <label for="">Fax</label>
                  <input type="text" class="form-control" name="fax" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_FACTURACION']->value['fax'];?>
"  />
                  <p class="text-center ">
                      Al hacer clic entendemos que aceptas nuestras polìticas de protección de datos las cuales puedes ver <a href="http://davani.aclass.pro/terminos-de-uso-y-legal">aquí</a>
                  </p>
              </div>
                  <div id="result_facturacion" class="col-xs-12 col-sm-16">
                      <div class="col-xs-12 col-sm-2"></div>
                      <button type="submit" class="btn btn-warning">Guardar cambios</button>


                      <button type="button" class="btn btn-warning" onclick="resetForm();" >Rechazar cambios</button>

                  </div>



          </form>
      </div>
    <div role="tabpanel" class="tab-pane" id="envio">
         <div id="form_dir_env" class="col-xs-12 col-sm-12">

                 <div class="col-xs-12 col-sm-12">

                         <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SELECTED_ENVIO']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                             <div  class="col-xs-12 col-sm-6">
                                 <div class="offer offer-info">
                                     <div class="shape" >
                                         <div  class="shape-text" onclick="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
mi-cuenta/datos-personales/delete-dir',{id:<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
},'POST','#form_dir_env',false)">
                                             X
                                         </div>
                                     </div>
                                     <div class="offer-content" onclick="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
mi-cuenta/datos-personales/update-dir',{id:<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
},'POST','#form_dir_env',false)">

                                         <h3 class="lead">
                                             <?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['item']->value['middle_name'];?>

                                         </h3>

                                         <p>
                                             <?php echo $_smarty_tpl->tpl_vars['item']->value['address_1'];?>

                                         </p>
                                         <p>
                                             <?php echo $_smarty_tpl->tpl_vars['item']->value['city'];?>
 <br><?php echo $_smarty_tpl->tpl_vars['item']->value['provincia'];?>
<br><?php echo $_smarty_tpl->tpl_vars['item']->value['pais'];?>

                                         </p>
                                     </div>
                                 </div>
                             </div>



                        <?php } ?>

                 </div>

          <div class="col-xs-12 col-sm-12"></div>
          <div class="col-xs-12 col-sm-6"></div>
          <div class="col-xs-12 col-sm-6" id="insert_div">
              <button class="btn btn-warning"
                      onclick="javascript:enviarDatosAjax('<?php echo $_smarty_tpl->tpl_vars['ABSOLUTE_URL']->value;?>
mi-cuenta/datos-personales/insert-dir',{},'POST','#form_dir_env',false)" >Nueva direccion de envio
              </button>
           </div>
         </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>
</div>
<?php echo '<script'; ?>
>
    document.getElementById('pais_f').onchange();
function resetForm()
{
    document.getElementById('datos_facturacion').reset();
    document.getElementById('pais_f').onchange();
    return false;
}
<?php echo '</script'; ?>
>




<?php }} ?>
