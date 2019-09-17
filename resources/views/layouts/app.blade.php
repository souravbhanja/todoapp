<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/app.css">
  <title>TodoApp</title>
</head>
<body>
  @include('inc.navbar')
  <div class="container my-3">
    @include('inc.messages')
    @yield('content')
  </div>
  <footer id="footer" class="text-center">
  <p>Copyright {{Date('Y')}} &copy; TodoApp</p>
  </footer>
</body>
</html>