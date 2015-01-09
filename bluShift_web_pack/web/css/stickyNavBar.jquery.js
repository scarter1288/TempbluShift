$(document).ready(function()
{  
var stickyNavTop = $('.nav').offset().top;  
  
    var stickyNav = function(){  
    var scrollTop = $(window).scrollTop();  
           
    if (scrollTop > stickyNavTop)
    {   
        $('.top-header').addClass('sticky');  
    } else
    {  
        $('.top-header').removeClass('sticky');   
    }  
    };  
      
    stickyNav();  
      
    $(window).scroll(function()
    {  
        stickyNav();  
    });  
});  