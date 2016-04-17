<div class="col-xs-12">
    <form id="form-add" action="javascript:enviarDatosAjax('{$URL_ACTUAL}/crear',$('#form-add').serialize(),'POST',false,true)">
    <legend>Añadir un baner al slider</legend>
    <label>Titulo</label>
    <input type="text" class="form-control" name="titulo" placeholder="Escribe el titulo del baner" /> 
    <label>Descripción</label>
    <input type="text" class="form-control" name="descripcion" placeholder="Escribe la descripción del baner" /> 
    <label>Imagen</label>
    <input type="text" class="form-control" onclick="openKCFinder(this)" name="imagen" placeholder="Url de la imagen del baner, haz clic para elegir" /> 
    <label>Texto del botón</label>
    <input type="text" class="form-control" name="texto" placeholder="Url de la imagen del baner, haz clic para elegir" /> 
    <label>Enlace del botón</label>
    <input type="text" class="form-control" name="enlace" placeholder="Escribe la url del botón" />
    <br>
    <button class="btn btn-warning">
        Crear baner
    </button>
    </form>
</div>