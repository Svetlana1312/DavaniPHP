
{if $CASO && $CASO == 'DIR-FACT'}
    {foreach item=item from=$LISTA_PROVINCIAS}
        {if $DATOS_FACTURACION.virtuemart_state_id == $item.id}
            <option value="{$item.id}" selected>{$item.name}</option>
        {else}
            <option value="{$item.id}">{$item.name}</option>
        {/if}
    {/foreach}
{else}
    {foreach item=item from=$LISTA_PROVINCIAS}
        {if $STATE_ID && $STATE_ID == $item.id}
            <option value="{$item.id}" selected>{$item.name}</option>
        {else}
            <option value="{$item.id}">{$item.name}</option>
        {/if}
    {/foreach}
{/if}
