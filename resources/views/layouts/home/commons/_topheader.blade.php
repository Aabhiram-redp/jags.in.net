<nav class="navbar navbar-default main-header navbar-fixed-top @if($class_name !='home') sticky-header @endif">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed main-navbar-toggle" data-toggle="collapse" aria-expanded="false" data-target="#main-header-menu">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{action('HomeController@index')}}">
                <span class="first">
                    Jags
                </span>
                <span class="second hidden">
                    Jags
                </span>
            </a>
        </div>
        <!-- Collapse the nav links -->
        <div class="collapse navbar-collapse" id="main-header-menu">
            <ul class="pull-right nav navbar-nav">
                <li>
                    <a href="@if($class_name!='home') {{!action('HomeController@index')}}/@endif#home-landing" data-page="same">Home <span class="sr-only"></span> </a>
                </li>
                <li>
                    <a href="@if($class_name!='home') {{!action('HomeController@index')}}/@endif#home-feature" data-page="same">Features</a>
                </li>
                <li>
                    <a href="@if($class_name!='home') {{!action('HomeController@index')}}/@endif#home-portfolio" data-page="same">Portfolio</a>
                </li>
                <li>
                    <a href="@if($class_name!='home') {{!action('HomeController@index')}}/@endif#home-testimonials" data-page="same">Testimonials</a>
                </li>
                <li>
                   <a href="@if($class_name!='home') {{!action('HomeController@index')}}/@endif#home-service" data-page="same">Service</a>
                </li>
                <li class="@if($class_name=='contact') active @endif">
                    <a href="/contact">Contact</a>
                </li>
            </ul>
        </div>

        <!-- End Collapse nav links -->
    </div>
</nav>
