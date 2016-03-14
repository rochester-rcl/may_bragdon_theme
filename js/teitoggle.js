// NAVIGATION TRANISTION
// --------------------------------------------
// Upon scrolling change RCL Navbar from the default postion to fixed
// at the moment it touched the top of the browser. To prevent the page
// from jumping we display an empty spacer that is the same height as
// the navbar.

(function ($) {
    $('#yourButton').click(function() {
        $('br').css({
            'content': '"A"',
            'margin-bottom': '1.5em !important',
            'border-right': '1px dotted #7cbcff',
            'height': '17px',
            'width': '4px',
            'margin': '0 5px',
        });
    });
})(jQuery);
