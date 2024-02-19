$(document).ready(function () {
  $(".destination-slider").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: true,
    prevArrow:
      '<span class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="none"><path d="M14.9358 18.5363L13.1683 20.3038L7.86328 15L13.167 9.69629L14.9345 11.465L12.6508 13.75L22.072 13.75L22.072 16.25L12.6508 16.25L14.9358 18.5363Z" fill="var(--primary)"/><path fill-rule="evenodd" clip-rule="evenodd" d="M5.2775 24.7225C-0.0924991 19.3525 -0.0924994 10.6475 5.2775 5.2775C10.6475 -0.0925003 19.3525 -0.0925006 24.7225 5.2775C30.0925 10.6475 30.0925 19.3525 24.7225 24.7225C19.3525 30.0925 10.6475 30.0925 5.2775 24.7225ZM7.045 22.955C4.9352 20.8452 3.74993 17.9837 3.74993 15C3.74993 12.0163 4.9352 9.1548 7.045 7.045C9.1548 4.9352 12.0163 3.74993 15 3.74993C17.9837 3.74993 20.8452 4.9352 22.955 7.045C25.0648 9.1548 26.2501 12.0163 26.2501 15C26.2501 17.9837 25.0648 20.8452 22.955 22.955C20.8452 25.0648 17.9837 26.2501 15 26.2501C12.0163 26.2501 9.1548 25.0648 7.045 22.955Z" fill="var(--primary)"/></svg></span>',
    nextArrow:
      '<span class="slick-next"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" fill="none"><path d="M15.0642 18.5362L16.8317 20.3037L22.1367 15L16.833 9.69623L15.0655 11.465L17.3492 13.75L7.92797 13.75L7.92797 16.25L17.3492 16.25L15.0642 18.5362Z" fill="var(--primary)"/><path fill-rule="evenodd" clip-rule="evenodd" d="M24.7225 24.7225C30.0925 19.3525 30.0925 10.6475 24.7225 5.2775C19.3525 -0.0925003 10.6475 -0.0925006 5.2775 5.2775C-0.0925011 10.6475 -0.0925015 19.3525 5.2775 24.7225C10.6475 30.0925 19.3525 30.0925 24.7225 24.7225ZM22.955 22.955C25.0648 20.8452 26.2501 17.9837 26.2501 15C26.2501 12.0163 25.0648 9.1548 22.955 7.045C20.8452 4.9352 17.9837 3.74993 15 3.74993C12.0163 3.74993 9.1548 4.9352 7.045 7.045C4.9352 9.1548 3.74993 12.0163 3.74993 15C3.74993 17.9837 4.9352 20.8452 7.045 22.955C9.1548 25.0648 12.0163 26.2501 15 26.2501C17.9837 26.2501 20.8452 25.0648 22.955 22.955Z" fill="var(--primary)"/></svg></span>',
    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 2,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 480,
        settings: {
          centerMode: true,
          centerPadding: "40px",
          slidesToShow: 1,
        },
      },
    ],
  });
  $(".details-img-slider").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    prevArrow:
      '<span class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="none"><path d="M14.9358 18.5363L13.1683 20.3038L7.86328 15L13.167 9.69629L14.9345 11.465L12.6508 13.75L22.072 13.75L22.072 16.25L12.6508 16.25L14.9358 18.5363Z" fill="var(--primary)"/><path fill-rule="evenodd" clip-rule="evenodd" d="M5.2775 24.7225C-0.0924991 19.3525 -0.0924994 10.6475 5.2775 5.2775C10.6475 -0.0925003 19.3525 -0.0925006 24.7225 5.2775C30.0925 10.6475 30.0925 19.3525 24.7225 24.7225C19.3525 30.0925 10.6475 30.0925 5.2775 24.7225ZM7.045 22.955C4.9352 20.8452 3.74993 17.9837 3.74993 15C3.74993 12.0163 4.9352 9.1548 7.045 7.045C9.1548 4.9352 12.0163 3.74993 15 3.74993C17.9837 3.74993 20.8452 4.9352 22.955 7.045C25.0648 9.1548 26.2501 12.0163 26.2501 15C26.2501 17.9837 25.0648 20.8452 22.955 22.955C20.8452 25.0648 17.9837 26.2501 15 26.2501C12.0163 26.2501 9.1548 25.0648 7.045 22.955Z" fill="var(--primary)"/></svg></span>',
    nextArrow:
      '<span class="slick-next"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" fill="none"><path d="M15.0642 18.5362L16.8317 20.3037L22.1367 15L16.833 9.69623L15.0655 11.465L17.3492 13.75L7.92797 13.75L7.92797 16.25L17.3492 16.25L15.0642 18.5362Z" fill="var(--primary)"/><path fill-rule="evenodd" clip-rule="evenodd" d="M24.7225 24.7225C30.0925 19.3525 30.0925 10.6475 24.7225 5.2775C19.3525 -0.0925003 10.6475 -0.0925006 5.2775 5.2775C-0.0925011 10.6475 -0.0925015 19.3525 5.2775 24.7225C10.6475 30.0925 19.3525 30.0925 24.7225 24.7225ZM22.955 22.955C25.0648 20.8452 26.2501 17.9837 26.2501 15C26.2501 12.0163 25.0648 9.1548 22.955 7.045C20.8452 4.9352 17.9837 3.74993 15 3.74993C12.0163 3.74993 9.1548 4.9352 7.045 7.045C4.9352 9.1548 3.74993 12.0163 3.74993 15C3.74993 17.9837 4.9352 20.8452 7.045 22.955C9.1548 25.0648 12.0163 26.2501 15 26.2501C17.9837 26.2501 20.8452 25.0648 22.955 22.955Z" fill="var(--primary)"/></svg></span>',
  });
  $(".testimonials-slider").slick({
    dots: false,
    infinite: false,
    speed: 300,
    centerMode: true,
    slidesToScroll: 1,
    arrows: true,
    prevArrow:
      '<span class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 41" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.8305 18.8313C13.5182 19.144 13.3428 19.5679 13.343 20.0099C13.3432 20.4518 13.5188 20.8756 13.8314 21.188L23.2632 30.6129C23.417 30.772 23.601 30.8989 23.8044 30.9862C24.0077 31.0734 24.2265 31.1193 24.4478 31.1212C24.6691 31.123 24.8885 31.0808 25.0933 30.9969C25.2981 30.913 25.4841 30.7892 25.6406 30.6326C25.797 30.4761 25.9207 30.29 26.0044 30.0851C26.0881 29.8802 26.1302 29.6608 26.1282 29.4395C26.1262 29.2182 26.0802 28.9995 25.9927 28.7962C25.9053 28.5929 25.7783 28.409 25.619 28.2553L17.366 20.0084L25.6129 11.7553C25.9164 11.4409 26.0842 11.0198 26.0803 10.5828C26.0763 10.1458 25.9009 9.72786 25.5917 9.41896C25.2826 9.11006 24.8645 8.93493 24.4275 8.93129C23.9905 8.92766 23.5696 9.09581 23.2554 9.39952L13.8305 18.8313Z" fill="var(--primary)"/></svg></span>',
    nextArrow:
      '<span class="slick-next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 41 41" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M26.1851 18.8313C26.4974 19.144 26.6728 19.5679 26.6726 20.0099C26.6725 20.4518 26.4968 20.8756 26.1842 21.188L16.7524 30.6129C16.5986 30.772 16.4146 30.8989 16.2113 30.9862C16.0079 31.0734 15.7892 31.1193 15.5679 31.1212C15.3466 31.123 15.1271 31.0808 14.9223 30.9969C14.7175 30.913 14.5315 30.7892 14.3751 30.6326C14.2186 30.4761 14.0949 30.29 14.0112 30.0851C13.9275 29.8802 13.8854 29.6608 13.8874 29.4395C13.8894 29.2182 13.9355 28.9995 14.0229 28.7962C14.1103 28.5929 14.2374 28.409 14.3966 28.2553L22.6497 20.0084L14.4027 11.7553C14.0992 11.4409 13.9314 11.0198 13.9354 10.5828C13.9393 10.1458 14.1147 9.72786 14.4239 9.41896C14.733 9.11006 15.1511 8.93493 15.5881 8.93129C16.0251 8.92766 16.446 9.09581 16.7602 9.39952L26.1851 18.8313Z" fill="var(--primary)"/></svg></span>',
    responsive: [
      {
        breakpoint: 576,
        settings: {
          centerMode: false,
          slidesToShow: 1,
        },
      },
    ],
  });
  $(".teams-slider").slick({
    dots: false,
    infinite: false,
    speed: 300,
    slidesToShow: 6,
    slidesToScroll: 1,
    arrows: true,
    prevArrow:
      '<span class="slick-prev"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30" fill="none"><path d="M14.9358 18.5363L13.1683 20.3038L7.86328 15L13.167 9.69629L14.9345 11.465L12.6508 13.75L22.072 13.75L22.072 16.25L12.6508 16.25L14.9358 18.5363Z" fill="var(--primary)"/><path fill-rule="evenodd" clip-rule="evenodd" d="M5.2775 24.7225C-0.0924991 19.3525 -0.0924994 10.6475 5.2775 5.2775C10.6475 -0.0925003 19.3525 -0.0925006 24.7225 5.2775C30.0925 10.6475 30.0925 19.3525 24.7225 24.7225C19.3525 30.0925 10.6475 30.0925 5.2775 24.7225ZM7.045 22.955C4.9352 20.8452 3.74993 17.9837 3.74993 15C3.74993 12.0163 4.9352 9.1548 7.045 7.045C9.1548 4.9352 12.0163 3.74993 15 3.74993C17.9837 3.74993 20.8452 4.9352 22.955 7.045C25.0648 9.1548 26.2501 12.0163 26.2501 15C26.2501 17.9837 25.0648 20.8452 22.955 22.955C20.8452 25.0648 17.9837 26.2501 15 26.2501C12.0163 26.2501 9.1548 25.0648 7.045 22.955Z" fill="var(--primary)"/></svg></span>',
    nextArrow:
      '<span class="slick-next"><svg xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 30 30" fill="none"><path d="M15.0642 18.5362L16.8317 20.3037L22.1367 15L16.833 9.69623L15.0655 11.465L17.3492 13.75L7.92797 13.75L7.92797 16.25L17.3492 16.25L15.0642 18.5362Z" fill="var(--primary)"/><path fill-rule="evenodd" clip-rule="evenodd" d="M24.7225 24.7225C30.0925 19.3525 30.0925 10.6475 24.7225 5.2775C19.3525 -0.0925003 10.6475 -0.0925006 5.2775 5.2775C-0.0925011 10.6475 -0.0925015 19.3525 5.2775 24.7225C10.6475 30.0925 19.3525 30.0925 24.7225 24.7225ZM22.955 22.955C25.0648 20.8452 26.2501 17.9837 26.2501 15C26.2501 12.0163 25.0648 9.1548 22.955 7.045C20.8452 4.9352 17.9837 3.74993 15 3.74993C12.0163 3.74993 9.1548 4.9352 7.045 7.045C4.9352 9.1548 3.74993 12.0163 3.74993 15C3.74993 17.9837 4.9352 20.8452 7.045 22.955C9.1548 25.0648 12.0163 26.2501 15 26.2501C17.9837 26.2501 20.8452 25.0648 22.955 22.955Z" fill="var(--primary)"/></svg></span>',

    responsive: [
      {
        breakpoint: 992,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 2,
        },
      },
    ],
  });

  $("#regionDropdown").on("click", function () {
    $(this).siblings(".dropdown-menu").toggleClass("show");
  });
  $("#activitiesDropdown").on("click", function () {
    $(this).siblings(".dropdown-menu").toggleClass("show");
  });
  $("#budgetDropdown").on("click", function () {
    $(this).siblings(".dropdown-menu").toggleClass("show");
  });

  //dropdwon menu for pc view and mobile view
  var isPc = window.matchMedia("only screen and (min-width: 992px)").matches;
  if (isPc) {
    $("#navbar .nav-link.dropdown-toggle").click(function () {
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
    var clicks = {}; // Object to store click counts for each dropdown
    var timers = {}; // Object to store timers for each dropdown

    $(".navbar-nav .nav-item .dropdown-toggle").on("click", function (event) {
      var $dropdownToggle = $(this);
      var $dropdownMenu = $dropdownToggle.next(".dropdown-menu");

      var dropdownId = $dropdownToggle.attr("id");

      $(".navbar-nav .nav-item .dropdown-menu")
        .not($dropdownMenu)
        .each(function () {
          if ($(this).hasClass("show")) {
            $(this).removeClass("show");
          }
        });

      // Initialize click count for the dropdown if not already initialized
      if (!clicks[dropdownId]) {
        clicks[dropdownId] = 0;
      }

      clicks[dropdownId]++; // Increment click count for this dropdown

      if (clicks[dropdownId] === 2) {
        var location = $dropdownToggle.attr("href");
        window.location.href = location;
        clicks[dropdownId] = 0; // Reset click count after redirection
      } else {
        if (timers[dropdownId]) {
          clearTimeout(timers[dropdownId]);
        }
        timers[dropdownId] = setTimeout(function () {
          clicks[dropdownId] = 0;
        }, delay);
      }

      event.preventDefault(); // Prevent default link behavior only for .dropdown-toggle
      event.stopPropagation(); // Stop event propagation to prevent it from reaching the document
    });

    $(".navbar-nav .nav-item .dropdown-menu a.dropdown-item").on(
      "click",
      function (event) {
        var dropdownId = $(this)
          .closest(".dropdown")
          .find(".dropdown-toggle")
          .attr("id");
        clicks[dropdownId] = 0;
      }
    );
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

  let navbarMenu = document.querySelector("#navbar .navbar-collapse");
  let closeMenu = document.querySelector("#navbar .navbar-collapse .close");
  let navbarMenuToggler = document.querySelector("#navbar .navbar-toggler");
  console.log(closeMenu);
  $(closeMenu).click(function () {
    $(navbarMenu).toggleClass("show");
    $("body").toggleClass("height-fixed");
    $(".height-fixed-overlay").remove();
  });
  $(navbarMenuToggler).click(function () {
    $("body").toggleClass("height-fixed");
    if ($("body").hasClass("height-fixed")) {
      $(navbarMenu).parent().append('<div class="height-fixed-overlay"></div>');
    } else {
      $(".height-fixed-overlay").remove();
    }
  });
  $(document).on("click", ".height-fixed-overlay", function () {
    $(navbarMenu).toggleClass("show");

    $("body").toggleClass("height-fixed");

    $(".height-fixed-overlay").remove();
  });
  let filterMenu = document.querySelector("#sidebar-filter");
  let filterOpen = document.querySelector("#sidebar-btn");
  let filterClose = document.querySelector("#sidebar-close");
  $(filterOpen).click(function () {
    $("body").toggleClass("height-fixed");
    $(filterMenu).toggleClass("show");
  });
  $(filterClose).click(function () {
    $("body").toggleClass("height-fixed");
    $(filterMenu).toggleClass("show");
  });
});
//dropdown part end
