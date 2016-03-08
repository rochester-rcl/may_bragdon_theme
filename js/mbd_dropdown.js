(function ($) {
  $.get("https://rclinddev.lib.rochester.edu/islandora/object/maybragdon%3A728/datastream/PR/view", function (data) {
    $i = 728;	// resetting the counter for options
    $('#islandora_paged_tei_seadragon_pager').empty();   // remove original dropdown options
      $(data).find("extent").each(function () {
          $i++;  // this counter let's us keep track of which option we're on
          pagenum = $(this).text();
          prefix = "maybradgon:";
          val = $i.toString();
           var newOption = $('<option>');							 // Create New Option.
           newOption.attr('value', prefix.concat(val)).text(pagenum);
           $('#islandora_paged_tei_seadragon_pager').append(newOption);  // Append that to the DropDownList.

        });
  });
})(jQuery);
