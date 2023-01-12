<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Praktikum Modul 5 | @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
    </style>
</head>

<body>

<section id="Home">
      <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background-color: cadetblue;">
        <div class="container-fluid">
          <a class="navbar-brand fst-italic" href="{{ route('home') }}">StepUp</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <nav align="center">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link mx-2 active" aria-current="page" href="product/create">Desain</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 active" href="product">Keranjang</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 active" href="/feedback">Feedback</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 active" href="{{ route('logout') }}">Logout</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>

    @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
        </script>
</body>

</html>