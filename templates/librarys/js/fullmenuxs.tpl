<script>
            $('.navbar-toggle').click(function(){
                if(!$('.navbar').hasClass('active')){
                    $(this).children('span').removeClass('glyphicon-menu-hamburger');
                    $(this).children('span').addClass('glyphicon-remove');
                    $('.navbar').slideDown('slow',function(){
                        $(this).addClass('active');         
                    });   
                }else{
                    $(this).children('span').removeClass('glyphicon-remove');
                    $(this).children('span').addClass('glyphicon-menu-hamburger');
                    $('.navbar').removeClass('active');
                }
            });
        </script>