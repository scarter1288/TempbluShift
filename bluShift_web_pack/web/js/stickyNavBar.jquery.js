$(document).ready(function()
{  
    var stickyNavTop = $('.header').offset().top;  
  
    var stickyNav = function(){  
        var scrollTop = $(window).scrollTop();  
               
        if (scrollTop > stickyNavTop)
        {   
            $('.header').addClass('sticky');  
        } else
        {  
            $('.header').removeClass('sticky');   
        }  
    };  
      
    stickyNav();  
      
    //$(window).scroll(function()
    //{  
    //   stickyNav();  
    //});
    
    jQuery(document).scroll(function() {
    if (jQuery(this).scrollTop() > 10) {
        jQuery('.header').css('position','fixed');
        jQuery('.header').css('top','0');
        jQuery('.header').css('width','100%');
    } 
    else {
        jQuery('.header').css('position','static');
    }
});
    
});  