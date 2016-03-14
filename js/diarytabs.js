// NAVIGATION TRANISTION
// --------------------------------------------
// Upon scrolling change RCL Navbar from the default postion to fixed
// at the moment it touched the top of the browser. To prevent the page
// from jumping we display an empty spacer that is the same height as
// the navbar.

(function ($) {
    $(document).ready(function(){
        console.log('Here');
        $('input[type="radio"]').click(function(){
            console.log('tei');
            if($(this).attr("value")=="tei"){
                $(".box").not(".red").hide();
                $(".red").show();
            }
            if($(this).attr("value")=="viewer"){
                console.log('viewer');
                $(".box").not(".green").hide();
                $(".green").show();
            }
            if($(this).attr("value")=="inclusions"){
                console.log('inclusions');
                $(".box").not(".blue").hide();
                $(".blue").show();
            }
        });
    });
})(jQuery);
