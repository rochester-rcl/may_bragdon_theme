(function ($) {
    $(document).ready(function(){
        console.log('Here');
        $('input[type="radio"]').click(function(){
            if($(this).attr("value")=="tei"){
                console.log('tei');
                $('.tei').css({
                    'background':'red'
                });
                // $(".box").not("#paged-tei-seadragon-viewer-tei").hide("#paged-tei-seadragon-viewer-seadragon-pane");
                // $("#paged-tei-seadragon-viewer-tei").show();
            }
            if($(this).attr("value")=="viewer"){
                console.log('viewer');
                $('.tei').css({
                    'background':'blue'
                });
                // $(".box").not(".green").hide();
                // $(".green").show();
            }
            if($(this).attr("value")=="inclusions"){
                console.log('inclusions');
                $('.tei').css({
                    'background':'green'
                });
                // $(".box").not(".blue").hide();
                // $(".blue").show();
            }
            });
            } else {
                console.log('default');
                $('.tei').css({
                    'background':'red'
                });
            });
    });
})(jQuery);
