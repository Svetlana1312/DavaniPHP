<div class="col-xs-12">
    <h4>Modificar variables del sistema</h4>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr>
                <th>Nombre</th>
                <th>Valor</th>
                <th>Descripcion</th>
                <th>Accion</th>
            </tr>
        {foreach item=item from=$VARIABLES_SYS name=foo}
            <tr>
                <td>{$item.nombre}</td>
                <td>
                    {if $item.input=='input'}
                    <input type="text" class="form-control valor{$smarty.foreach.foo.iteration}" value='{$item.valor}' >
                    {/if}
                    {if $item.input=='textarea'}
                    <textarea class="form-control valor{$smarty.foreach.foo.iteration}" >{$item.valor}</textarea>
                    {/if}
                    {if $item.input=='image'}
                    <input type="text" onclick="openKCFinder(this)" class="form-control valor{$smarty.foreach.foo.iteration}" value='{$item.valor}' >
                    {/if}
                </td>
                <td>{$item.descripcion}</td>
                <td>
                    <button type="button" class="btn btn-warning btn-circle" 
                    onclick="enviarDatosAjax('{$URL_ACTUAL}/guardar',{literal}{{/literal}id:'{$item.id}',valor:makeSafety_url($('.valor{$smarty.foreach.foo.iteration}').val()){literal}}{/literal},'POST',false,false)">
                        <span class="glyphicon glyphicon-cog"></span>
                    </button>
                </td>
            </tr>
        {/foreach}
        </table>
    </div>
</div>
