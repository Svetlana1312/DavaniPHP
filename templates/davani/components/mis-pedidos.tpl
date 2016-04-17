<h3>Mis pedidos</h3>
<table class="table table-bordered">
    <thead>
        <tr class="bg-dark">
            <th>Número Pedido</th>
            <th>Fecha última mod.</th>
            <th>Estado</th>
            <th>Importe</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        {if $NUM_PEDIDOS==0}
            <tr>
                <td colspan="5">No se han encontrado pedidos</td>
            </tr>
        {/if}
        {foreach item=item from=$LIST_PEDIDOS}
        <tr>
            <td>{$item.numero_pedido}</td>
            <td>{$item.created_on}</td>
            <td>{$item.order_status}</td>
            <td>{$item.total}</td>
            <td></td>
        </tr>
        {/foreach}
    </tbody>
</table>