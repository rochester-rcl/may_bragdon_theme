(function ($) {
    $(document).ready(function(){
        // console.log("I am here and watching!");
        $('input[type="radio"]').click(function(){
            if($(this).attr("value")=="tei"){
                // console.log("TEI")
                // Display TEI pane
                $('#paged-tei-seadragon-viewer-tei').removeClass("hide");
                // Hide the other panes
                $('.region-sidebar-second').removeClass("show");
                // $('#paged-tei-seadragon-viewer-seadragon-pane').removeClass("show");

                $('#paged-tei-seadragon-viewer-tei').css({
                    //add css specific styles here
                });
            }
            if($(this).attr("value")=="viewer"){
                // console.log("Viewer");
                // Display Viewer Pane
                // -Viewer is always displayed-
                // Hide the other panes
                $('.region-sidebar-second').removeClass("show"); // Inclusion
                $('#paged-tei-seadragon-viewer-tei').addClass("hide"); // TEI
                // Additional Style Tweaks
                $('#paged-tei-seadragon-viewer-tei').css({
                    //add css specific styles here
                });
            }
            if($(this).attr("value")=="additions"){
                // console.log("Additions");
                // $(".box").not(".blue").hide();
                // $(".blue").show();
                // Display Inclusion Pane
                $('.region-sidebar-second').addClass("show");
                // Hide the other panes
                $('#paged-tei-seadragon-viewer-tei').addClass("hide"); // TEI
                // Additional Style Tweaks
                $('#paged-tei-seadragon-viewer-tei').css({
                    //add css specific styles here
                });
            }
        });
    });
})(jQuery);
