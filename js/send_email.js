/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
(function ($) {
    $(document).ready(function () {
        $('#contact-form-wrapper').on('show.bs.modal', function (event) {
            $('#contact-form-wrapper .modal-dialog').html($("#feedback-form").html());
            $("#feedback-form-primary").click(function () {

                var location = window.location.href;
                var email = $("#email");
                var content = $("#feedback");
                var unused = $("#unused");
                if (unused.val() && unused.val().trim !== "") {
                    //unused field filled in - should not be 
                } else {
                    var validEmail = false
                    if (/(.+)@(.+){2,}\.(.+){2,}/.test(email.val())) {
                        validEmail = true;
                    }

                    var validContent = content.val() && (unused.val().trim !== "");

                    if (!validEmail) {
                        $(".form-group.email").addClass("error");
                        $("#email").addClass("error");
                    } else {
                        $(".form-group.email").removeClass("error");
                        $("#email").removeClass("error");
                    }

                    if (!validContent) {
                        $(".form-group.feedback").addClass("error");
                        $("#feedback").addClass("error");
                    } else {
                        $(".form-group.feedback").removeClass("error");
                        $("#feedback").removeClass("error");
                    }

                    if (validEmail && validContent) {
                        $('#contact-form-wrapper .modal-dialog').html($("#feedback-thankyou").html());
                        setTimeout(function () {
                            $('#contact-form-wrapper').modal('hide');
                        }, 1300);


                        var data = {email: email.val(),
                            content: content.val(),
                            location: location}
                        $.ajax({
                            type: "POST",
                            url: "/maybragdon/may_bragdon/send-feedback",
                            data: data,
                            success: function (msg) {
                                //assume optimistic ok
                            },
                            error: function (msg) {
                                //assume no error
                            }
                        });
                    }
                }
            });

            $("#feedback-thankyou .btn.btn-primary").click(function () {
                $('#contact-form-wrapper').modal('hide');
            });
        });


        $('#contact-form-wrapper').on('hidden.bs.modal', function (e) {
            $("#feedback").removeClass("error");
            $("#email").removeClass("error");
            $(".form-group.email").removeClass("error");
            $(".form-group.feedback").removeClass("error");
            $("#email").val("");
            $("#feedback").val("");
        });
    });
})(jQuery);

