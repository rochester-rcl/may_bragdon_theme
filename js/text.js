


(function ($) {
        console.log("I am also here, but not looking at you!");
        $('persname').html($('persname').html().replace("(","<span>").replace(")","</span>"));
    });
})(jQuery);
