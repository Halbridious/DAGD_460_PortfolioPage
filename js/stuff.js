$(document).ready(function(){
    $(".portLink").hover(function(){
         $(this).css('box-shadow', '15px 15px 5px rgba(0,0,0,.75)');
    },function(){
         $(this).css('box-shadow', '5px 5px 5px rgba(0,0,0,.75)');
    }); 
});