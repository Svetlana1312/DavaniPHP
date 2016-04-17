<h2>Recuperar cuenta</h2>
{$DATOS_PAGINA.contenido}
<form id="form-reset" action="javascript:enviarDatosAjax('{$URL_ACTUAL}/recuperar',$('#form-reset').serialize(),'POST',$('#result-reset'),false)"
    <legend>Formulario de recuperación de cuenta</legend>
    <div class="form-group col-xs-12 col-sm-6 center-block">
        <div class="input-group">
            <label class="center-block text-center" for="">Por favor introduce su email de cuenta</label>
        </div>
        <div class="input-group">
          <input type="text" class="form-control" name="email" placeholder="ejemplo@mail.com...">
          <span class="input-group-btn">
            <button class="btn btn-success" type="submit">Recuperar</button>
          </span>
        </div>
        <div id="result-reset">
          
        </div>
    </div>
</form>
