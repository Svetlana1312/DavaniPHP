<div class="row">
    <div class="col-xs-12">
        <h3>Área de notificaciones</h3>
        <hr>
        <small>(Ninguna notificación)</small>
        <hr>
        <h3>Opciones de la cuenta</h3>
        <hr>
    </div>
    {foreach item=item from=$ACCIONES}
    <div onclick="window.location.href='{$URL_ACTUAL}/{$item.url}'" class="col-xs-12 col-sm-6">
        <div class="offer offer-info">
                <div class="shape">
                        <div class="shape-text">
                           {$item.icono}                         
                        </div>
                </div>
                <div class="offer-content">
                        <h3 class="lead">
                           {$item.nombre}
                        </h3>                       
                        <p>
                            {$item.descripcion}
                        </p>
                </div>
        </div>
    </div>
    {/foreach}    
</div>
