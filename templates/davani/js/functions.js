//funciones para el sistema
// get cookies
function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + "; " + expires;
}

function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i=0; i<ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1);
        if (c.indexOf(name) == 0) return c.substring(name.length, c.length);
    }
    return "";
}

function checkCookie(str) {
    var coo = getCookie(str);
    if (coo != "") {
        return true;
    } else {
        return false;
    }
}
//explorerlaunch
inputPadre=null;
function openKCFinder(obj) {
   var nueva= window.open(ABSOLUTE_URL+'mi-cuenta/explorador-de-archivos/input','Explorador de archivos',
    'status=0, toolbar=0, location=0, menubar=0, ' +
        'directories=0, resizable=1, scrollbars=0, width=800, height=600'
    );
   inputPadre=$(obj);
}
function PonerDatos(str){
    inputPadre.val(str);
}

//makeSafety Url

function makeSafety_url(str){
   str= str.replace('https://','##https##');
   str= str.replace('http://','##http##');
   return str;
}
//Send ajax
function enviarDatosAjax(action,parametros,metodo,salida,refresh){
    $.ajax({
        url: action,
        type: metodo,
        data: parametros,
        success:function(data) {
            if(!salida){
                $('body').append('<div class="modal fade" id="modal-process"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button><h4 class="modal-title">Realizando Acción</h4></div><div class="modal-body">Por favor espere . . .</div></div><!-- /.modal-content --></div><!-- /.modal-dialog --></div><!-- /.modal -->');
                $('#modal-process').modal();
                $('#modal-process').find('.modal-body').html(data);
                $('.modal-dialog').css('z-index','10000');
                if(refresh){
                    $('#modal-process').find('.close').click(function() {
                      document.location.href = document.location.href;
                    });
                }
            }else{
                $(salida).html(data);
            }
        }
    });  
}

//

function changeImage(obj){
    var img = $(obj).attr('data-big');
    $('.super').fadeOut('fast',function(){
        $(this).attr('src',img);
        $(this).attr('data-imagezoom',img);
    $('.super').fadeIn();
    });
    
}

$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
