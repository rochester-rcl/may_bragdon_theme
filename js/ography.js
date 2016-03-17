// Remote Content for OgraphyModal
// --------------------------------------------
// Upon clicking an anchor tag, data-ref value will be passed to
// /scripts/mbd_dom.php to retrieve the corresponding Ography node

(function ($) {
    $('#OgraphyModal').on('show.bs.modal', function(e) {

        //$modal.find('.edit-content').html("");
        var $modal = $(this),
            psnID = $(e.relatedTarget).attr("data-ref");     //psn:BELe_32
        $modal.find('.edit-content').html("");
          $.ajax({
            cache: false,
            type: 'GET',
            url:  '/maybragdon/may_bragdon/ography/' + psnID,
            //https://rclinddev.lib.rochester.edu/maybragdon/sites/all/themes/may_bragdon_theme/scripts/mbd_dom.php?data-ref=psn:BELe_32
            success: function(data)
            {
                //console.log(data);
                $modal.find('.edit-content').html(data);
                $('persname[type=display]').html($('persname[type=display]').html().replace("(",'<span class="para">').replace(")","</span>"));
                // placeName
                $('placename[type=display]').html($('placename[type=display]').html().replace("(",'<span class="para">').replace(")","</span>"));
            },
            error: function(data){
                //console.log(data);
            }
        });

    })
})(jQuery);
