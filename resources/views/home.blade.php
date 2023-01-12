@extends('app')

@section('content')

@auth
<!-- Navbar -->
<section id="Home">
      <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background-color: cadetblue;">
        <div class="container-fluid">
          <a class="navbar-brand fst-italic" href="#">StepUp</a>
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
    <!-- Caresoul -->
    <center>                        
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" data-bs-interval="60">
              <div class="carousel-item active">
                <img src="/image/home1.png" width="110%" height="750px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="d-block w-10" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="100">
                <img src="/image/home2.jpg" width="100%" height="750px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="d-block w-10" alt="..." alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="100">
                <img src="/image/home3.png"  width="100%" height="750px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="d-block w-10" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   
  <!-- Lokasi -->
    <section id="Lokasi" style="background-color:blanchedalmond ">
        <div class="Lokasi">
            <h2 style="text-align: center;"class="fst-italic" > <br> Store Place </h2> <br>
            <div style="width: 100%" align="center"><iframe width="60%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Basecamp%20Rendaxio+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><
                a href="https://www.maps.ie/distance-area-calculator.html">measure area map</a></iframe></div>
        </div>
    </br>
    </section>
    <!-- About Us  -->
        <section id="Jenis" style="background-color:paleturquoise" align="center">
            <div class="container text-left">
                <h2 class="fst-italic" style="text-align: center;"><br>About Us</h2> </br>
                <div class="row row-cols-2">
                    <div class="card" class="col">
                        <div class="card-body ">
                            <img src="/image/5.png" alt="" style="width: 100%;">
                        </div>
                    </div>       
            <div class="card" class="col">
                <div class="card-body">
                    <img src="/image/gtr.jpeg" alt="" style="height: 200px; ;"></br><h2 class="fst-italic">StepUp</h2> <br>
                    StepUp adalah sebuah website yang didedikasikan untuk menyediakan desain sepatu kustom untuk pelanggan kami. Kami mengerti bahwa setiap individu memiliki gaya yang unik dan itulah mengapa kami menawarkan beragam pilihan untuk membantu Anda menciptakan sepasang sepatu yang sempurna yang mencerminkan selera pribadi Anda.

Website kami menawarkan antarmuka yang mudah digunakan yang memungkinkan Anda dengan mudah mengkustomisasi sepatu Anda dengan memilih dari beragam warna dan desain. 

Kami bangga menggunakan hanya bahan berkualitas tertinggi untuk memastikan bahwa sepatu kustom Anda tidak hanya akan terlihat bagus, tetapi juga nyaman dan tahan lama. Tim kami yang berpengalaman adalah dedikasi untuk menciptakan sepasang sepatu yang sempurna untuk Anda.

Di StepUp, kami percaya bahwa setiap orang berhak untuk mengekspresikan diri melalui sepatu mereka, dan kami berkomitmen untuk membantu Anda melakukannya. Terima kasih telah memilih StepUp untuk kebutuhan sepatu kustom Anda.
                </br>
                </br>
                </br>
                    Instagram : StepUp
                </br> 
                    No Telpon/Whatsapp : 0812123456
                  </div>
                </div>
            </div>            
        </div>
        <br>
    </section>
@endauth
@guest
<!-- Navbar -->
<section id="Home">
      <nav class="navbar navbar-dark navbar-expand-lg fixed-top" style="background-color: cadetblue;">
        <div class="container-fluid">
          <a class="navbar-brand fst-italic" href="#">StepUp</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <nav align="center">
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link mx-2 active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link mx-2 active" href="{{ route('login') }}">Login</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </section>
    <!-- Caresoul -->
    <center>                        
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner" data-bs-interval="60">
              <div class="carousel-item active">
                <img src="/image/home1.png" width="110%" height="750px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="d-block w-10" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="100">
                <img src="/image/home2.jpg" width="100%" height="750px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="d-block w-10" alt="..." alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="100">
                <img src="/image/home3.png"  width="100%" height="750px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" class="d-block w-10" alt="...">
                <div class="carousel-caption d-none d-md-block">
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </center>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   
  <!-- Lokasi -->
    <section id="Lokasi" style="background-color:blanchedalmond ">
        <div class="Lokasi">
            <h2 style="text-align: center;"class="fst-italic" > <br> Store Place </h2> <br>
            <div style="width: 100%" align="center"><iframe width="60%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=Basecamp%20Rendaxio+(My%20Business%20Name)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><
                a href="https://www.maps.ie/distance-area-calculator.html">measure area map</a></iframe></div>
        </div>
    </br>
    </section>
    <!-- About Us  -->
        <section id="Jenis" style="background-color:paleturquoise" align="center">
            <div class="container text-left">
                <h2 class="fst-italic" style="text-align: center;"><br>About Us</h2> </br>
                <div class="row row-cols-2">
                    <div class="card" class="col">
                        <div class="card-body ">
                            <img src="/image/5.png" alt="" style="height: 550px; ; width: 100%;">
                        </div>
                    </div>       
            <div class="card" class="col">
                <div class="card-body">
                    <img src="/image/gtr.jpeg" alt="" style="height: 200px; ;"></br><h2 class="fst-italic">StepUp</h2> <br>
                    StepUp adalah sebuah website yang didedikasikan untuk menyediakan desain sepatu kustom untuk pelanggan kami. Kami mengerti bahwa setiap individu memiliki gaya yang unik dan itulah mengapa kami menawarkan beragam pilihan untuk membantu Anda menciptakan sepasang sepatu yang sempurna yang mencerminkan selera pribadi Anda.

Website kami menawarkan antarmuka yang mudah digunakan yang memungkinkan Anda dengan mudah mengkustomisasi sepatu Anda dengan memilih dari beragam warna dan desain. 

Kami bangga menggunakan hanya bahan berkualitas tertinggi untuk memastikan bahwa sepatu kustom Anda tidak hanya akan terlihat bagus, tetapi juga nyaman dan tahan lama. Tim kami yang berpengalaman adalah dedikasi untuk menciptakan sepasang sepatu yang sempurna untuk Anda.

Di StepUp, kami percaya bahwa setiap orang berhak untuk mengekspresikan diri melalui sepatu mereka, dan kami berkomitmen untuk membantu Anda melakukannya. Terima kasih telah memilih StepUp untuk kebutuhan sepatu kustom Anda.
                </br>
                </br>
                </br>
                    Instagram : StepUp
                </br> 
                    No Telpon/Whatsapp : 0812123456
                  </div>
                </div>
            </div>            
        </div>
        <br>
    </section>
@endguest

@endsection