// NAVIGATION TRANISTION
// --------------------------------------------
// Upon scrolling change RCL Navbar from the default postion to fixed
// at the moment it touched the top of the browser. To prevent the page
// from jumping we display an empty spacer that is the same height as
// the navbar.

(function ($) {
    // console.log("I am also watching!");
    $('#yourButton').click(function() {
        if ($('br').css('height') === "17px"){
            // console.log("If this...");
            $('#texticon').removeClass("fa-align-left");
            $('#texticon').addClass("fa-align-justify");
            $('span.line-break').removeClass("inline");
            $( "#yourButton" ).attr({
              alt: "This is for reading",
              title: "Reader View",
            //   data-toggle: "tooltip"
            });
            // $('span.line-break').css({
            //     'height':'auto',
            //     'display': 'block',
            //     'border-bottom': '1px solid #e8e6dc',
            //     'width': '100%'
            // });
        } else {
            // console.log("Else do this...");
            $('#texticon').removeClass("fa-align-justify");
            $('#texticon').addClass("fa-align-left");
            $('span.line-break').addClass("inline");
            // $('span.line-break').css({
            //     'display': 'inline-block',
            //     'border-right': '1px dotted #7cbcff',
            //     'height': '17px',
            //     'width': '0px',
            //     'margin': '0 5px',
            //     'border-bottom':'none',
            //     'position':'relative',
            //     'top':'2px',
            //     'margin':'0 4px 0 0',
            //     'display':'inline'
            // });
        }
    });
})(jQuery);
