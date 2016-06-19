@extends('layouts.employee')
@section('extra_css')
@stop
@section('content')
<div class='employee'>
  <div class='employee-landing'>
    <h1 class='title'>
      Sibin Xavier
    </h1>
    <h2 class='profession'>
      Designer + Developer
    </h2>
    <div class='employee-social'>
      <ul>
        <li>
          <a href='https://www.facebook.com/sibinx7' target='blank'>
            <span class='fa fa-facebook'></span>
          </a>
        </li>
        <li>
          <a href='https://twitter.com/7chipcom' target='blank'>
            <span class='fa fa-twitter'></span>
          </a>
        </li>
        <li>
          <a href='https://plus.google.com/u/0/+sibinxavier' target='blank'>
            <span class='fa fa-google-plus'></span>
          </a>
        </li>
        <li>
          <a href='https://github.com/sibinx7' target='blank'>
            <span class='fa fa-github'></span>
          </a>
        </li>
        <li>
          <a href='https://in.linkedin.com/pub/sibin-xavier/29/55/135' target='blank'>
            <span class='fa fa-linkedin'></span>
          </a>
        </li>
        <li>
          <a href='https://www.youtube.com/user/sibin7771' target='blank'>
            <span class='fa fa-youtube'></span>
          </a>
        </li>
        <li>
          <a href='https://www.freelancer.com/u/sibinx7.html'>
            <span class='fa fa-user'></span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<div class='employee-header' id='employee-header'>
  <nav class='navbar navbar-default home-navbar'>
    <div class='container'>
      <div class='navbar-header'>
        <button aria-expanded='false' class='navbar-toggle collapsed' data-target='#home-menu' data-toggle='collapse' type='button'>
          <span class='sr-only'>Toggle Navigation</span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
          <span class='icon-bar'></span>
        </button>
        <a class='navbar-brand home-navbar-brand' href='#'>
          Sibin Xavier
        </a>
      </div>
      <div class='navbar-collapse collapse home-main-menu' id='home-menu'>
        <ul class='nav navbar-nav navbar-right'>
          <li>
            <a href='#'>
              Home
            </a>
          </li>
          <li>
            <a href='#'>
              About
            </a>
          </li>
          <li>
            <a href='#'>
              Resume
            </a>
          </li>
          <li>
            <a href='#'>
              Skills
            </a>
          </li>
          <li>
            <a href='#'>
              Work
            </a>
          </li>
          <li>
            <a href='#'>
              Pricing
            </a>
          </li>
          <li>
            <a href='#'>
              Blog
            </a>
          </li>
          <li>
            <a href='#'>
              Client
            </a>
          </li>
          <li>
            <a href='#'>
              Contact
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>
<div class='employee-about'>
  <div class='container'>
    <h1 class='text-center page-title section-heading'>
      <span>//</span>
      About me
    </h1>
    <section class='page-content'>
      <div class='self-highlight'>
        My Self, Sibin Xavier, an Electronics and Communication engineer, found Computer and Internet as
        living source. Frontend Developer, PHP,Java, Ruby On Rails Developer. A Tech blogger, like to spread
        new technologies, tech tips through my blog.
      </div>
      <div class='self-description'>
        I'm a self-taught designer with just over 2 years of UX/UI design and front-end coding
        experience. I have a minimalist design style and believe that simple user experiences
        are both powerful and meaningful. I like to use modern technologies and tools to make my profession
        funny and interesting. I always open my mind to learn newbies as soon as possible.
        Beside this I'm a PHP Developer, Ruby On Rails Developer,
        I like Javascript, and it's countless frameworks. I'm a rigid fan of Windows operating system,
        Hitman games & James Bind movies.
      </div>
    </section>
  </div>
