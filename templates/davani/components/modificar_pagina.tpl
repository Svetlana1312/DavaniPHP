<div class="col-xs-12">
    <h4><b class="text-danger">Modificar pagina :</b> {$INFO_PAGINA.nombre}</h4>
    <form id="form-mod" action="javascript:enviarDatosAjax('{$URL_ACTUAL}/guardar',$('#form-mod').serialize(),'POST',$('#result'),false)">
        <div class="col-xs-12 col-sm-6">
            <legend>Información básica</legend>
            <label>Nombre de página</label>
            <input type="text" required name="nombre" value="{$INFO_PAGINA.nombre}" class="form-control" />
            <label>Url de página <small class="text-danger">(* debe ser única )</small></label>
            <input type="text" required name="nombre_url" value="{$INFO_PAGINA.nombre_url}" class="form-control" />
            <label>En el menú</label>
            <select required name="menu" class="form-control">
                <option disabled="true" >Elige una opción</option>
                <option {if $INFO_PAGINA.menu==1} selected {/if} value="1">Si</option>
                <option {if $INFO_PAGINA.menu==0} selected {/if} value="0">No</option>
            </select>
            <label>Publicar</label>
            <select required name="publicada" class="form-control">
                <option disabled="true" >Elige una opción</option>
                <option {if $INFO_PAGINA.publicada==1} selected {/if} value="1">Si</option>
                <option {if $INFO_PAGINA.publicada==0} selected {/if} value="0">No</option>
            </select>
            <input type="hidden" name="id" value="{$INFO_PAGINA.id}" />
        </div>
        <div class="col-xs-12 col-sm-6">
            <legend>Posicionamiento en buscadores</legend>
            <label>Titulo de página</label>
            <input type="text" required name="titulo" value="{$INFO_PAGINA.titulo}" class="form-control" />
            <label>Descripción de página <small>(* máx 70 carácteres.)</small></label>
            <textarea style="max-height:100px !important;height:100px;min-height:100px;" class="form-control" required name="descripcion">{$INFO_PAGINA.descripcion}</textarea>
            <label>Palabras claves de página <small>(* palabras o grupos de palabras separadas por coma.)</small></label>
            <textarea style="max-height:100px !important;height:100px;min-height:100px;" class="form-control" required name="keywords">{$INFO_PAGINA.keywords}</textarea>
        </div>
        <div class="col-xs-12">
            <label>Contenido</label>
            <textarea style="height:500px" class="form-control" id="editor"  name="contenido">{$INFO_PAGINA.contenido}</textarea>
        </div>
        <div id="result" class="col-xs-12">
            <br>
            <button class="btn btn-warning">Modificar</button>
        </div>
    </form>
</div>
{include file='../components/tinymce.tpl'}