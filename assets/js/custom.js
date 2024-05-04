(function($) {

    let topBtn = document.querySelector(".top-btn");

    // On Click, Scroll to the page's top, replace 'smooth' with 'instant' if you don't want smooth scrolling
    topBtn.onclick = () => window.scrollTo({
        top: 0,
        behavior: "smooth"
    });

    // On scroll, Show/Hide the btn with animation
    window.onscroll = () => topBtn.style.opacity = window.scrollY > 500 ? 1 : 0;
    // On scroll, Show/Hide the btn with animation
    new WOW().init();

    //Header
    var fixed_top = $("header");
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 200) {
            fixed_top.addClass("header--fixed animated fadeInDown");
        } else {
            fixed_top.removeClass("header--fixed animated fadeInDown");
        }
    });

    //close mobile menu after clicking nav-link
    $(".nav-link").click(function() {
        $(".navbar-toggler").addClass("collapsed");
    });
    $(".nav-link").click(function() {
        $(".navbar-collapse").removeClass("show");
    });

    /*------isotope------*/
    // external js: isotope.pkgd.js

    // init Isotope
    var $grid = $('.grid').isotope({
        itemSelector: '.element-item',
        layoutMode: 'fitRows'
    });
    // filter functions
    var filterFns = {
        // show if number is greater than 50
        numberGreaterThan50: function() {
            var number = $(this).find('.number').text();
            return parseInt(number, 10) > 50;
        },
        // show if name ends with -ium
        ium: function() {
            var name = $(this).find('.name').text();
            return name.match(/ium$/);
        }
    };
    // bind filter button click
    $('.filters-button-group').on('click', 'button', function() {
        var filterValue = $(this).attr('data-filter');
        // use filterFn if matches value
        filterValue = filterFns[filterValue] || filterValue;
        $grid.isotope({
            filter: filterValue
        });
    });
    // change is-checked class on buttons
    $('.button-group').each(function(i, buttonGroup) {
        var $buttonGroup = $(buttonGroup);
        $buttonGroup.on('click', 'button', function() {
            $buttonGroup.find('.is-checked').removeClass('is-checked');
            $(this).addClass('is-checked');
        });
    });
    /*-----isotope-------*/

    //------------>>Magnificpopup<<----------------
    $('.g-img').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    $('.play').magnificPopup({
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                '</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button

            patterns: {
                youtube: {
                    index: 'youtube.com/', // String that detects type of video (in this case YouTube). Simply via url.indexOf(index).

                    id: 'v=', // String that splits URL in a two parts, second part should be %id%
                    // Or null - full URL will be returned
                    // Or a function that should return %id%, for example:
                    // id: function(url) { return 'parsed id'; }

                    src: 'https://www.youtube.com/embed/%id%?autoplay=1' // URL that will be set as a source for iframe.
                },
                vimeo: {
                    index: 'vimeo.com/',
                    id: '/',
                    src: '//player.vimeo.com/video/%id%?autoplay=1'
                },
                gmaps: {
                    index: '//maps.google.',
                    src: '%id%&output=embed'
                }

                // you may add here more sources

            },

            srcAction: 'iframe_src', // Templating object key. First part defines CSS selector, second attribute. "iframe_src" means: find "iframe" and set attribute "src".
        }
    });
    //------------>>Magnificpopup<<----------------

    /*-------- swiper--------*/
    var swiper = new Swiper(".mySwiperone", {
        autoplay: true,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            dynamicBullets: true,
        },
    });
    /*-------- swiper--------*/

    // ajax contact form
    $(function() {
        var form = $('#contact-form');
        var formMessages = $('.form-message');
        $(form).submit(function(e) {
            e.preventDefault();
            var formData = $(form).serialize();
            $.ajax({
                    type: 'POST',
                    url: $(form).attr('action'),
                    data: formData
                })
                .done(function(response) {
                    $(formMessages).removeClass('error');
                    $(formMessages).addClass('success');
                    $(formMessages).text(response);
                    $('#contact-form input, #contact-form textarea').val('');
                })
                .fail(function(data) {
                    $(formMessages).removeClass('success');
                    $(formMessages).addClass('error');
                    if (data.responseText !== '') {
                        $(formMessages).text(data.responseText);
                    } else {
                        $(formMessages).text('Oops! An error occured and your message could not be sent.');
                    }
                });
        });
    });

})(jQuery);