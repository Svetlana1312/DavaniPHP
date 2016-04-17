<div class="col-xs-12">
    <h4>Modificar paginas del sistema</h4>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <tr class="bg-defaul">
                <th>Nombre</th>
                <th>Titulo</th>
                <th>Menu</th>
                <th>Publicar</th>
                <th>Accion</th>
            </tr>
        {foreach item=item from=$PAGINAS_SYS name=foo}
            <tr>
                <td>{$item.nombre}</td>
                <td>{$item.titulo}</td>
                <td>
                    {if $item.menu==1}
                        <span class="glyphicon glyphicon-ok text-success"></span>
                    {else}
                        <span class="glyphicon glyphicon-remove text-danger"></span>
                    {/if}
                </td>
                <td>
                    {if $item.publicada==1}
                        <span class="glyphicon glyphicon-ok text-success"></span>
                    {else}
                        <span class="glyphicon glyphicon-remove text-danger"></span>
                    {/if}
                </td>
                <td>
                    <a href="{$URL_ACTUAL}/{$item.nombre_url}" class="btn btn-warning btn-circle">
                        <span class="glyphicon glyphicon-cog"></span>
                    </a>
                    {if $item.sistema==0}
                    <button class="btn btn-danger  btn-circle">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>
                    {else}
                    <button disabled class="btn btn-danger  btn-circle">
                        <span class="glyphicon glyphicon-trash"></span>
                    </button>   
                    {/if}
                </td>
            </tr>
        {/foreach}
        </table>
    </div>
</div>