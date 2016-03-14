(function ($) {
    $(document).ready(function(){
        console.log("Here!");
        $('input[type="radio"]').click(function(){
            if($(this).attr("value")=="tei"){
                console.log("TEI")
                // $(".box").not(".red").hide();
                // $(".red").show();
                $('#paged-tei-seadragon-viewer-tei').css({
                    'background': 'red',
                });
            }
            if($(this).attr("value")=="viewer"){
                console.log("Viewer");
                // $(".box").not(".green").hide();
                // $(".green").show();
                $('#paged-tei-seadragon-viewer-tei').css({
                    'background': 'green',
                });
            }
            if($(this).attr("value")=="inclusions"){
                console.log("Inclusions");
                // $(".box").not(".blue").hide();
                // $(".blue").show();
                $('#paged-tei-seadragon-viewer-tei').css({
                    'background': 'blue',
                });
            }
        });
    });
})(jQuery);
