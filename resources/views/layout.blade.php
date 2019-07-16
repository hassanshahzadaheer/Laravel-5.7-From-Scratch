<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">
<style media="screen">
  .is-complete {
    text-decoration: line-through;
  }
</style>


  </head>
  <body>

    <div class="container">
      @yield('content')
    </div>


  </body>
</html>
