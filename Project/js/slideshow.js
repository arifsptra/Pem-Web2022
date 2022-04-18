// Slideshow for Article
$(document).ready(function () {
  $(".artMain").slick({
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    centerMode: true,
    variableWidth: true,
  });
});

