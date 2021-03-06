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
        $('.logo-fade').addClass("in");
        $(".may-b-signature, .car-cap, .carousel-indicators").fadeOut( 900);
    }
    else{
        $('.navbar').removeClass("fixed");
        $('.carousel-inner').removeClass("space");
        $('.scroll-hint').removeClass("test");
        $('.logo-fade').removeClass("in");
        $('.may-b-signature, .car-cap, .carousel-indicators').fadeIn( 700);
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
