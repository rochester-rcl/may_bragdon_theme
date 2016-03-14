(function ($) {
    $(document).ready(function(){
        $('input[type="radio"]').click(function(){
            console.log("Here!")
            if($(this).attr("value")=="tei"){
                console.log("TEI")
                $(".box").not(".red").hide();
                $(".red").show();
            }
            if($(this).attr("value")=="viewer"){
                console.log("Viewer")
                $(".box").not(".green").hide();
                $(".green").show();
            }
            if($(this).attr("value")=="inclusions"){
                console.log("Inclusions")
                $(".box").not(".blue").hide();
                $(".blue").show();
            }
        });
    });
})(jQuery);
