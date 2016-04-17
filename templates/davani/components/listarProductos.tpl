
<div class="row">
    <div class="col-xs-12">
        <h3>Lista de productos</h3>
        <hr>
    </div>
    <div class="col-xs-12">
        {if $PARAMETROS.page==''}
            {paginate(5,1,$TOTAL_PRODUCTOS,$TOTAL_PRODUCTOS/5, $url_categoria)}
        {else}
            {paginate(5,$PARAMETROS.page,$TOTAL_PRODUCTOS,(int)$TOTAL_PRODUCTOS/5, $url_categoria)}
        {/if}
        
    </div>
    {foreach item=item from=$PRODUCTOS}
    <div class="col-xs-12 list-productos">
        <div class="row">
            <div class="col-xs-6 col-sm-2">
                <img class="img-responsive thumbnail"  src="{$item.imagen_resized}" />
            </div>
            <div class="col-xs-6 col-sm-10">
                <div class="row hidden-xs">
                    <div class="col-xs-6">
                        <h3>{$item.nombre}</h3>
                        <p>{$item.codigo}</p>
                        <h5 class="col-xs-12">Colores disponibles</h5>
                        <span class=" col-xs-1 thumbnail" style="background-color: red"></span>
                        <span class=" col-xs-1 thumbnail" style="background-color: white"></span>
                        <span class=" col-xs-1 thumbnail" style="background-color: greenyellow"></span>
                        <span class=" col-xs-1 thumbnail" style="background-color: #5e5e5e"></span>
                        <span class=" col-xs-1 thumbnail" style="background-color: darkmagenta"></span>    
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <br>
                        <h4 class="text-info">{$item.precio} €</h4>
                        <a href="{$ABSOLUTE_URL}producto/{$item.nombre_url}" class="btn btn-magnenta"> Ver producto </a>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 visible-xs" >
                <h4>{$item.nombre}</h4>
            </div>
            <div class="col-xs-12 visible-xs clearfix text-left">
                <div class="row">
                    <div class="col-xs-6">
                        <span class=" col-xs-3 thumbnail" style="background-color: red"></span>
                        <span class=" col-xs-3 thumbnail" style="background-color: white"></span>
                        <span class=" col-xs-3 thumbnail" style="background-color: greenyellow"></span>
                        <span class=" col-xs-3 thumbnail" style="background-color: #5e5e5e"></span>
                        <span class=" col-xs-3 thumbnail" style="background-color: darkmagenta"></span>    
                    </div>
                    <div class="col-xs-6">
                        <h4 class="text-info">{$item.precio} €</h4>
                        <button class="btn btn-default"> Ver producto </button>
                        <br>
                    </div> 
                </div>
                
            </div>
        </div>
    </div>
    {/foreach}
    <div class="col-xs-12">
        {if $PARAMETROS.page==''}
            {paginate(5,1,$TOTAL_PRODUCTOS,(int)$TOTAL_PRODUCTOS/5, $url_categoria)}
        {else}
            {paginate(5,$PARAMETROS.page,$TOTAL_PRODUCTOS,$TOTAL_PRODUCTOS/5, $url_categoria)}
        {/if}
    </div>
</div>