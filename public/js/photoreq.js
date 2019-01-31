$(document).ready(function(){

    $(function () {
        $('.popup-modal').magnificPopup({
            type: 'inline',
            preloader: false,
            modal: true
        });
        $(document).on('click', '.popup-modal-dismiss', function(e){
            e.preventDefault();
            $.magnificPopup.close();
        });
    });

    $(document).on('click', '.photo_nxt', function (e) {
        e.preventDefault();
        var data_type = $(this).attr('data-type');
        var package_id = $(this).attr('data-pack');
        if (data_type == "basic"){
            $("#initiate_photo_"+package_id).addClass("noshow");
            $("#basic_confirm_"+package_id).removeClass("noshow");
            $("#photo_slider_"+package_id+' .advcphotos').addClass("noshow");
            $("#photo_slider_"+package_id+' .basicphotos').addClass("noshow");
        }
        if (data_type == "advanced"){
            $("#initiate_photo_"+package_id).addClass("noshow");
            $("#std_photos_"+package_id).addClass("noshow");
            $("#advanced_request_"+package_id).removeClass("noshow");
        }
    });

    $(document).on('click', '.btn-cancel', function (e) {
        e.preventDefault();

        var package_id = $(this).attr('data-pack');
        $("#initiate_photo_"+package_id).removeClass("noshow");
        $("#basic_confirm_"+package_id).addClass("noshow");
        $("#advanced_request_"+package_id).addClass("noshow");
        $("#photo_slider_"+package_id+' .advcphotos').removeClass("noshow");
        $("#photo_slider_"+package_id+' .basicphotos').removeClass("noshow");

        $.magnificPopup.close();
    });

    $(document).on('click', '.btn-advc', function (e) {
        e.preventDefault();
        var package_id = $(this).attr('data-pack');
        $("#photo_slider_"+package_id+' .advcphotos').removeClass("noshow");
        $("#photo_slider_"+package_id+' .basicphotos').addClass("noshow");
        $("#std_photos_"+package_id).addClass("noshow");
    });

    $(document).on('click', '.btn-std', function (e) {
        e.preventDefault();
        var package_id = $(this).attr('data-pack');
        $("#photo_slider_"+package_id+' .basicphotos').removeClass("noshow");
        $("#photo_slider_"+package_id+' .advcphotos').addClass("noshow");
        $("#std_photos_"+package_id).addClass("noshow");
    });



    $('.basic_confirm_btn').on('click', function(e) {
       e.preventDefault();

       $(".ajaxloader").show();
        var package_id = $(this).attr('data-pack');
        console.log(package_id);
        var token = $('input[name="_token"]').val();

        jQuery.ajax({
            url: '/photos/standard/request',
            type : "POST",
            data:{ _token:token, package_id:package_id},
            error: function (request, status, error) {
                /*console.log(request.responseText);*/
                window.location = '/locker';
            },
            success: function(data) {
                if (data.error == '0') {

                    var content = "";
                    $.each(data.photos, function(k, value) {
                        var photo = '/uploads/packages/standard/'+value.package_id+'/'+value.name;
                        content += '<div class="item"><a href="#" target="_blank"><img src="'+photo+'"></a></div>';
                    });

                    var owl = $("#std_photos_"+package_id+" .owl-ajax");
                    owl.append(content);
                    owl.owlCarousel({
                        loop:false, margin:10, responsiveClass:true, autoplay: false, nav:true, navText: '', responsive:{
                            0:{items:1},
                            600:{items:1},
                            1000:{items:1}
                        }
                    });

                    $("#basic_confirm_"+package_id).addClass("noshow");
                    $("#std_photos_"+package_id).removeClass("noshow");

                    setTimeout(function(){
                        $(".ajaxloader").hide();
                    }, 5000);

                }else if (data.error == '1') {
                    $("#basic_confirm_"+package_id).addClass("noshow");
                    $("#basic_pending_"+package_id).removeClass("noshow");
                    $(".ajaxloader").hide();
                    setTimeout(function(){ window.location = '/locker'; }, 5000);
                }else if(data.error == '2'){
                    window.location = '/locker';
                }
            }
        });
        return false;

    });


    $('.advc_confirm_btn').on('click', function(e) {
       e.preventDefault();

        var package_id = $(this).attr('data-pack');
        var description = $('#advc_desc_'+package_id).val();

        if ($('#advc_verify_'+package_id).prop('checked') != true){
            $("#advc_error_"+package_id).html('<label class="error">Select checkbox to continue!</label>');
            return false;
        }

        if (description == "") {
            $("#advc_error_"+package_id).html('<label class="error">Please describe about your photo request.</label>');
            return false;
        }
        var token = $('input[name="_token"]').val();

        $(".ajaxloader").show();

        jQuery.ajax({
            url: '/photos/advanced/request',
            type : "POST",
            data:{ _token:token, package_id:package_id, description:description},
            error: function (request, status, error) {
                /*console.log(request.responseText);*/
                window.location = '/locker';
            },
            success: function(data) {
                if (data.error == 0) {
                    $("#advanced_request_"+package_id).addClass("noshow");
                    $("#conirm_advcreq_"+package_id).removeClass("noshow");
                    $(".ajaxloader").hide();
                    setTimeout(function(){ window.location = '/locker'; }, 5000);
                }else if(data.error == '1'){
                    window.location = '/locker';
                }
            }
        });
        return false;
    });

    $('.owl-noajax').owlCarousel({
        loop:false,
        margin:10,
        responsiveClass:true,
        autoplay: false,
        nav:true,
        navText: '',
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
});
