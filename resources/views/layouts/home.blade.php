<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="{{asset('favicon.ico')}}" rel='shortcut icon'>
  	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Jags | Just Another Game and Software Development Company</title>
    <meta name="keywords" content="Ruby On Rails, Laravel, HTML5, Wordpress, Drupal, CSS3, Javascript, Angular JS"/>
    <meta name="description" content="Jags is one of the best software company in India who focus on modern web technologies">
    <meta name="csrf_token" content="{{ csrf_token() }}">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset('css/main.min.css')}}" media="screen" title="no title" charset="utf-8">
      @yield('extra_css')
    <!-- End Stylesheets -->
  </head>
  <body>
    @include('layouts.home.commons._topheader',['class'=>'class'])
    <div class="clearfix"></div>
    @yield('content')
    <!-- Extra html codes -->
      @yield('extra_html')
    <!-- End Extra html codes -->
    @include('layouts.home.commons._footer')
    <!-- Scripts -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script type="text/javascript" src="{{asset('js/lib/bootstrap.min.js')}}"></script>

      @yield('extra_js')
      <script type="text/javascript" src="{{asset('js/init/init.min.js')}}"></script>
    <!-- End Scripts -->
  </body>
</html>