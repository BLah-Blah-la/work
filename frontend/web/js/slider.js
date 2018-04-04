$('*[data-toggle=tooltip]').tooltip();
    
    $('.step-slider').owlCarousel({
        navSpeed:1500,
        dragEndSpeed:1500,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            }
        }
    });

    $('.review-slider').owlCarousel({
        navSpeed:1500,
        dragEndSpeed:1500,
        nav:true,
        dots: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            }
        }
    });