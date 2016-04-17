{literal}<script>
    $(document).ready(function(){
       $('.to-top').click(function(e){
           e.preventDefault();
           $('body').animate({scrollTop:0},'1500','swing');
       });
    });
</script>{/literal}