<div id="footer" class="row">
            <div class="col-xs-12 col-sm-3">
                <ul>
                    {foreach item=item from=$MENU_LIST}
                    <li><span class="glyphicon glyphicon-circle-arrow-right"></span> <a href="{$ABSOLUTE_URL}{$item.nombre_url}"> {$item.nombre}</a></li>
                    {/foreach}
                </ul>
                <hr class="visible-xs">
            </div>
            <div class="col-xs-12 text-right col-sm-9">
               {getInfoSystem('COPYRIGHT')}<br/>
               Puede consultar nuestros textos legales <a href="{$ABSOLUTE_URL}terminos-de-uso-y-legal">aquí</a>
            </div>
            <div class="col-xs-12 text-center text-muted">
                Powered by Aclass Internet y Comunicaciones SL<br>
                <a target="w3c" href="http://validator.w3.org/check?uri=http%3A%2F%2Fdavani.aclass.pro%2F">
                    <img src="https://www.w3.org/Icons/WWW/w3c_home_nb" alt="w3c validator logo" title="página validada" /><br/>
                    Página validada por w3c
                </a>
            </div>
            <a href="#top" class="col-xs-2 col-xs-offset-5 col-sm-1  col-sm-offset-11 text-center to-top clearfix btn-primary">
                <span class="glyphicon glyphicon-chevron-up center-block"></span>
                <span class="center-block text-center">TOP</span>
            </a>
        </div>
