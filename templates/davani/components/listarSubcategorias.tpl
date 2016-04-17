<div class="row">
    <div class="col-xs-12">
        <h2>{$CATEGORIA.nombre}</h2>
        
        {foreach item=item from=$SUBCATEGORIAS}
        <a href="{$URL_ACTUAL}/{$item.nombre_url}" class="col-xs-12 col-sm-2 thumbnail list-categorias hidden-xs">
            <div class="row">
                <div class="hidden-xs col-sm-12">
                    <img class="img-responsive" alt="{$item.nombre}" title="{$item.nombre}" src="{$item.imagen_resized}" data-toggle="tooltip" data-placement="bottom"  />
                </div>
                <div class="col-xs-12 col-sm-12">
                    <h3>{$item.nombre}</h3>
                </div>
            </div>
        </a>
        {/foreach}
        <ul class="visible-xs list-categorias">
            {foreach item=item from=$SUBCATEGORIAS}
                <li><a href="{$URL_ACTUAL}/{$item.nombre_url}" class="col-xs-12">
                        <h3>{$item.nombre}</h3>
                    </a></li>
            {/foreach}
        </ul>
    </div>
</div>