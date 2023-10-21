document.addEventListener('DOMContentLoaded', function () {

  const menuMobile = document.querySelector('.menu-mobile');
  const headerMenu = document.querySelector('.header-menu');
  const menuMobile1ham = document.querySelector('.menu-mobile1 .ham');
  const menuMobile1 = document.querySelector('.menu-mobile1');
  const menuArrows = document.querySelectorAll('.menu-arrow');


  menuMobile.addEventListener('click', function () {
    headerMenu.classList.add('active');
    menuMobile1ham.classList.add('active');
  });
  menuMobile1.addEventListener('click', function () {
    headerMenu.classList.remove('active');
    menuMobile1ham.classList.remove('active');
  });

  menuArrows.forEach(menuArrow => {
    menuArrow.addEventListener('click', () => {
      const subMenu = menuArrow.nextElementSibling;

      if (subMenu && subMenu.classList.contains('sub-menu')) {
        subMenu.classList.toggle('active');
      }
    });
  });
});



// Init AOS
function aos_init() {
  AOS.init({
    duration: 500,
    easing: "ease-in-out",
    once: true,
    disable: function () {
      var maxWidth = 1000;
      return window.innerWidth < maxWidth;
    }
  });
}
jQuery(window).on('load', function () {
  aos_init();
});


// Single Article

function handleScroll() {
  var sections = document.querySelectorAll('.single-page--description--mid--first-section');
  var navLinks = document.querySelectorAll('.single-page--description-left ul li a');

  sections.forEach(function (section) {
    var rect = section.getBoundingClientRect();
    if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
      var sectionId = section.getAttribute('id');
      navLinks.forEach(function (link) {
        link.parentElement.classList.remove('active');
        if (link.getAttribute('href') === '#' + sectionId) {
          link.parentElement.classList.add('active');
        }
      });
    }
  });
}


// sticky header
jQuery(document).ready(function ($) {
  var headerHeight = $(".site-header").outerHeight(); // Get the header's height
  var barHeight = $("#wpadminbar").outerHeight(); // Get the header's height

  $("body").css("margin-top", headerHeight + "px");

  var lastScrollTop = 0; // Set the scroll threshold
  if ($("body").hasClass("logged-in")) {
    // Do something if the body has the 'logged-in' class
    $(".header-wrap").css("top", barHeight + "px");

  } else {
    // Do something else if the body doesn't have the 'logged-in' class
    $(".header-wrap").css("top", "0px");
  }

  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();

    if (scrollTop > lastScrollTop) {

      $(".header-wrap").css("top", -1 * headerHeight + "px");

    } else {
      if ($("body").hasClass("logged-in")) {
        // Do something if the body has the 'logged-in' class
        $(".header-wrap").css("top", barHeight + "px");
        $(".header-wrap").css("border-bottom", "0.5px solid #f80");
      } else {
        // Do something else if the body doesn't have the 'logged-in' class
        $(".header-wrap").css("top", '0' + "px");
        $(".header-wrap").css("border-bottom", "0.5px solid #f80");
      }
    }
    lastScrollTop = scrollTop;

  });
});

// single articles sidebar
function handleScroll() {
    var sections = document.querySelectorAll('.single-page--description--mid--first-section');
    var navLinks = document.querySelectorAll('ul li a');

    sections.forEach(function(section) {
      var rect = section.getBoundingClientRect();
      if (rect.top >= 0 && rect.bottom <= window.innerHeight) {
        var sectionId = section.getAttribute('id');
        navLinks.forEach(function(link)
 {
          link.parentElement.classList.remove('active');
          if (link.getAttribute('href') === '#' + sectionId) {
            link.parentElement.classList.add('active');
          }
        });
      }
    });
  }

  // Attach the scroll event handler
  window.addEventListener('scroll', handleScroll);