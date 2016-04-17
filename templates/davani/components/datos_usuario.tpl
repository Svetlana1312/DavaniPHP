<div class="col-xs-12">
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
            <form id="form-mod" action="javascript:enviarDatosAjax('{$ABSOLUTE_URL}mi-cuenta/datos-personales/guardar',$('#form-mod').serialize(),'POST',false,false)">
                <div class="col-xs-12 col-sm-6">
                    <label for="">Nombre usuario<b class="text-danger">*</b></label>
                    <input type="text" class="form-control" name="nombre" value="{$SELECTED_USUARIO.nombre}" required="true"  />
                    <label for="">Nombre completo<b class="text-danger">*</b></label>
                    <input type="text" class="form-control" name="nombre_completo" value="{$SELECTED_USUARIO.nombre_completo}" required="true" />
                    <label for="">Email de la cuenta<b class="text-danger">*</b></label>
                    <input type="text" class="form-control" name="email" value="{$SELECTED_USUARIO.email}" required="true" />
                    <label for="">Cambiar Contraseña:</label>
                    <input type="password" class="form-control" autocomplete="off" name="password" placeholder="Dejar vacio si no se va a cambiar" />
                    <label for="">Confirmar Contraseña:</label>
                    <input type="password" class="form-control" autocomplete="off" name="password_conf" placeholder="Dejar vacio si no se va a cambiar" />
                    <input type="hidden" class="" name="id" value="{$SELECTED_USUARIO.id}" />
                </div>
                <div class="col-xs-12 col-sm-6">
                    <b>Fecha de creación de la cuenta</b><br>
                    {$SELECTED_USUARIO.registerDate}
                </div>
                <div id="result" class="col-xs-12 col-sm-4 col-sm-offset-4">
                    <br>
                    <button type="submit" class="btn btn-warning"> Guardar cambios </button>
                </div>
            </form>
            <div class="clearfix"><br><br></div>
    </div>
      <div role="tabpanel" class="tab-pane" id="facturacion">
          <form id="datos_facturacion" action="javascript:enviarDatosAjax('{$ABSOLUTE_URL}mi-cuenta/datos-personales/guardar-fact',$('#datos_facturacion').serialize(),'POST',false,false)"
                  >

              <input type="hidden" class="" name="usuario_id" value="{$SELECTED_USUARIO.id}" />
                 <div class="col-xs-12 col-sm-2">
                  <label for="">Trato <b class="text-danger">*</b></label>
                  <select name="title" class="form-control" >
                     {if $SELECTED_FACTURACION.title =='Sr'}
                            <option selected>Sr</option> <!-- hay que controlar el elemento seleccionado !! -->
                            <option>Sra</option>
                      {else}
                      <option >Sr</option> <!-- hay que controlar el elemento seleccionado !! -->
                      <option selected>Sra</option>
                      {/if}

                  </select>
                 </div>

              <div class="col-xs-12 col-sm-6">

                  <label for="">Nombre <b class="text-danger">*</b></label>
                  <input type="text" class="form-control" name="nombre" value="{$SELECTED_FACTURACION.name}" required="true" />

                  <label for="">Apellidos <b class="text-danger">*</b></label>
                  <input type="text" class="form-control" name="apellidos" value="{$SELECTED_FACTURACION.middle_name}" required="true" />
                  <label for="">Companìa <b class="text-danger">*</b></label>
                  <input type="text" class="form-control" name="company" value="{$SELECTED_FACTURACION.company}" required="true" />
                  <label for="">CIF/DNI/NIE <b class="text-danger">*</b></label>
                  <input type="text" class="form-control" name="cif" value="{$SELECTED_FACTURACION.NIFDNINIE}" required="true" />
                  <label for="">Paìs <b class="text-danger">*</b></label>
                  <select name="pais" class="form-control" id="pais_f" onchange="enviarDatosAjax('{$ABSOLUTE_URL}mi-cuenta/datos-personales/get_provincias',{literal}{{/literal}id:$(this).val(){literal}}{/literal},'POST','#select_provincias_f',false)" required="true" >
                        <option value="">Selecciona un paìs</option>

                {foreach item=item from=$LISTA_PAISES}
                    {if $SELECTED_FACTURACION.virtuemart_country_id == $item.id }
                          <option value="{$item.id}" selected>{$item.name}</option>
                    {else}
                       <option value="{$item.id}">{$item.name}</option>
                    {/if}
                {/foreach}
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
                    <input type="text" class="form-control" name="ciudad" value="{$SELECTED_FACTURACION.city}" required="true" />
                  <label for="">CP  <b class="text-danger">*</b> </label>
                  <input type="text" class="form-control" name="cp" value="{$SELECTED_FACTURACION.zip}" required="true" />
                  <label for="">Direcciòn de facturación  <b class="text-danger">*</b></label>
                  <input type="text" class="form-control" name="direccion" value="{$SELECTED_FACTURACION.address_1}" required="true" />
                  <label for="">Telèfono  <b class="text-danger">*</b></label>
                  <input type="text" class="form-control" name="telefono" value="{$SELECTED_FACTURACION.phone_1}" required="true" />
                  <label for="">Fax</label>
                  <input type="text" class="form-control" name="fax" value="{$SELECTED_FACTURACION.fax}"  />
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

                         {foreach item=item from=$SELECTED_ENVIO}
                             <div  class="col-xs-12 col-sm-6">
                                 <div class="offer offer-info">
                                     <div class="shape" >
                                         <div  class="shape-text" onclick="javascript:enviarDatosAjax('{$ABSOLUTE_URL}mi-cuenta/datos-personales/delete-dir',{literal}{{/literal}id:{$item.id}{literal}}{/literal},'POST','#form_dir_env',false)">
                                             X
                                         </div>
                                     </div>
                                     <div class="offer-content" onclick="javascript:enviarDatosAjax('{$ABSOLUTE_URL}mi-cuenta/datos-personales/update-dir',{literal}{{/literal}id:{$item.id}{literal}}{/literal},'POST','#form_dir_env',false)">

                                         <h3 class="lead">
                                             {$item.name}&nbsp;{$item.middle_name}
                                         </h3>

                                         <p>
                                             {$item.address_1}
                                         </p>
                                         <p>
                                             {$item.city} <br>{$item.provincia}<br>{$item.pais}
                                         </p>
                                     </div>
                                 </div>
                             </div>



                        {/foreach}

                 </div>

          <div class="col-xs-12 col-sm-12"></div>
          <div class="col-xs-12 col-sm-6"></div>
          <div class="col-xs-12 col-sm-6" id="insert_div">
              <button class="btn btn-warning"
                      onclick="javascript:enviarDatosAjax('{$ABSOLUTE_URL}mi-cuenta/datos-personales/insert-dir',{literal}{{/literal}{literal}}{/literal},'POST','#form_dir_env',false)" >Nueva direccion de envio
              </button>
           </div>
         </div>
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>
</div>
<script>
    document.getElementById('pais_f').onchange();
function resetForm()
{
    document.getElementById('datos_facturacion').reset();
    document.getElementById('pais_f').onchange();
    return false;
}
</script>




