(function ($) {
        console.log("I am also here, but not looking at you!");
        $('#target').html($('#target').html().replace("(","<span>").replace(")","</span>"));
})(jQuery);
