// Remote Content for OgraphyModal
// --------------------------------------------
// Upon clicking an anchor tag, data-ref value will be passed to
// /scripts/mbd_dom.php to retrieve the corresponding Ography node

(function ($) {
    $('#OgraphyModal').on('show.bs.modal', function(e) {

        var $modal = $(this),
            psnID = $(e.relatedTarget).attr("data-ref");     //psn:BELe_32

          $.ajax({
            cache: false,
            type: 'POST',
            url: '//rclinddev.lib.rochester.edu/maybragdon/sites/all/themes/may_bragdon_theme/scripts/mbd_dom.php?data-ref='+psnID,
            //https://rclinddev.lib.rochester.edu/maybragdon/sites/all/themes/may_bragdon_theme/scripts/mbd_dom.php?data-ref=psn:BELe_32
            success: function(data)
            {
                $modal.find('.edit-content').html(data);
            }
        });

    })
})(jQuery);
