<div id="formulario">
<h2>Formulario de registro</h2>
<form id="form-registro" action="javascript:enviarDatosAjax('{$URL_ACTUAL}/crear',$('#form-registro').serialize(),'POST','#result_registro',false)" >
    <div class="row">
        <div class="col-xs-12">
            <legend>Datos de registro</legend>
        </div>
        <!--   <div class="col-xs-12 col-sm-2">
             <label for="">Trato <b class="text-danger">*</b></label>
              <select name="title" class="form-control" >
                  <option>Sr</option>
                  <option>Sra</option>
              </select>
        </div> -->
        <div class="col-xs-12 col-sm-6">
            <label for="">Nombre completo<b class="text-danger">*</b></label>
            <input type="text" class="form-control" name="nombre_completo" value="" required="true" />
        </div>
        <div class="col-xs-12 col-sm-6">
            <label for="">Usuario <b class="text-danger">*</b></label>
            <input type="text" class="form-control" name="nombre" value="" required="true" />
        </div>
       <!-- <div class="col-xs-12 col-sm-3">
            <label for="">CIF/DNI/NIE <b class="text-danger">*</b></label>
            <input type="text" class="form-control" name="cif" value="" required="true" />
        </div>
        <div class="col-xs-12 col-sm-4">
            <label for="">País <b class="text-danger">*</b></label>
            <select name="pais" class="form-control" onchange="enviarDatosAjax('{$URL_ACTUAL}/get_ciudades',{literal}{{/literal}id:$(this).val(){literal}}{/literal},'POST','#select_ciudades',false)">
                <option disabled selected >Selecciona un país</option>
                <option value="195">España</option>
                {foreach item=item from=$LISTA_PAISES}
                    <option value="{$item.id}">{$item.nombre}</option>
                {/foreach}
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
        </div> -->
        <div class="col-xs-12 col-sm-6">
            <label for="">Correo electrónico <b class="text-danger">*</b></label>
            <input type="text" class="form-control" name="email"  value="" required="true" />
        </div>
        <div class="col-xs-12 col-sm-6">
            <label for="">Confirmar correo electrónico <b class="text-danger">*</b></label>
            <input type="text" class="form-control" name="email_conf" value="" required="true" />
        </div>
        <div class="col-xs-12 col-sm-6">
            <label for="">Contraseña <b class="text-danger">*</b></label>
            <input type="password" class="form-control" name="pass"  value="" required="true" />
        </div>
        <div class="col-xs-12 col-sm-6">
            <label for="">Confirmar contraseña <b class="text-danger">*</b></label>
            <input type="password" class="form-control" name="pass_conf"  value="" required="true" />
        </div>
    </div>
    <p class="text-center ">
        Al hacer clic entendemos que aceptas nuestras políticas de protección de datos las cuales puedes ver <a href="http://davani.aclass.pro/terminos-de-uso-y-legal">aquí</a>
    </p>
    <div id="result_registro">
        <button class="btn btn-lg btn-success  center-block">Crear cuenta</button>
    </div>
</form>
</div>