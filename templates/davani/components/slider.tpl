<div id="carousel-id" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            {foreach item=item name=slider from=$SLIDER_LIST}
            <div class="item {if $smarty.foreach.slider.first} active {/if}">
                <img src="{$item.imagen}" alt="" class="img-responsive">
                <div class="container">
                   <div class="carousel-caption">
                       <h1>{$item.titulo}</h1>
                       <p class="hidden-xs">{$item.descripcion}</p>
                       <p><a class="btn btn-lg btn-primary" href="{$item.enlace}" role="button">{$item.texto}</a></p>
                   </div>
                </div>
            </div>
            {/foreach}
        </div>
        <a class="left carousel-control" href="#carousel-id" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-id" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
</div>