$(document).ready(function () {
  $(".destination-slider").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: '<img class="slick-prev" src="./assets/images/svg/arrow.svg">',
    nextArrow: '<img class="slick-next" src="./assets/images/svg/arrow.svg">',
  });
  $(".details-img-slider").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: '<img class="slick-prev" src="./assets/images/svg/arrow.svg">',
    nextArrow: '<img class="slick-next" src="./assets/images/svg/arrow.svg">',
  });
  $(".testimonials-slider").slick({
    dots: false,
    infinite: false,
    speed: 300,
    centerMode: true,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: '<img class="slick-prev" src="./assets/images/svg/arrow-2.svg">',
    nextArrow: '<img class="slick-next" src="./assets/images/svg/arrow-2.svg">',
  });
  $(".teams-slider").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: '<img class="slick-prev" src="./assets/images/svg/arrow.svg">',
    nextArrow: '<img class="slick-next" src="./assets/images/svg/arrow.svg">',
  });

  $("#regionDropdown").click(function () {
    $(this).siblings(".dropdown-menu").toggleClass("show");
  });
  $("#activitiesDropdown").click(function () {
    $(this).siblings(".dropdown-menu").toggleClass("show");
  });
  $("#budgetDropdown").click(function () {
    $(this).siblings(".dropdown-menu").toggleClass("show");
  });

  //dropdwon menu for pc view and mobile view
  var isPc = window.matchMedia("only screen and (min-width: 992px)").matches;
  if (isPc) {
    $(".nav-link.dropdown-toggle").click(function () {
      var location = $(this).attr("href");
      window.location.href = location;
      return false;
    });
  }
  var isMobile = window.matchMedia(
    "only screen and (max-width: 991px)"
  ).matches;

  if (isMobile) {
    var delay = 300; // milliseconds
    var clicks = 0;
    var timer = null;

    $(".nav-item .dropdown-toggle").on("click", function (event) {
      clicks++; // Count the number of clicks

      if (clicks === 1) {
        timer = setTimeout(function () {
          // Single click action (show dropdown menu)
          $(this).dropdown("toggle");
          clicks = 0;
        }, delay);
      } else {
        clearTimeout(timer);
        var location = $(this).attr("href");
        window.location.href = location;
        clicks = 0;
      }
      event.preventDefault(); // Prevent default link behavior only for .dropdown-toggle
      event.stopPropagation(); // Stop event propagation to prevent it from reaching the document
    });
    $(".nav-item .dropdown-menu a.dropdown-item").on("click", function (event) {
      clicks = 0;
    });
  }
  $(".select-with-search").select2();

  function handleScroll() {
    var header = document.getElementsByTagName("header")[0]; // Access the first header element
    if (window.scrollY > 200) {
      header.classList.add("sticky");
    } else {
      header.classList.remove("sticky");
    }
  }

  // Add scroll event listener to continuously check scroll position
  window.addEventListener("scroll", handleScroll);

  // Call the handleScroll function initially to set the sticky class if necessary
  handleScroll();
});
//dropdown part end
