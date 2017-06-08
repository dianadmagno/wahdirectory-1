<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WAH Directory</title>

    <!-- Fonts 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">-->

    <!-- Styles -->
    <link rel="stylesheet" href="/materialize/css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <style>
            .modal { 
                width: 75% !important;
                max-height: 75% !important;
              }
    </style>
</head>
<body >
    <!--
    <nav class="navbar navbar-default navbar-static-top">
        
            <div class="navbar-header">
    id="app-layout"
                Collapsed Hamburger 
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

 
                <a class="navbar-brand" href="#">
                    <strong>WAH Directory</strong>
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">

                <ul class="nav navbar-nav navbar-right">

                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                Hello {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                </ul>
                 <ul class="nav navbar-nav">
                            <li><a href="{{ url('/home') }}">Home</a></li>
                            <li><a href="{{ url('/profile') }}">Wah NGO</a></li>
                            <li><a href="#">Partner Organization</a></li>
                            <li><a href="{{ url('/sites')}}">Sites</a></li>
                 </ul>
                 @endif
            </div>
        </div>
    </nav>
-->

    <!-- Dropdown Structure -->
    <ul id="dropdown1" class="dropdown-content">
        <li><a href="{{ url('/logout') }}"></i>Logout</a></li>
    </ul>

    <nav class="light-blue lighten-1">
      <div class="nav-wrapper container">
        <a href="#!" class="brand-logo" style="font-family: Calibri;">WAH DIRECTORY</a>
        <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">

                @if (Auth::guest())
                    <li><a href="{{ url('/login') }}">Login</a></li>
                    <li><a href="{{ url('/register') }}">Register</a></li>
                @else

              <!-- Dropdown Trigger -->
                <li class="{{ Request::is('home') ? 'active' : '' }}"><a href="{{ url('/home') }}"><i class="material-icons">home</i></a></li>
                <li class="{{ Request::is('profile') ? 'active' : '' }}"><a href="{{ url('/profile') }}">WAH-NGO</a></li>
                <li class="{{ Request::is('partner') ? 'active' : '' }}"><a href="{{url('/partner')}}" >Partner Organization</a></li>
                <li class="{{ Request::is('sites') ? 'active' : '' }}"><a href="{{ url('/sites')}}">Sites</a></li>
                <!-- Dropdown Trigger --> 
                <li><a class="dropdown-button" href="#!" data-activates="dropdown1">Hello {{ Auth::user()->username }}<i class="material-icons right">menu</i></a></li>
              @endif
        </ul>

      </div>
    </nav>
  
        <div class="row">
        <div class="col s3" style="padding-left:10px">
            <br>
              <ul class="collapsible" data-collapsible="accordion" style="width:330px;padding:20px">
                <li>
                  <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                  <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                  <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                  <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
              </ul>
        </div>
        <div class="col s9" style="padding-right:60px">
        @if(Session::has('success'))
                Materialize.toast('{{ Session::get('success') }}', 4000)
        @endif

        @yield('content')
        </div>
        </div>
    

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="/materialize/js/materialize.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script>
      $(document).ready(function(){
            $(".button-collapse").sideNav({
                menuWidth: 300, // Default is 300
                edge: 'right', // Choose the horizontal origin
                closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
                draggable: true // Choose whether you can drag to open on touch screens
                });
            });
            $(".dropdown-button").dropdown();
            $('select').material_select();
            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15 // Creates a dropdown of 15 years to control year
              });
            $('.tooltipped').tooltip({delay: 50});

            $('.modal').modal();
            
    </script>
</body>
</html>
