<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
        {foreach item=item from=$LISTA_TIPOS_USUARIOS}
            <tr>
                <td>{$item.nombre}</td>
                <td>{$item.descripcion}</td>
                <td>
                    <a href="{$URL_ACTUAL}/{$item.nombre}" class="btn btn-warning">
                        <span class="glyphicon glyphicon-edit"></span>
                    </a>
                </td>
            </tr>
        {/foreach}
    </table>
</div>