</div>
<div class='employee-details'>
  <div class='container'>
    <secion class='my-details'>
      <div class='row'>
        <div class='col-xs-12 col-sm-4 col-md-4'>
          <div class='my-profile profile-image'>
            <img class='full-width-image' src="{{asset('images/employees/jags-sibin-xavier.jpg')}}">
          </div>
        </div>
        <div class='col-xs-12 col-sm-4 col-md-4'>
          <div class='my-profile contact-details'>
            <table>
              <tr>
                <td>
                  <span class='fa fa-child'></span>
                  Birthdate
                </td>
                <td>27/ 02 / 1991</td>
              </tr>
              <tr>
                <td>
                  <span class='fa fa-phone'></span>
                  Phone
                </td>
                <td>8943648198, 8281604078</td>
              </tr>
              <tr>
                <td>
                  <span class='fa fa-inbox'></span>
                  Email
                </td>
                <td>sibinx7@gmail.com, sibinx7@outlook.com</td>
              </tr>
              <tr>
                <td>
                  <span class='fa fa-globe'></span>
                  Website
                </td>
                <td>jags</td>
              </tr>
              <tr>
                <td>
                  <span class='fa fa-map-marker'></span>
                  Address
                </td>
                <td>
                  <p>
                    Thottankara House
                  </p>
                  <p>
                    East Cheranalloor, Koovappady
                  </p>
                  <p>
                    Perumbavoor, Ernakulam
                  </p>
                  <p>
                    PIN 683544
                  </p>
                </td>
              </tr>
              <tr>
                <td>
                  <span class='fa fa-skype'></span>
                  Skype
                </td>
                <td>sibin.xavier1</td>
              </tr>
            </table>
          </div>
          <div class='clearfix'></div>
          <div class='download-resume text-center'>
            <a class='btn btn-lg btn-download btn-resume' href='#'>
              <span class='fa fa-download'></span>
              Download Resume
            </a>
          </div>
        </div>
        <div class='col-xs-12 col-sm-4 col-md-4'>
          <div class='my-profile hobbies'>
            <h3 class='title'>
              Hobbies and Interests
            </h3>
            <div class='my-hobbies'>
              <ul>
                <li>
                  <a href=''>
                    <span class='fa fa-bed'></span>
                  </a>
                </li>
                <li>
                  <a href=''>
                    <span class='fa fa-motorcycle'></span>
                  </a>
                </li>
                <li>
                  <a href=''>
                    <span class='fa fa-beer'></span>
                  </a>
                </li>
                <li>
                  <a href=''>
                    <span class='fa fa-binoculars'></span>
                  </a>
                </li>
                <li>
                  <a href=''>
                    <span class='fa fa-cutlery'></span>
                  </a>
                </li>
                <li>
                  <a href=''>
                    <span class='fa fa-gamepad'></span>
                  </a>
                </li>
                <li>
                  <a href=''>
                    <span class='fa fa-users'></span>
                  </a>
                </li>
                <li>
                  <a href=''>
                    <span class='fa fa-money'></span>
                  </a>
                </li>
                <li>
                  <a href=''>
                    <span class='fa fa-film'></span>
                  </a>
                </li>
                <li>
                  <a href=''>
                    <span class='fa fa-female'></span>
                  </a>
                </li>
                <li>
                  <a href=''>
                    <span class='fa fa-camera'></span>
                  </a>
                </li>
                <li>
                  <a href=''>
                    <span class='fa fa-book'></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </secion>
  </div>
</div>
<div class='employee-resume'>
  <div class='container'>
    <section class='my-resume'>
      <h1 class='title text-center section-heading page-title'>
        My Resume
      </h1>
      <div class='row'>
        <div class='col-xs-12'>
          <div class='resume-box'>
            <div class='resume-inner-experience resume-box-inner'>
              <div class='experience-section'>
                <h1 class='page-sub-title highlight text-uppercase'>
                  Experiences
                </h1>
                <div class='experience-icon'>
                  <span class='fa fa-user-secret'></span>
                </div>
              </div>
              <div class='resume-inner'>
                @include('employee._resume')
              </div>
            </div>
            <div class='resume-inner-education resume-box-inner'>
              <div class='experience-section'>
                <h1 class='page-sub-title highlight text-uppercase'>
                  Education
                </h1>
                <div class='experience-icon'>
                  <span class='fa fa-graduation-cap'></span>
                </div>
              </div>
              <div class='resume-inner'>
                @include('employee._education')
              </div>
            </div>
            <div class='resume-stop'>
              <div class='experience-icon'>
                <span class='fa fa-bomb'></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
<div class='employee-quotes'>
  <div class='container'>
    <div class='row'>
      <div class='col-xs-12'>
        <h1 class='title text-center text-uppercase'>
          Inspiring Quotes!!
        </h1>
        <div class='clearfix'></div>
        <div class='quotes-quotes'>
          <section class='quotes-container' id='slick-quotes'>
            <div class='each-quotes'>
              <div class='quote-content'>
                If you are born poor its not your mistake, But if you die poor its your mistake.
              </div>
              <div class='quotes-author'>
                Bill Gates
              </div>
            </div>
            <div class='each-quotes'>
              <div class='quote-content'>
                Stay Hungry Stay Foolish
              </div>
              <div class='quotes-author'>
                Steve Jobs
              </div>
            </div>
            <div class='each-quotes'>
              <div class='quote-content'>
                Start by doing what's necessary; then do what's possible; and suddenly you are doing the impossible.
              </div>
              <div class='quotes-author'>
                Francis of Assisi
              </div>
            </div>
            <div class='each-quotes'>
              <div class='quote-content'>
                Put your heart, mind, and soul into even your smallest acts. This is the secret of success.
              </div>
              <div class='quotes-author'>
                Swami Sivananda
              </div>
            </div>
            <div class='each-quotes'>
              <div class='quote-content'>
                What you do today can improve all your tomorrows.
              </div>
              <div class='quotes-author'>
                Ralph Marston
              </div>
            </div>
          </section>
        </div>
        <div class='quotes-nav'>
          <button class='slick-pvs' id='slick-q-prev'>
            <span class='fa fa-chevron-left'></span>
          </button>
          <button class='slick-nxt' id='slick-q-next'>
            <span class='fa fa-chevron-right'></span>
          </button>
        </div>
      </div>
    </div>
  </div>
</div>
<div class='clearfix'></div>
@include('employee._myservice')
<div class='clearfix'></div>
@include('employee._skills')
<div class='clearfix'></div>
@include('employee._pricing')
<div class='clearfix'></div>
@include('employee._contact')
<div class='clearfix'></div>
@include('employee._footer')
@stop
@section('extra_js')
<script src="{{asset('js/lib/slick.min.js')}}" type='text/javascript'></script>
<script src="{{asset('js/lib/jquery.easypiechart.min.js')}}" type='text/javascript'></script>
@stop
