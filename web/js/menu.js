var family_menu_enabled = 0;
var shop_menu_enabled = 0;

$(document).ready(function(){
    $("li#li-family").mouseover(function(){
        $("ul#ssli-family").fadeIn("fast", function(){
            $('li#li-family').mouseleave(function(){
                $("ul#ssli-family").fadeOut("fast");  
            })
        })
    });
    $("li#li-shop").mouseover(function(){
        $("ul#ssli-shop").fadeIn("fast", function(){
            $('li#li-shop').mouseleave(function(){
                $("ul#ssli-shop").fadeOut("fast");  
            })
        })
    });
});



