// ---------------------------------------------------------
// !!!!!!!!!!!!!!!!!document ready!!!!!!!!!!!!!!!!!!!!!!!!!!
// ---------------------------------------------------------
document.addEventListener('wpcf7mailsent', function(event) {



    jQuery('.modal-succcess-send').addClass('show-modal');
    jQuery('.custom-modal ,  .custom-modal2').removeClass('show-modal');

    setTimeout(function(){
        jQuery('.modal-succcess-send, .modal-overlay').removeClass('show-modal');


    },2000);


}, false);
jQuery(document).ready(function () {
    "use strict";


    //
    //  fixed footer on bottom
    //
    var hh = jQuery('header').height(); // берем высоту шапки и суем в переменную hh
    var fh = jQuery('footer').height(); // то же самое с подвалом
    var wh = jQuery(window).height(); // высота всего окна
    var сh = wh - hh - fh; // считаем оптимальную высоту для блока с контентом
    jQuery('.site-content').css('min-height', сh); // применяем посчитанную высоту


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

    jQuery('.lightgallery .carousel').lightGallery({
        thumbnail:true
    });
    /*
    * Input telephone mask
    */

    jQuery('.one-but-phone, #billing_phone, #tel').inputmask({"mask": "+7 (999) 999-9999"});

    // Accordion();
    /*
    *  Match height
    */
    jQuery('.block-event-text-block,  .block-event-walp , .match-height, .news-img-block ').matchHeight();
    jQuery(' .block-event-text-block h3').matchHeight();
    jQuery('.block-event-img').matchHeight();

// end redy function
//----------------------------------
// Map
//------------------------------------
     if(jQuery('.page-template-page-about #map').length){
         ymaps.ready(function () {
             var myMap = new ymaps.Map('map', {
                     center: [54.992441, 73.367044],
                     zoom: 15,
                     controls: []
                 }, {
                     // searchControlProvider: 'yandex#search'
                 }),

                 // Создаём макет содержимого.
                 /*  MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                       '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                   ),*/

                 myPlacemark = new ymaps.Placemark([54.992441, 73.367044], {
                     id: '1'
                 }, {

                     // Опции.
                     // Необходимо указать данный тип макета.
                     iconLayout: 'default#image',
                     // Своё изображение иконки метки.
                     //
                     iconImageHref: 'http://xn--55-6kcpecta3ahjucld1b2m.xn--p1ai/wp-content/themes/asmart/assets/images/marker.png',
                     // // Размеры метки.
                     iconImageSize: [27, 37],
                     // // Смещение левого верхнего угла иконки относительно
                     // // её "ножки" (точки привязки).
                     iconImageOffset: [-14, -37]
                 });


             myMap.geoObjects

                 .add(myPlacemark);

             myMap.behaviors.disable('scrollZoom');
             myMap.behaviors.disable('multiTouch');
             if(jQuery(window).width() < 769){
                 myMap.behaviors.disable('drag');
             }



         });

    } else if (jQuery('#map').length) {

         ymaps.ready(function () {
             var myMap = new ymaps.Map('map', {
                     center: [54.992441, 73.367044],
                     zoom: 15,
                     controls: ['zoomControl']
                 }, {
                     // searchControlProvider: 'yandex#search'
                 }),

                 // Создаём макет содержимого.
                 /*  MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
                       '<div style="color: #FFFFFF; font-weight: bold;">$[properties.iconContent]</div>'
                   ),*/

                 myPlacemark = new ymaps.Placemark([54.992441, 73.367044], {
                     id: '1'
                 }, {

                     // Опции.
                     // Необходимо указать данный тип макета.
                     iconLayout: 'default#image',
                     // Своё изображение иконки метки.
                     //
                     iconImageHref: 'http://xn--55-6kcpecta3ahjucld1b2m.xn--p1ai/wp-content/themes/asmart/assets/images/marker.png',
                     // // Размеры метки.
                     iconImageSize: [27, 37],
                     // // Смещение левого верхнего угла иконки относительно
                     // // её "ножки" (точки привязки).
                     iconImageOffset: [-14, -37]
                 });


             myMap.geoObjects

                 .add(myPlacemark);

             myMap.behaviors.disable('scrollZoom');
             myMap.behaviors.disable('multiTouch');

         if(jQuery(window).width() < 769){
             myMap.behaviors.disable('drag');
         }


         });
     }


    HoverEffectsMedia();
    PartnersCarousel();
    Accordion();

    //
    //  Modal
    //


    jQuery('.modal-overlay, .img-close-modal').click(function () {

        jQuery('.custom-modal ,  .custom-modal2, .modal-overlay').removeClass('show-modal');

        return false;
    });



    jQuery('.link-to-call.slider').click(function () {
        if(jQuery(this).hasClass('link-registration')){
            jQuery('.custom-modal2, .modal-overlay').addClass('show-modal');

        }else{
            jQuery('.custom-modal, .modal-overlay').addClass('show-modal');

        }

        return false;


    });




});

//
//  Hover event for  media block in home page
//
function HoverEffectsMedia() {
    jQuery(".media-block-bg-walp-content").hover(
        function () {
            var $index = jQuery(this).index();
            if ($index == '1') {
                jQuery(".media-block-bg").eq($index).addClass('media-zindex');
                jQuery(".media-block-bg-walp-content").eq($index).addClass('media-zindex');
            }

        }, function () {
            jQuery(this).removeClass('media-zindex');
            jQuery(".media-block-bg").removeClass('media-zindex');

        }
    );
    jQuery(".media-block-bg.second").hover(
        function () {
            jQuery(this).addClass('media-zindex');
            var $index = jQuery(this).index();

            jQuery('.section-media-block').find('.media-block-bg-walp-content').eq($index).addClass('media-zindex');


        }, function () {
            jQuery('.media-block-bg-walp-content').removeClass('media-zindex');
            jQuery(".media-block-bg").removeClass('media-zindex');

        }
    );


}

//
//  Parthers Carousel
//
function PartnersCarousel() {

    jQuery('.partners-carousel').slick({
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 4,
        dots: false,
        autoplay: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
}
/*
*   Document
*/

function Accordion() {

    jQuery('.list-docs li').find('.title-accordion').click(function () {
        jQuery(this).next().stop().slideToggle();
        jQuery(this).parent().parent().toggleClass("accordion-open");
    }).next().stop().hide();

}

