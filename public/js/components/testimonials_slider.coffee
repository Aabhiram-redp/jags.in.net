# Initiate this when any pages load o this website
window.JAGS = window.JAGS || {}
class JAGS.testimonials
  constructor : ->
    @testimonialElement  = $('.testimonial-customer')
    @testimonialCompany  = $('.clients-slick-slider')
    @testimonialElement.slick
      arrows           : true
      slidesToShow     : 1
      slidesToScroll   : 1
      autoplay         : true
      autoplaySpeed    : 2000
      infinite         : true
      prevArrow        : '.testimonial-customer-profile .prev-link'
      nextArrow        : '.testimonial-customer-profile .next-link'
    @testimonialCompany.slick
      slidesToShow     : 4
      centerMode       : true
      adaptiveHeight   : true
testimonials = new JAGS.testimonials