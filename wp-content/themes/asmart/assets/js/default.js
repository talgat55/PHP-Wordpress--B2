// ---------------------------------------------------------
// !!!!!!!!!!!!!!!!!document ready!!!!!!!!!!!!!!!!!!!!!!!!!!
// ---------------------------------------------------------

jQuery(document).ready(function () {
    "use strict";

    AtmSlider();
    FixwidthSlider();
    HomeFullpageSlider();
    MenuToggle();
    Ymaps();
    SliderMenu();
    MaskFields();

// end redy function
});
jQuery(window).load(function() {
    HomeSlider();
    Preloader();
});

//------------------------
// Preloader
//----------------------------------
function Preloader(){
    "use strict";
    let main_class = '#preloader';
    if(jQuery(main_class).length){
        jQuery('#preloader').velocity({
            opacity : 0.1,
        }, {
            duration: 400,
            complete: function(){
                jQuery('#hola').velocity({
                    translateY : "-100%"
                }, {
                    duration: 1000,
                    easing: [0.7,0,0.3,1],
                    complete: function(){
                        jQuery('body').addClass('animate-done');
                    }
                })
            }
        })
    }

}


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

        if(jQuery(this).next('.sub-menu').length ){
            e.preventDefault();
            console.log('1');
        }else{
            console.log('0');
            window.location.href = jQuery(this).attr('href');

        }

        jQuery(this).next().stop().slideToggle();
    }).next().stop().hide();

    jQuery('.menu-link, .menu-overlay').click(function(e) {
        e.preventDefault();

        jQuery('.menu-bar, .menu-overlay, .switcher-lang, .menu-link').toggleClass('active');

    });

}

//------------------------
//  Fix wdith slider
//----------------------------------
function FixwidthSlider(){
    "use strict";
    let $width = jQuery(window).width();
   if( $width < 1369){

       jQuery('.home-slider').css('width',$width);

   }

}

//------------------------
//  Maps
//----------------------------------
function Ymaps(){
    "use strict";
    let $map = jQuery('#map');


   if($map.length){
       google.maps.event.addDomListener(window, 'load', init);

       function init() {
           // Basic options for a simple Google Map
           // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
           var mapOptions = {
               // How zoomed in you want the map to start at (always required)
               zoom: 17,

               // The latitude and longitude to center the map (always required)
               center: new google.maps.LatLng(54.967948, 73.381493), // New York

               // How you would like to style the map.
               // This is where you would paste any style found on Snazzy Maps.
               styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
           };

           // Get the HTML DOM element that will contain your map
           // We are using a div with id="map" seen below in the <body>
           var mapElement = document.getElementById('map');

           // Create the Google Map using our element and options defined above
           var map = new google.maps.Map(mapElement, mapOptions);
           var image = {
               url: 'http://batler.lightxdesign.ru/wp-content/themes/asmart/assets/images/location.png',
               size: new google.maps.Size(77, 105),
               // The origin for this image is (0, 0).
               origin: new google.maps.Point(0, 0),
               // The anchor for this image is the base of the flagpole at (0, 32).
               anchor: new google.maps.Point(0, 105)
           };
           // Let's also add a marker while we're at it
           var marker = new google.maps.Marker({
               position: new google.maps.LatLng(54.967948, 73.381493),
               map: map,
               icon: image,
               title: 'Батлер'
           });
       }

   }

}

//------------------------
// Atmosfer    slider
//----------------------------------
function AtmSlider(){
    "use strict";

    let main_class = '.slider-atm';
    if(jQuery(main_class).length){
        jQuery(main_class).slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 700,
            dots: false,
            //  autoplay: true,
            prevArrow: jQuery('.atm-controllers .prev'),
            nextArrow: jQuery('.atm-controllers .next')

        });
        jQuery('.controll.center ').click(function(e) {
            e.preventDefault();
            jQuery(main_class).slick('slickGoTo', 0);
        });

    }

}
//------------------------
// Menu    slider
//----------------------------------
function SliderMenu(){
    "use strict";

    let main_class = '.slider-menu';
    if(jQuery(main_class).length){
        jQuery(main_class).slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            speed: 700,
            dots: true,
            //  autoplay: true,
            prevArrow: jQuery('.arrow-menu .prev'),
            nextArrow: jQuery('.arrow-menu .next')

        });


    }

}
//------------------------
// Input telephone mask
//----------------------------------




function MaskFields(){
    "use strict";

    let phone_class = '.phone-field';
    let time_class = '.time-field';
    let date_class = '.date-field';
    if(jQuery(phone_class).length){
        jQuery(phone_class).inputmask({"mask": "+7 (999) 999-9999"});

    }


    //  in mobile work native UI
    if(jQuery(window).width() > 1024 ){
        if(jQuery(time_class).length){
            jQuery(time_class).datepicker({
                dateFormat: ' ',
                timepicker: true,
                classes: 'only-timepicker',
                autoClose: true
            });

        }

        if(jQuery(date_class).length){
            jQuery(date_class).datepicker({
                dateFormat: 'dd.mm.yyyy',
                timepicker: false,
                autoClose: true
            });

        }

    }else{

        jQuery(time_class).attr('type', 'time');
        jQuery(date_class).attr('type', 'date');

    }



}
