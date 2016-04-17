{if $FILTER==false}
<div class="col-xs-12">
    <div class="table-responsive">

        <table class="table table-bordered table-hover" style="font-size:1em;">
            <tr >
                <td colspan="7">
                        <div class="form-inline">
                          <input type="text" name="word"  
                        onkeyup="enviarDatosAjax('{$URL_ACTUAL}/filter',{literal}{{/literal}word:$(this).val(){literal}}{/literal},'POST',$('#table-user-list'),false)" 
                        
                        class="form-control" /> 
                            <select class="text-danger input-group-btn form-control">
                                <option value="10">10</option>
                                <option value="10">20</option>
                                <option value="10">50</option>
                            </select>
                        </div><!-- /input-group -->
                </td>
            </tr>
            <tr class="bg-dark">
                <th>Tipo</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>P.Realizados</th>
                <th>P.Pendientes</th>
                <th>Block</th>
                <th>Acciones</th>
            </tr>
            <tbody id="table-user-list">
                {foreach item=item from=$LISTA_USUARIOS name=foo}
                    {if $item.owner!=1}
                            <tr {if $item.bloqueado==1} class="bg-danger" {/if}>
                    {else}
                            <tr class="bg-gold">
                    {/if}
                    <td class="{if $item.tipo=='mayorista'}bg-info{/if}{if $item.tipo=='cliente'}bg-warning{/if}"><b>{$item.tipo}</b></td>
                        <td style="max-width:80px;word-break: break-all;">{$item.nombre}</td>
                        <td style="max-width:150px;word-break: break-all;">{$item.email}</td>
                        {if $item.owner!=1}
                            <td class="bg-success">{$item.pedidos}</td>
                            <td class="bg-warning">0</td>
                        {else}
                            <td></td>
                            <td></td>
                        {/if}
                        <td style="max-width:30px;">
                        	{if $item.owner!=1}
                            <div class="checkbox" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
		                        <input type="checkbox" {if $item.bloqueado==1} checked {/if} />
		                        <label></label>
		                    </div>
		                    {/if}
                        </td>
                        <td style="min-width:135px;">
                            {if $item.owner!=1}
                                <a href="{$URL_ACTUAL}/modificar/{$item.id}"  class="btn btn-warning btn-circle">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="javascript:enviarDatosAjax('{$ABSOLUTE_URL}mi-cuenta/usuarios/delete',{literal}{{/literal}id:{$item.id}{literal}}{/literal},'POST',false,false)" class="btn btn-danger btn-circle">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>

                                <a  class="btn btn-info btn-circle">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </a>
                            {/if}
                        </td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
</div>
{else}
                 {foreach item=item from=$LISTA_USUARIOS name=foo}
                    {if $item.owner!=1}
                            <tr {if $item.bloqueado==1} class="bg-danger" {/if}>
                    {else}
                            <tr class="bg-gold">
                    {/if}
                    <td class="{if $item.tipo=='mayorista'}bg-info{/if}{if $item.tipo=='cliente'}bg-warning{/if}"><b>{$item.tipo}</b></td>
                        <td style="max-width:80px;word-break: break-all;">{$item.nombre}</td>
                        <td style="max-width:150px;word-break: break-all;">{$item.email}</td>
                        {if $item.owner!=1}
                            <td class="bg-success">{$item.pedidos}</td>
                            <td class="bg-warning">0</td>
                        {else}
                            <td></td>
                            <td></td>
                        {/if}
                        <td style="max-width:30px;">
                        {if $item.owner!=1}
                        	<div class="checkbox" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
		                        <input type="checkbox" {if $item.bloqueado==1} checked {/if} />
		                        <label></label>
		                    </div>
		                {/if}
                        </td>
                        <td style="min-width:135px;">
                            {if $item.owner!=1}
                                <a href="{$ABSOLUTE_URL}mi-cuenta/usuarios/modificar/{$item.id}"  class="btn btn-warning btn-circle">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="javascript:enviarDatosAjax('{$ABSOLUTE_URL}mi-cuenta/usuarios/delete',{literal}{{/literal}id:{$item.id}{literal}}{/literal},'POST',false,false)" class="btn btn-danger btn-circle">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>

                                <a  class="btn btn-info btn-circle">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </a>
                            {/if}
                        </td>
                    </tr>
                {/foreach}
{/if}