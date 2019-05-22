<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Management System</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  </head>
  <body>

    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
      <a class="navbar-brand" href="#">Student Management System</a>
      <button class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarCollapse"
              aria-controls="navbarCollapse"
              aria-expanded="false"
              aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('index') }}">Home <span class="sr-only">(current)</span> </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="{{ route('create') }}">Create</a>
          </li>
        </ul>
      </div>
    </nav>

    <div class="container">
          @yield('content')
    </div>


    <script type="text/javascript" src=" {{ asset('js/bootstrap.min.js') }} "></script>
  </body>
</html>
