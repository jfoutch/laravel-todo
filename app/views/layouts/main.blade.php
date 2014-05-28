<html>
  <head>
    <title>Todo Application by Jesse Foutch</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <script src="{{ URL::asset('js/jquery.js') }}"></script>
  </head>
  <body>
    <div class="container header">
      <div class="col-md-8">
        <h1 class="heading">{{ HTML::link('http://localhost:8888', 'Todo Application in Laravel') }}</h1>
      </div>
      <div class="col-md-4">
        
        
          @if (Auth::check())
            <div class="welcome">
              <p>Welcome {{ Auth::user()->firstname }}, you are logged in!</p>
              <a href="{{ URL::to('logout') }}">Logout</a>
            </div>

          @else

              @if(Request::url() === 'http://localhost:8888/login')
                <ul class="list-inline pull-right">      
                  <li class="register"><a href="{{ URL::to('/users/register') }}">Register</a></li>
                </ul>
              @else
                
                  <ul class="list-inline pull-right">
                    <li class="login"><a href="{{ URL::route('login') }}">Login</a></li>      
                  </ul>
              
            @endif
          @endif

         
      </div>
    </div>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>