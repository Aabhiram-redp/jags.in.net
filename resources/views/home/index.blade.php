@extends('layouts.home')
@section('content')
<div class="home main-home">
  <div class="home-wrapper" id="home-landing" style="background-image: url({{asset('images/background.jpg')}})">
    <!-- <div class="home-video-wrapper">
      <video  autoplay loop poster="{{asset('images/website-bg-1.png')}}">
        <source src="{{asset('video/imac-design.mp4')}}"  type="video/mp4">
      </video> 
    </div>-->
    <div class="home-main-black-wrapper">
    </div>
    <div class="home-main-wrapper">
      <div class="home-content">
        <div class="home-content-inner">
          <div class="home-slider-content">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-6">
                <h1 class="">Web Design & Development</h1>
                <article class="" >
                  Jags is a software development company located at the bank of holy river Periyar, East Cheranaloor, Kerala, South India. We call our
                  self as a bedroom company, We all work from our home and we don't have any office or anyother setups. We are expertised in Rails,
                  PHP, Wordpress and Frontend Development. If you are looking for a cheap but quality small/medium projects, send us your queries.
                </article>
                <article class="margin-top-30">
                  <button class="btn btn-lg btn-primary text-uppercase" name="button">
                    Get Quotes
                  </button>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Section 2  , Featured -->
    @include('home.index._featured')
  <!-- End Section 2, Featured -->
  <!-- Our Features -->
    @include('home.index._feature')
  <!-- End Our Features -->
  <!-- Our Portfolio section -->
    @include ('home.index._portfolio')
  <!-- End Portfolio section -->
  <!-- Testimonials section -->
    @include('home.index._testimonials')
  <!-- End Testimonials section -->
  <!-- Extra section -->
    @include('home.index._extras')
  <!-- End Extra section -->
  <!-- Service section -->
    @include('home.index._service')
  <!-- End Service section -->
</div>
@stop
@section('extra_css')
@stop
@section('extra_js')
  <script type="text/javascript" src="{{asset('js/lib/slick.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/lib/parallax.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/components/testimonials_slider.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/lib/isotope.pkgd.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('js/lib/masonry-horizontal.js')}}"></script>
  <script type="text/javascript">
      $(window).load(function(){
            $('.portfolios').isotope({
                itemSelector: '.single-portfolio',
                percentPosition: true,
                masonry:{
                    columnWidth: 0
                }
            })
      })
  </script>
@stop
