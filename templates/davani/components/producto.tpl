<div class="row">
    <div class="col-xs-8 pull-right">
        <h3>{$PRODUCTO.nombre}</h3>
        <hr>
        {$PRODUCTO.codigo}
        <hr>
        <h5><small>precio de venta</small> {$PRODUCTO.precio} €</h5>
    </div>
    <div class="col-xs-4 pull-left" id="block-product-img" >
        <div class="col-xs-12">
            <br>
            <img data-imagezoom="{$PRODUCTO.imagen}" data-zoomviewsize="[300,300]"  data-opacity="0" data-zoomviewborder="3px solid #DCDCDC"
                 data-cursor="all-scroll" class="img-responsive super" src="{$PRODUCTO.imagen_resized}" />  
            <br>
            <hr>
        </div>
        <div class="col-xs-12">
            <div id="carousel-example" class="carousel slide hidden-xs" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                   {foreach item=item from=$IMAGENES_PRODUCTO  name=asd}
                        {if $smarty.foreach.asd.first}
                            <div class="item active">
                            {else}
                            {if $smarty.foreach.asd.iteration%2!=0}
                                <div class="item">
                            {/if}
                        {/if}
                            <div class="col-sm-6">
                                <div class="col-item">
                                    <div class="photo">
                                        <img src="{$item.imagen_resized}" data-big="{$item.imagen}" onclick="changeImage(this)"   class="img-responsive" alt="a">
                                    </div>
                                </div>
                            </div>
                        {if $smarty.foreach.asd.iteration%2==0}
                            </div>
                        {/if}
                    {/foreach}
                    {if $smarty.foreach.asd.iteration%2!=0}
                    </div>
                    {/if} 
                </div>
                {if $smarty.foreach.asd.iteration>2}
                <div class="controls">
                    <a class="left glyphicon glyphicon-chevron-left btn btn-magnenta pull-left" href="#carousel-example" data-slide="prev"></a>
                    <a class="right glyphicon glyphicon-chevron-right btn btn-magnenta pull-right" href="#carousel-example" data-slide="next"></a>
                </div>
                {/if}
            </div>
        </div>
    </div>
    <div class="col-xs-12"><br></div>
    <div role="tabpanel" class="col-xs-12">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Descripcion</a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="descripcion">
                <div class="col-xs-12">{$PRODUCTO.descripcion}</div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

