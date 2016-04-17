<form id="form-add" action="javascript:enviarDatosAjax('{$URL_ACTUAL}/alta_categoria',$('#form-add').serialize(),'POST',false,false)">
    <div class="col-xs-12 col-sm-6">
        <label>Nombre de la categoria</label>
        <input type="text" name="nombre" required class="form-control" />
        <label>Url de la categoria (<small>Debe ser único</small>)</label>
        <input type="text" name="nombre_url" required class="form-control" />
        <label>Publicar</label>
        <select name="publicada" class="form-control">
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>
    </div>
    <div class="col-xs-12 col-sm-6">
        <label>Imagen principal</label>
        <input type="text" class="form-control" name="imagen" onclick="openKCFinder(this)" /> 
        <label>Categoria padre</label>
        <select name="categoria_id" class="form-control" required>
            <option value="0">Ninguna</option>
            {foreach item=item from=$LIST_CATEGORIAS}
                <option value="{$item.id}">{$item.padre}->{$item.nombre}</option>
            {/foreach}
        </select>
    </div>
    <div class="col-xs-12">
        <label>Descripcion</label>
        <textarea id="editor" name="descripcion" class="form-control"></textarea>
        {include file='../components/tinymce.tpl'}
    </div>
    <div class="col-xs-12" id="result">
        <button class="btn btn-info">Crear producto</button>
    </div>
</form>