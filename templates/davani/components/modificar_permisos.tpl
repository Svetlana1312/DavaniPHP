
<h3>Modificar permisos para grupo <small>{$INFO_GRUPO.nombre}</small></h3>
    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <tr>
                <th>Accion</th>
                <th>Descripcion</th>
                <th>Permitida</th>
            </tr>
            {foreach item=item from=$LISTA_ACCIONES}
                <tr>
                    <td>{$item.icono} {$item.nombre}</td>
                    <td>{$item.descripcion}</td>
                    <td>
                        <input type="checkbox" class="form-control" {if testAccion($item.id,$INFO_GRUPO.id)==true} checked {/if}
                        onclick="enviarDatosAjax('{$URL_ACTUAL}/modificar',{literal}{{/literal}accion_id:{$item.id},tipo_id:{$INFO_GRUPO.id},check:$(this).is(':checked'){literal}}{/literal},'POST',false,true)"
                        /> 
                    </td>
                </tr>
            {/foreach}
        </table>
    </div>