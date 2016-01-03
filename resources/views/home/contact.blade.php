@extends('layouts.home')
@section('content')
<section class='contact-page'>
  <div class='container'>
    <div class='contact-inner'>
      <div class='row'>
        <div class='col-xs-12'>
          @if (session('message'))
          <div class='alert alert-success'>
            {{session('message')}}
            <button aria-label='Close' class='close' data-dismiss='alert' type='button'>
              <span aria-hidden='true'>
                &times;
              </span>
            </button>
          </div>
          @endif
        </div>
      </div>
      <div class='row'>
        <div class='col-xs-12'>
          <h1 class='text-center'>Contact Us</h1>
          <hr>
          <div class='contact-about'>
            <article>
              <b>@ Jags</b>
              we are always ready to help you, If you have any small, medium, personal web applications, feel free
              to send us an email. You can use below contact form to send message. We will reply within 24 Hours
            </article>
          </div>
          <div class='contact-form-section'>
            <div class='row'>
              <div class='col-xs-12 col-sm-6'>
                <h3>We provide service for</h3>
                <hr>
                  <ul class='nav nav-stacked'>
                    <li>
                      <h4>Personal website in Wordpress, Drupal, Laravel</h4>
                    </li>
                    <li>
                      <h4>Portfolio websites in Laravel, FuelPHP</h4>
                    </li>
                    <li>
                      <h4>Frontend works in Angular, React, Backbone and many</h4>
                    </li>
                    <li>
                      <h4>Wordpress, Drupal templates</h4>
                    </li>
                    <li>
                      <h4>E-commerce applications (small and medium)</h4>
                    </li>
                    <li>
                      <h4>Other small and medium web applications</h4>
                    </li>
                    <li>
                      <h4>Custom HTML Templates</h4>
                    </li>
                    <li>
                      <h4>Email templates with ink</h4>
                    </li>
                  </ul>
                </hr>
              </div>
              <div class='col-xs-12 col-sm-6 contact-form-wrapper'>
                <h3>Send your message</h3>
                <hr>
                <form action="{{action('HomeController@post_contact')}}" method='post'>
                  <input name='_token' type='hidden' value='{!!csrf_token()!!}'>
                  <div class='form-group'>
                    <label>Name</label>
                    <input class='form-control' name='name' placeholder='Please enter your Name'>
                  </div>
                  <div class='form-group'>
                    <label>Email</label>
                    <input class='form-control' name='email' placeholder='Please enter your Email Address'>
                  </div>
                  <div class='form-group'>
                    <label>Phone</label>
                    <input class='form-control' name='phone' placeholder='Please enter your Phone Number'>
                  </div>
                  <div class='form-group'>
                    <label>Message</label>
                    <textarea class='form-control' name='message' placeholder='Please enter your Message' rows='6'></textarea>
                  </div>
                  <div class='form-group text-right'>
                    <button class='btn btn-primary btn-md'>
                      <span class='glyphicon glyphicon-send'></span>
                      <b>SEND</b>
                    </button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop
