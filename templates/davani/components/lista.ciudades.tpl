{foreach item=item from=$LISTA_CIUDADES}
    <option value="{$item.id}">{$item.name}</option>
{/foreach}