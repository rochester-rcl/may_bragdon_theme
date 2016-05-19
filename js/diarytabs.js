(function ($) {
    $(document).ready(function(){
        $('#paged-tei-seadragon-viewer-tei').addClass("hide-pane");
        $('.region-sidebar-second').addClass("hide-pane");
        
        var $prev_next = $('#block-islandora-compound-object-compound-navigation .islandora-compound-prev-next');
        if($prev_next.length > 0 ){
            $('#mobile-inclusion-tab').removeClass("no-inclusion-tab");
        } else {
            $('#mobile-inclusion-tab').addClass("no-inclusion-tab");
        }
        console.log("I am here and watching!");
        $('input[type="radio"]').click(function(){
            if($(this).attr("value")=="tei"){
                console.log("TEI")
                // Display TEI pane
                $('#paged-tei-seadragon-viewer-tei').removeClass("hide-pane");
                // hide-pane the other panes
                $('.region-sidebar-second').addClass("hide-pane");
                // $('#paged-tei-seadragon-viewer-seadragon-pane').removeClass("show");

                $('#paged-tei-seadragon-viewer-tei').css({
                    //add css specific styles here
                });
            }
            if($(this).attr("value")=="viewer"){
                console.log("Viewer");
                // Display Viewer Pane
                // -Viewer is always displayed-
                // hide-pane the other panes
                $('.region-sidebar-second').addClass("hide-pane"); // Inclusion
                $('#paged-tei-seadragon-viewer-tei').addClass("hide-pane"); // TEI

                // Additional Style Tweaks
                $('#paged-tei-seadragon-viewer-tei').css({
                    //     'height':'auto',
                });
            }
            if($(this).attr("value")=="inclusions"){
                console.log("Inclusions");
                // $(".box").not(".blue").hide-pane();
                // $(".blue").show();
                // Display Inclusion Pane
                $('.region-sidebar-second').removeClass("hide-pane");
                $('.region-sidebar-second').addClass("top");
                // hide-pane the other panes
                $('#paged-tei-seadragon-viewer-tei').addClass("hide-pane"); // TEI
                // Additional Style Tweaks
                // $('.region-sidebar-second').css({
                //     'z-index':'99999999',
                // });
            }
        });
    });
})(jQuery);
