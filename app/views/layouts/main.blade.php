<html>
  <head>
    <title>Todo Application by Jesse Foutch</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  </head>
  <body>
    <div class="container header">
      <div class="col-md-10">
        <h1>Todo Application Example in Laravel 4</h1>
      </div>
      <div class="col-md-2">
        <ul class="list-inline pull-right">
          <li><a href="{{ URL::route('login') }}">Login</a></li>
          <li><a href="{{ URL::to('logout') }}">Logout</a></li>
        </ul>
      </div>
    </div>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>