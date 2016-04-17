<form id="datos_envio" action="javascript:enviarDatosAjax('{$URL_ACTUAL}/update-envio',$('#datos_envio').serialize(),'POST',false,false)">

    <input type="hidden" class="" name="id" value="{$res.id}" />
    <input type="hidden" class="" name="usuario_id" value="{$DATOS_USUARIO.id}" />
    <div class="col-xs-12 col-sm-2">
        <label for="">Trato <b class="text-danger">*</b></label>
        <select name="title" class="form-control" >
            {if $res.title =='Sr'}
                <option selected>Sr</option>
                <option>Sra</option>
            {else}
                <option >Sr</option>
                <option selected>Sra</option>
            {/if}

        </select>
    </div>

    <div class="col-xs-12 col-sm-6">

        <label for="">Nombre <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="nombre" value="{$res.name}" required="true" />

        <label for="">Apellidos <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="apellidos" value="{$res.middle_name}" required="true" />
        <label for="">Compania <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="company" value="{$res.company}" required="true" />
       <!-- <label for="">CIF/DNI/NIE <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="cif" value="{$res.NIFDNINIE}" required="true" /> -->
        <label for="">Paìs <b class="text-danger">*</b></label>
        <select name="pais" class="form-control" id="pais" onchange="enviarDatosAjax('{$URL_ACTUAL}/get_provincias',{literal}{{/literal}id:$(this).val(),state_id:{$res.virtuemart_state_id} {literal}}{/literal},'POST','#select_provincias',false)" required="true" >
        <option value="">Selecciona un paìs</option>

        {foreach item=item from=$LISTA_PAISES}
            {if $res.virtuemart_country_id == $item.id }
                            <option value="{$item.id}" selected>{$item.name}</option>
              {else}
                            <option value="{$item.id}">{$item.name}</option>
              {/if}
                            {/foreach}
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
                            <input type="text" class="form-control" name="ciudad" value="{$res.city}" required="true" />
                            <label for="">CP  <b class="text-danger">*</b> </label>
                            <input type="text" class="form-control" name="cp" value="{$res.zip}" required="true" />
                            <label for="">Direcciòn de envìo  <b class="text-danger">*</b></label>
                            <input type="text" class="form-control" name="direccion" value="{$res.address_1}" required="true" />
                            <label for="">Telèfono  <b class="text-danger">*</b></label>
                            <input type="text" class="form-control" name="telefono" value="{$res.phone_1}" required="true" />
                            <label for="">Fax</label>
                            <input type="text" class="form-control" name="fax" value="{$res.fax}"  />
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

<script>

    document.getElementById('pais').onchange();
    function resetForm()
    {
        document.getElementById('datos_envio').reset();
        document.getElementById('pais').onchange();
        return false;
    }
</script>
