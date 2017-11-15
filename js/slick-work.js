jQuery(document).ready(function($){
            $('.testimonials').slick({
            	dots: true,
                arrows: false,
                autoplay: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplaySpeed: 6000, // speed is in milliseconds
                responsive: [
                {
                  breakpoint: 480,
                  settings: {
                    autoplaySpeed: 4000 // speed is in milliseconds
                  }
                } ]
                                     
                                     
            });
         });