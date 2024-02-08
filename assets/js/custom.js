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
    $('.testimonials-slider').slick({
        dots: false,
        infinite: false,
        speed: 300, centerMode: true,
        slidesToScroll: 1,
        arrows: true,
        prevArrow: '<img class="slick-prev" src="./assets/images/svg/arrow-2.svg">',
        nextArrow: '<img class="slick-next" src="./assets/images/svg/arrow-2.svg">'
    });

    $('#regionDropdown').click(function() {
        $(this).siblings('.dropdown-menu').toggleClass('show');
    });
    $('#activitiesDropdown').click(function() {
        $(this).siblings('.dropdown-menu').toggleClass('show');
    });
    $('#budgetDropdown').click(function() {
        $(this).siblings('.dropdown-menu').toggleClass('show');
    });
});