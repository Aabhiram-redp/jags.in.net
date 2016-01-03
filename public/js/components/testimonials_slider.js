(function() {
  var testimonials;

  window.JAGS = window.JAGS || {};

  JAGS.testimonials = (function() {
    function testimonials() {
      this.testimonialElement = $('.testimonial-customer');
      this.testimonialCompany = $('.clients-slick-slider');
      this.testimonialElement.slick({
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        infinite: true,
        prevArrow: '.testimonial-customer-profile .prev-link',
        nextArrow: '.testimonial-customer-profile .next-link'
      });
      this.testimonialCompany.slick({
        slidesToShow: 4,
        centerMode: true,
        adaptiveHeight: true
      });
    }

    return testimonials;

  })();

  testimonials = new JAGS.testimonials;

}).call(this);
