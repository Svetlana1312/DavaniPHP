<form action="javascript:alert('Opcion no disponible')">
    <div class="col-xs-12 col-sm-6">
        <label>Nombre de producto</label>
        <input type="text" name="nombre" class="form-control" />
        <label>Url de producto (<small>Debe ser único</small>)</label>
        <input type="text" name="nombre" class="form-control" />
        <label>Código Referencia (<small>Debe ser único</small>)</label>
        <input type="text" name="nombre" class="form-control" />
        <label>Stock </label>
        <input type="text" name="stock" class="form-control"  value="0"/>
        <label>Publicar</label>
        <select name="publicado" class="form-control">
            <option value="1">Si</option>
            <option value="0">No</option>
        </select>
    </div>
    <div class="col-xs-12 col-sm-6">
        <label>Imagen principal</label>
        <input type="text" class="form-control" name="imagen" onclick="openKCFinder(this)" /> 
        <label>Categoria</label>
        <select name="categoria_id" class="form-control" required>
            <option selected disabled >Selecciona una categoría</option>
            {foreach item=item from=$LIST_CATEGORIAS}
                <option value="{$item.id}">{$item.nombre    }</option>
            {/foreach}
        </select>
        <label>Precio </label>
        <input type="text" name="precio" class="form-control"  value="0"/>
        <label>Peso (en KG)</label>
        <input type="text" name="peso" class="form-control"  value="0"/>
    </div>
    <div class="col-xs-12">
        <label>Descripcion</label>
        <textarea id="editor" class="form-control"></textarea>
        {include file='../components/tinymce.tpl'}
    </div>
    <div class="col-xs-12" id="result">
        <button class="btn btn-info">Crear producto</button>
    </div>
</form>