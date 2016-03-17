(function ($) {
        console.log("I am also here, but not looking at you!");
        $('#paged-tei-seadragon-viewer-download-datastream-JP2').html($('#paged-tei-seadragon-viewer-download-datastream-JP2').html().replace("(","<span>").replace(")","</span>"));
        $('persname[type=display]').html($('persname[type=display]').html().replace("(","<span>").replace(")","</span>"));
})(jQuery);
