<div class="col-xs-12">
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead class="bg-dark">
                <tr>
                    <th>Imagen</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Texto botón</th>
                    <th>Enlace</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                {foreach item=item from=$SLIDER_LIST}
                <tr>
                    <td style="max-width: 80px">
                        <img  src="{$item.imagen}" class="img-responsive" onclick="openKCFinder($(imagen_{$item.id}))" />
                        <input type="hidden" id="imagen_{$item.id}" value="{$item.imagen}" name='imagen' />
                    </td>
                    <td><input type="text" value="{$item.titulo}" id="titulo_{$item.id}" name="titulo"  class="form-control"/></td>
                    <td><input type="text" value="{$item.descripcion}" id="descripcion_{$item.id}" name="descripcion"  class="form-control"/></td>
                    <td  style="word-break: all;max-width: 80px">
                        <input type="text" id="texto_{$item.id}" value="{$item.texto}" name="texto"  class="form-control"/>
                    </td>
                    <td  style="word-break: all;max-width: 80px">
                        <input type="text" id="enlace_{$item.id}" value="{$item.enlace}" name="enlace"  class="form-control"/>
                    </td>
                    <td style="word-break: all;max-width: 132px">
                        <a target="slider_enlace_{$item.id}" href="{$item.enlace}" class="btn btn-info">
                            <span class="glyphicon glyphicon-eye-open"></span>
                        </a>
                        <a class="btn btn-warning" href="javascript:enviarDatosAjax('{$URL_ACTUAL}/modificar',{literal}{{/literal}id:{$item.id},titulo:$('#titulo_{$item.id}').val(),descripcion:$('#descripcion_{$item.id}').val(),texto:$('#texto_{$item.id}').val(),enlace:$('#enlace_{$item.id}').val(),imagen:$('#imagen_{$item.id}').val(){literal}}{/literal},'POST',false,true)">
                            <span class="glyphicon glyphicon-floppy-save"></span>
                        </a>
                        <a class="btn btn-danger" href="javascript:enviarDatosAjax('{$URL_ACTUAL}/delete',{literal}{{/literal}id:{$item.id}{literal}}{/literal},'POST',false,true)">
                            <span class="glyphicon glyphicon-floppy-remove"></span>
                        </a>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
            
    <small>(Haz clic en cada imagen para cargar una imagen nueva)</small>
</div>