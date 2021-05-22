<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>{{config('app.name', 'WebDev')}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <script src="https://kit.fontawesome.com/56ba40089d.js" crossorigin="anonymous"></script>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: rgb(108, 110, 110);
        }
    </style>
    </head>
     <!-- NavBar Start-->
    <body class="img-fluid">
        <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
            <div class="container-fluid">
              <a class="navbar-brand fs-4 fw-bold fst-italic" href="/">Web Dev</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link fs-6" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-6" href="{{route('dashboard')}}">Dashboard</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link fs-6"href="{{route('posts')}}">Posts</a>
                  </li>
                </ul>
                <ul class="navbar-nav d-flex mb-2 mb-lg-0">
                    @auth
                    <li class="nav-item">
                        <a class="nav-link fs-6" href="">{{auth()->user()->firstname}}&nbsp;{{auth()->user()->lastname}}</a>
                      </li>
                    <li class="nav-item">
                        <form action="{{route('logout')}}" method="post" class="inline">
                            @csrf
                            <button class="nav-link fs-6" type="submit">Logout</button>
                        </form>
                    </li>
                    @endauth
                    @guest
                    <li class="nav-item">
                      <a class="nav-link fs-6" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link fs-6" href="{{route('register')}}">Register</a>
                    </li>
                    @endguest
                  </ul>
              </div>
            </div>
          </nav>
          <!-- NavBar End-->
        @yield('content')

        <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'editor' );
        </script>
    </body>
</html>
