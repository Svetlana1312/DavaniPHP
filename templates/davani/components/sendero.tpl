<div id="sendero" class="row">
    <div class="col-xs-12">
            <ol class="breadcrumb">
                {foreach item=item from=$SENDERO}
                    <li>
                        <a href="{$item.enlace}">{$item.nombre}</a>
                    </li>
                {/foreach}
            </ol>
            </div>
</div>