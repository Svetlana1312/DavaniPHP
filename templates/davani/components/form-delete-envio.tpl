<form id="datos_envio" action="javascript:enviarDatosAjax('{$URL_ACTUAL}/delete-envio',$('#datos_envio').serialize(),'POST',false,false)">

    <input type="hidden" class="" name="id" value="{$res.id}" />
    <div class="col-xs-12 col-sm-16">
             <p>Está segur@ que quiere borrar esta dirección de envio?</p>
              <h3>{$res.name}&nbsp;{$res.middle_name}</h3>
            <p>
                  {$res.address_1}<br>
                  {$res.city}<br>
                  {$res.provincia}<br>
                  {$res.pais}
            </p>

    </div>
    <div id="result_envio" class="col-xs-12 col-sm-16">
        <button type="submit" class="btn btn-warning">Confirmar</button>
        <button type="button" class="btn btn-warning" onclick="window.location.href=ABSOLUTE_URL + 'mi-cuenta/datos-personales'">Cancelar</button>
    </div>



</form>

