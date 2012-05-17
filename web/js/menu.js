var family_menu_enabled = 0;
var shop_menu_enabled = 0;

$(document).ready(function(){
    $("li#li-family").mouseover(function(){
        $("div[class='family']").show(function(){
            ("li#li-family").mouseleft(function(){
                    $("div[class='family']").hidden();  
                })
        })
    });
    
    $("li#li-shop").mouseover(function(){
        $("div[class='shop']").show();
    });
});



