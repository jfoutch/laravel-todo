<html>
  <head>
    <title>Todo Application by Jesse Foutch</title>
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  </head>
  <body>
    <div class="container header">
      <h1>Todo Application Example in Laravel 4</h1>
    </div>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>