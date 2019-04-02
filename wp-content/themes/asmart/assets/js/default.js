// ---------------------------------------------------------
// !!!!!!!!!!!!!!!!!document ready!!!!!!!!!!!!!!!!!!!!!!!!!!
// ---------------------------------------------------------

jQuery(document).ready(function () {
    "use strict";



    // jQuery('body').on('click', '.home-text-slider .slider-text-walpaper',function(){
    //
    //     var currentIndex = jQuery(this).index();
    //
    //     jQuery('.home-image-slider').slick('slickGoTo', currentIndex);
    //
    // });
    /*
    * Replace test search in menu for mobile
     */


    // jQuery('.responsive-menu-search-box').attr("placeholder", "Поиск");
    /*
    *   modal
    */
    // jQuery('body').on('click', '.modal-main i, .overlay-modal-layer',function(){
    //
    //     jQuery('.modal-main').fadeOut();
    //     jQuery('.overlay-modal-layer').fadeOut();
    //
    // });
    //
    // jQuery('body').on('click', '.call-link',function(){
    //
    //     jQuery('.modal-main').fadeIn();
    //     jQuery('.overlay-modal-layer').fadeIn();
    //     return false;
    //
    // });


    /*
    * Input telephone mask
    */

    // jQuery('.one-but-phone, #billing_phone, #tel').inputmask({"mask": "+7 (999) 999-9999"});

    /*
    *  Match height
    */
    // jQuery('.block-event-text-block,  .block-event-walp , .match-height, .news-img-block ').matchHeight();



    HomeFullpageSlider();
    MenuToggle();

// end redy function
});
jQuery(window).load(function() {
    HomeSlider();
});
//------------------------
// Home full page slider
//----------------------------------
function HomeFullpageSlider(){
    "use strict";
    let main_class = '#pagepiling';
    if(jQuery(main_class).length){
        jQuery(main_class).pagepiling({
            sectionsColor: ['#bfda00', '#2ebe21', '#2C3E50', '#51bec4'],
            navigation: {
                'position': 'right',
                'tooltips': ['Слайд 1', 'Слайд 2', 'Слайд 3' ]
            },
            onLeave: function(index, nextIndex){

                if(nextIndex == 3  ){
                  jQuery('body').removeClass('white').addClass('black');
                }else{
                    jQuery('body').removeClass('black').addClass('white');
                }


            }
        });
    }

}
//------------------------
// Home    slider
//----------------------------------
function HomeSlider(){
    "use strict";
    let main_class = '.home-slider';
    if(jQuery(main_class).length){
        jQuery(main_class).slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 700,
            dots: false,
            //  autoplay: true,
             prevArrow: jQuery('.home-slider-walp .arr-slider .prev'),
             nextArrow: jQuery('.home-slider-walp .arr-slider .next')

        });

    }

}

//------------------------
//  Menu toggle  and click menu
//----------------------------------
function MenuToggle(){
    "use strict";

    jQuery('.top-main-container a  ').click(function(e) {

        e.preventDefault();
        jQuery(this).next().stop().slideToggle();
    }).next().stop().hide();

    jQuery('.menu-link, .menu-overlay').click(function(e) {
        e.preventDefault();

        jQuery('.menu-bar, .menu-overlay, .switcher-lang, .menu-link').toggleClass('active');

    });

}

