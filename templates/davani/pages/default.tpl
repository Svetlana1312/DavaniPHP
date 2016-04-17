<!DOCTYPE html>
<html lang="es">
    <head>
        {include file="../blocks/head.tpl"}
    </head>
    <body>
        {include file="../../librarys/js/facebooktrigger.tpl"}
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
        {if getInfoSystem('COOKIES_TEXT')!=''}
            
            <div id="cookies" class="alert alert-dismissable">
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                {getInfoSystem('COOKIES_TEXT')}
                <button  onclick="setCookie('davani_cookies','ok','365');" data-dismiss="alert" aria-label="Close" class="btn btn-magnenta">Aceptar</button>
            </div>
            {literal}
            <script>
                $(document).ready(function(){
                   if(checkCookie('davani_cookies')){
                     $('#cookies').remove();
                    }
                });
            </script>
            {/literal}
        {/if}
      
        <script src="{$TEMPLATE_URL}/js/functions.js"></script>
        <!-- Magnify js -->
        <script src="{$TEMPLATE_URL}/js/imagezoom.js"></script>
        <!-- efects -->
        
        {literal}
            <!--Start of Tawk.to Script
                <script type="text/javascript">
                var $_Tawk_API={},$_Tawk_LoadStart=new Date();
                (function(){
                var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
                s1.async=true;
                s1.src='https://embed.tawk.to/557824a0da5e8eab747077fc/default';
                s1.charset='UTF-8';
                s1.setAttribute('crossorigin','*');
                s0.parentNode.insertBefore(s1,s0);
                })();
                </script>
            End of Tawk.to Script-->
        {/literal}
    </body>

</html>