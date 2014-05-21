<html>
  <head>
    <title>Todo Application by Jesse Foutch</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  </head>
  <body>
    <div class="container header">
      <div class="col-md-10">
        <h1 class="heading">{{ HTML::link('http://localhost:8888', 'Todo Application in Laravel') }}</h1>
      </div>
      <div class="col-md-2">
        <div>
            @if(Session::has('message'))
                <p class="alert">{{ Session::get('message') }}</p>
            @endif
        </div>
        
           
         
        <ul class="list-inline pull-right">
          <li><a href="{{ URL::route('login') }}">Login</a></li>
          <li><a href="{{ URL::to('logout') }}">Logout</a></li>
          <li><a href="{{ URL::to('/users/register') }}">Register</a></li>
        </ul>
      </div>
    </div>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>