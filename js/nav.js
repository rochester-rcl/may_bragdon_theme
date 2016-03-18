// NAVIGATION TRANISTION
// --------------------------------------------
// Upon scrolling change RCL Navbar from the default postion to fixed
// at the moment it touched the top of the browser. To prevent the page
// from jumping we display an empty spacer that is the same height as
// the navbar.

(function ($) {
$(window).scroll(function() {
    if ($(this).scrollTop() > 50){
        $('.navbar').addClass("fixed"); // Navbar moves to position:fixed
        $('.carousel-inner').addClass("space"); // Spacer
        $('.scroll-hint').addClass("test");
        $('.logo-fade').removeClass("out");
        $('.may-b-signature').fadeOut( 500);
    }
    else{
        $('.navbar').removeClass("fixed");
        $('.carousel-inner').removeClass("space");
        $('.scroll-hint').removeClass("test");
        $('.logo-fade').addClass("out");
    }
});
})(jQuery);


(function ($) {
$(window).scroll(function() {
    if ($(this).scrollTop() > 100){
        $('.scroll-hint').addClass("gone");
    }
    else{
        $('.scroll-hint').removeClass("gone");
    }
});
})(jQuery);
