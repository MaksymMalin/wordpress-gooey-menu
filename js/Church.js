jQuery('document').ready(function($){//proportion for footer//
   $('.bottom-triangle').css('border-top-width',($('#widget-area-1').height()-370));
   $('.bottom-triangle').css('border-left-width',($('#widget-area-1').width()/2));
   $('.bottom-triangle').css('border-right-width',($('#widget-area-1').width()/2));
 //  $('.button-down').css('top',($( window ).height()-50));//set button position for header//
$(window).resize(function() {
//proportion css footer//
   $('.bottom-triangle').css('border-top-width',($('#widget-area-1').height()-370));
   $('.bottom-triangle').css('border-left-width',($('#widget-area-1').width()/2));
   $('.bottom-triangle').css('border-right-width',($('#widget-area-1').width()/2));

});
$('.backtotop').click(function(){
$('document').scrollTop(0);

});
$('.button-down').click(function(){
$("html, body").animate({ scrollTop: $('.slider-top').height()+80 }, 1000);
//second block
});
$(window).scroll(function(){
     
       var button = $('.button-down');
       var scroll = $(this).scrollTop();
       var headerHeight = $('.slider-top').height()/3;
        
		
       if(scroll < headerHeight){
            if(!button.hasClass('fixed')) {
                button.stop().addClass('fixed');
            }
       }else{
            if(button.hasClass('fixed')) {
                button.stop().removeClass('fixed');		
            }
       }
    });



});
