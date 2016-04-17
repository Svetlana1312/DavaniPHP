<div class="col-xs-12 col-sm-4">
    <h4>Crear nuevo usuario</h4>
    <form id="form-add" action="javascript:enviarDatosAjax('{$URL_ACTUAL}/crear',$('#form-add').serialize(),'POST',$('#result'),false)">
        <label>Nombre de usuario</label>
        <input type="text" name="nombre_contacto" required="true" class="form-control"/>
        <label>Email usuario</label>
        <input type="text" name="email" required="true" class="form-control"/>
        <label>Password</label>
        <input type="text" name="password" required="true" class="form-control"/>
        <div id="result" >
            <br>
            <button type="submit" class="btn btn-info">
                Crear usuario
            </button>
        </div>
    </form>
</div>