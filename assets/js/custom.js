$(document).ready(function () {
    $('.destination-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<img class="slick-prev" src="./assets/images/svg/arrow.svg">',
        nextArrow: '<img class="slick-next" src="./assets/images/svg/arrow.svg">'
    });
    $('.details-img-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<img class="slick-prev" src="./assets/images/svg/arrow.svg">',
        nextArrow: '<img class="slick-next" src="./assets/images/svg/arrow.svg">'
    });
    $('.testimonials-slider').slick({
        dots: false,
        infinite: false,
        speed: 300, centerMode: true,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<img class="slick-prev" src="./assets/images/svg/arrow-2.svg">',
        nextArrow: '<img class="slick-next" src="./assets/images/svg/arrow-2.svg">'
    });

    $('#regionDropdown').click(function () {
        $(this).siblings('.dropdown-menu').toggleClass('show');
    });
    $('#activitiesDropdown').click(function () {
        $(this).siblings('.dropdown-menu').toggleClass('show');
    });
    $('#budgetDropdown').click(function () {
        $(this).siblings('.dropdown-menu').toggleClass('show');
    });

    //dropdwon menu for pc view and mobile view
    var isPc = window.matchMedia("only screen and (min-width: 992px)").matches;
    if (isPc) {
        $('.dropdown-toggle').click(function () {
            var location = $(this).attr('href');
            window.location.href = location;
            return false;
        });
    }
    var isMobile = window.matchMedia("only screen and (max-width: 991px)").matches;

    if (isMobile) {
        var delay = 300; // milliseconds
        var clicks = 0;
        var timer = null;

        $('.dropdown-toggle').on('click', function (event) {
            clicks++;  // Count the number of clicks

            if (clicks === 1) {
                timer = setTimeout(function () {
                    // Single click action (show dropdown menu)
                    $(this).dropdown('toggle');
                    clicks = 0;
                }, delay);
            } else {
                clearTimeout(timer);
                var location = $(this).attr('href');
                window.location.href = location;
                clicks = 0;
            }
            event.preventDefault(); // Prevent default link behavior only for .dropdown-toggle
            event.stopPropagation(); // Stop event propagation to prevent it from reaching the document
        });
        $('.dropdown-menu a.dropdown-item').on('click', function (event) {
            clicks = 0;
        });
    }
    $('.select-with-search').select2();

});
//dropdown part end

