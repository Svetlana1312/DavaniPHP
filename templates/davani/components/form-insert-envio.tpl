<form id="datos_envio" action="javascript:enviarDatosAjax('{$URL_ACTUAL}/insert-envio',$('#datos_envio').serialize(),'POST',false,false)">


    <div class="col-xs-12 col-sm-2">
        <label for="">Trato <b class="text-danger">*</b></label>
        <select name="title" class="form-control" >
                <option>Sr</option>
                <option>Sra</option>
        </select>
    </div>

    <div class="col-xs-12 col-sm-6">
        <input type="hidden" class="" name="usuario_id" value="{$DATOS_USUARIO.id}" />
        <label for="">Nombre <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="nombre" value="" required="true" />

        <label for="">Apellidos <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="apellidos" value="" required="true" />
        <label for="">Compania <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="company" value="" required="true" />
       <!-- <label for="">CIF/DNI/NIE <b class="text-danger">*</b></label>
        <input type="text" class="form-control" name="cif" value="" required="true" /> -->
        <label for="">Paìs <b class="text-danger">*</b></label>
        <select name="pais" class="form-control" id="pais" onchange="enviarDatosAjax('{$URL_ACTUAL}/get_provincias',{literal}{{/literal}id:$(this).val(){literal}}{/literal},'POST','#select_provincias',false)" required="true" >
        <option value="">Selecciona un paìs</option>

        {foreach item=item from=$LISTA_PAISES}
                  <option value="{$item.id}" >{$item.name}</option>
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
<script>
    function resetForm()
    {
        document.getElementById('datos_envio').reset();
        document.getElementById('pais').onchange();
        return false;
    }
</script>