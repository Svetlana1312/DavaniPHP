{literal}<script>
    $(document).ready(function(){
        $(document).scroll(function(){
            if($(window).width()<768){
                if($(document).scrollTop()>$(window).height()/2){
                    $('.to-top').fadeIn('slow',function(){
                        $(this).css({display:'block'});
                    });
                }else{
                    $('.to-top').fadeOut('slow',function(){
                        $(this).css({display:'none'});
                    });
                }   
            }else{
                $('.to-top').css({display:'block'});
            }
        });
    });
</script>{/literal}