<!DOCTYPE html>
<html lang="es">
    <head>
        {include file="../blocks/head.tpl"}
    </head>
    <body>
        <div class="container">
            {include file="../blocks/header.tpl"}
            <hr class="hidden-xs"/>
            <div id="sendero" class="row">
                <div class="col-xs-12">
                </div>
            </div>
            <div id="content" class="row">
                <div id="bar" class="col-xs-12 col-sm-3">
                    <!-- bar menu -->
                    {include file="../components/barmenu.tpl"}
                    <!-- login -->
                    {if $LOGIN!=true}
                        {include file="../components/barlogin.tpl"}
                    {else}
                        {include file='../components/barcuenta.tpl'}
                    {/if}
                    <!-- facebook plguin -->
                    {*include file="../components/facebookplugin.tpl"*}
                </div>
                <div id="main" class="col-xs-12 col-sm-9">
                    {foreach item=item from=$PLANTILLA}
                        {include file=$item}
                    {/foreach}
                </div>
            </div>
            <hr/>
            {include file="../blocks/footer.tpl"}
        </div>
        <script src="{$TEMPLATE_URL}js/functions.js"></script>
        <!-- Magnify js -->
        <script src="{$TEMPLATE_URL}js/imagezoom.js"></script>
        <!-- efects -->

    </body>
</html>