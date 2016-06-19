@extends('layouts.home')
@section('content')
<section class='about-page'>
  <div class='container'>
    <div class='about-inner'>
      <div class='row'>
        <div class='col-xs-12'>
          <!-- Section About company -->
          <h2 class='about-title text-center page-title'>About Us</h2>
          <hr>
          <div class='row'>
            <div class='col-xs-12 col-sm-12'>
              <div class='about-company'>
                <div class='row'>
                  <div class='col-xs-12 col-sm-6'>
                    <div class='we-dream'>
                      <img alt='Our dreams' class='img-responsive' src="{{asset('images/we-dream.jpg')}}">
                    </div>
                  </div>
                  <div class='col-xs-12 col-sm-6'>
                    <article>
                      <b>We</b>
                      started our journey in 2010 with '7chip;, 7chip is a technology blog to share news, tips for windows
                      and Linux. We continue 7chip for a long time, at that time we have almost 20k Facebook fans from various
                      part of the world. After 2014 we had decided to move Web development/design field while we keeping our blog
                      active. We had completed many computer courses to fuel life. Currently we take Projects/ Tasks from
                      Freelancer website.
                    </article>
                    <article>
                      <b>We are a</b>
                      <b>
                        <i>Bed room</i>
                      </b>
                      company, we haven't any office or anything, we use our bedrooms as our office. We have a
                      hard working mind to lead our clients to success. Our success stories can found in
                      freelancer website
                    </article>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- eof section about -->
          <!-- eof Section work -->
        </div>
      </div>
      <div class='row'>
        <div class='col-xs-12'>
          <div class='team-section'>
            <!-- Section team -->
            <h2 class='team-title'>Team</h2>
            <div class='clearfix'></div>
            <div class='team-members'>
              <div class='row'>
                <div class='col-sm-6 col-md-4'>
                  <div class='thumbnail'>
                    <img alt='Sibin Xavier' class='full-width-image' src="{{asset('images/employees/jags-sibin-xavier.jpg')}}">
                    <div class='caption'>
                      <h3 class='name-title'>
                        <?php  $url_param = ['name' => 'sibin']?>
                        <a href="{{action('EmployeeController@profile',$url_param)}}">
                          Sibin Xavier
                        </a>
                      </h3>
                      <p>
                        Sibin Xavier is CEO and Founder of Jags. He hold a bachelor degree
                        in Electronics and Communication along with a couple of
                        Computer courses. He is a Full stack developer with more experience in
                        Frontend development.
                      </p>
                      <hr>
                      <ul class='position'>
                        <li>Founder</li>
                        <li>CEO</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- eof section team -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
