<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'IMS') }}</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
</script>
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>     
 
 
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/css1.css') }}"  >

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="icon" href="images/logo.jpg">



    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .image{
            background-image: "images/image2.jpg";
        }
    .block{
        background-color: lightgrey;
  width: 600px; 
  border: 2px solid black;
  padding: 10px;
  margin: 20px 0 0 300px;
     }
     footer{
         background-color:black;
         color: white;
         bottom: 0;
         position: relative; width: 100%;

     }
    
     #box {
        width: 900px;
  height: 200px;  
  padding: 50px;
  border: 1px solid black;
  text:12px;
  box-sizing: border-box;
}
     #name{
         padding: 20px 0 0 50px;
     }
     </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark sticky-top">
            <div class="container">
                <a class="navbar-brand" href="{{url('/demo')}}">
                    <img src="images/logo.jpg" alt="Logo" style="width:80px; height:50px; background-color:darkslategrey">
                    
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ">
                        <li class="nav-item active">
                        <a  id="a" class="nav-link" href="{{url('/home')}}" >Home</a></li>
                        <li class="nav-item dropdown active">
                               
                                <a id="a" class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                  Insurance
                                </a>
                                
                                <div class="dropdown-menu">
                                       
                                  <a id="a" class="dropdown-item" href="{{url('/home')}}">Life Insurance</a>
                                  <a id="a" class="dropdown-item" href="{{url('/home1')}}">Health Insurance</a>
                                </div>
                                
                               
                              </li>
                        <li class="nav-item active">
                        <a id="a" class="nav-link " href="{{url('/about')}}"> About Us</a></li>
                        <li class="nav-item active">
                        <a id="a" class="nav-link" href="{{url('/contact')}}">Contact Us</a></li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                            <div class="search-container">
                                    <form action="{{url('/plans')}}">
                                      <input type="text" id="a" placeholder="Search.." name="search">
                                      <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                  </div>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item active">
                                <a id="a" class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item active">
                                    <a id="a" class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></div>
                                    
                                
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @include('includes/message')
            @yield('content')
           
        </main>
        
      
    </div>
   
    @include('includes/footer')
 
</body>

</html>


