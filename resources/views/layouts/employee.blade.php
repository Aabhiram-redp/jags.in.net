<!DOCTYPE html>
<html>
  <head>
    <title>
      Sibin Xavier | JAGS Developer Profile
    </title>
    <link href="{{url('public/efavicon.ico')}}" rel='shortcut icon'>
    <meta content='Frontend Developer, PHP Developer, Freelance Ruby Developer, Experienced Rails Developer, Wordpress Templates, Free Wordpress Themes, Make in India Software Company' name='keywords'>
    <meta content='Sibin Xavier is an Experienced Wordpress, PHP and Rails Developer. He has 3 Year Experience in Frontend Development which includes HTML, CSS, Javascript, Angular JS, Backbone and Node JS' name='description'>
    <meta content='Sibin Xavier' name='author'>
    <meta content='width=device-width,initial-scale=1' name='viewport'>
    <link href="{{url('public/css/employee.min.css')}}" rel='stylesheet' type='text/css'>
    <link href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
    @yield('extra_css')
  </head>
  <body>
    @yield('content')
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js' type='text/javascript'></script>
    <script src="{{url('public/js/lib/bootstrap.min.js')}}" type='text/javascript'></script>
    @yield('extra_js')
    <script src="{{url('public/js/employee/init.min.js')}}" type='text/javascript'></script>
  </body>
</html>
