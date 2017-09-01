$( document ).ready(function() {
    $('.brands').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        navText: '',
        autoplay: true,
        autoplayTimeout: 1500,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:3,
                nav:true
            },
            1000:{
                items:4,
                nav:true,
                loop:true
            }
        }
    });

    $('.testimons').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        navText: '',
        autoplay: true,
        autoplayTimeout: 1500,
        items:1,
        nav:true,
        loop:true
    });
});