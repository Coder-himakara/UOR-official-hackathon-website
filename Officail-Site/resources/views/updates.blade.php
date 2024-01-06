<!DOCTYPE html>
<html lang="en">

<head>
  <title>INSURGEX-1.0 | News and Update</title> <!--Change the title with recent hackthon name-->
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!--Google Font link-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Candal&family=Days+One&display=swap" rel="stylesheet">

  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Custom Script -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/updates.css')}}">
</head>

<body>
  <img src="{{asset('images/Design2.svg')}}" alt="Design1" id="d1" class="img-fluid vector_pos">

  <header class="header">
    <!--Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark ">
      <div class="container-fluid">
        <a class="navbar-brand ms-4 me-0" href="{{route('index')}}">
          <!--Hackthon LOGO. Change with requirements-->
          <img src="{{ asset('images/logo without bg2.png') }}" border-radius: 278.50px width="auto" height="100px" alt="Logo"
            class="vector_pos" id="logo" style="position:absolute; " class="d-inline-block align-text-top">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-center container-fluid px-0" id="navbarNav">
          <!--Navigation Bar items-->
          <ul class="navbar-nav ms-auto">
            <li class="nav-item ">
              <a class="nav-link px-1" aria-current="page" href="{{ route('index') }}#welcome">Home</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link px-1" href="{{ route('index') }}#about">About</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link px-1" href="{{ route('index') }}#guideline">Guideline</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link px-1" aria-current="page" href="{{ route('index') }}#timeline">Timeline</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link px-1" href="{{ route('index') }}#prizes">Prizes</a>
            </li>
            <li class="nav-item ">
              <a class="nav-link px-1" href="{{route('contactUs')}}" target="_self">Contact-us</a>

            </li>
            <li class="nav-item dropdown">
              <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                aria-expanded="false">
                More</a>

              <!--Navigation drop don menu-->
              <div class="dropdown-menu dropdown-menu-right">
                <button class="dropdown-item" type="button"><a href="{{ route('index') }}#sponsers"
                    class="dd-item">Sponsers</a></button>
                <button class="dropdown-item" type="button"><a href="{{route('updates')}}" target="_self" class="dd-item">News-
                    &-Updates</a></button>

              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>


  <main>
    <!--Updates section starts from here-->
    <section class="" id="updates">
      <div class="wrapper">
        <div class="container">
          <div class="topic1"> <!--Text 'Updates' is here-->
            <h4>UPDATES</h4>
          </div>
          <!--News box 1 is here-->
          <div class="newsbox1">
            <div class="nphoto1">
              <img src="{{asset('images/news/news1.jpg')}}" class="img-fluid" style="height: 283px; width: 478px;" alt="news1">
            </div>
            <div class="ntext1">
              <p>Hello word. we are comming</p>
              <hr id=""><!--Horizontal line to divide news1-->
            </div>
          </div>
          <!--News box 2 is here-->
          <div class="newsbox2">
            <div class="nphoto2">
              <img src="{{asset('images/news/news2.jpg')}}" class="img-fluid" style="height: 283px; width: 478px;" alt="news2">
            </div>
            <div class="ntext2">
              <p> hello world 2, we are close</p>
              <hr id=""><!--Horizontal line to divide news2-->
            </div>
          </div>
          <!--News slide show is here-->
          <div class="morenews">

          </div>
          <hr id=""><!--Horizontal line to divide news and highlights-->
        </div>

      </div>

    </section>
    <!--Updates section is finished-->

    <!--Highlights section starts-->
    <section class="reveal" id="highlights">
      <div class="wrapper">
        <div class="container">
          <div class="topic2"> <!--Text 'Highlights' is here-->
            <h4>HIGHLIGHTS</h4>
          </div>
          <!--Box for event 1-->
          <div class="eventbox1">

          </div>
        </div>
      </div>
    </section>
    <!--Highlights section ends-->

  </main>

  <!-- Footer-->
  <footer class="footer">
    <div class="container-fluid px-lg-5">
      <div class="row">
        <!-- Footer Left-->
        <div class="col-lg-6 col-md-6 col-sm-12 lfooter">
          <span><i class="fa fa-home"></i></span><span class="ms-2">UNIVERSITY OF RUHUNA,<br>
            WELLAMADAMA, MATARA, <br>SRI LANKA.</span>
          <ul class="f-logo">
            <li>
              <a href=""><i class="fa fa-home mx-2"></i></a>
              <a href=""><i class="fa fa-home mx-2"></i></a>
              <a href=""><i class="fa fa-home mx-2"></i></a>
            </li>
          </ul>
        </div>

        <!-- Footer Right-->
        <div class="col-lg-6 col-md-6 col-sm-12 text-justify-center rfooter">
          <!-- Social Media links -->
          <ul class="f-contact">
            <li>
              <!-- Facebook -->
              <a href=""><i class="fa fa-facebook-f social me-2"></i></a>
              <!-- Twitter -->
              <a href=""><i class="fa fa-twitter social mx-2"></i></a>
              <!-- Google + -->
              <a href=""><i class="fa fa-youtube social mx-2"></i></a>
              <!-- Linkedin -->
              <a href=""><i class="fa fa-linkedin social mx-2"></i></a>
            </li>
            <li>
              <span><i class="fa fa-envelope"></i></span><span class="ms-lg-2">Insurgex.ruh@gmail.com</span>
            </li>
            <li>
              <span><i class="fa fa-phone"></i></span><span class="ms-2">+94 702392322</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="container text-center">
      <!-- Footer Copyrigth-->
      <small class="lead mb-0 cpyright">&copy; 2023 Copyright Inc. All rights reserved.</small>
    </div>
  </footer>


  <!-- Bootstrap JavaScript Libraries -->

  <script difer src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script difer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <!-- Custom JavaScript -->
  <script type="text/JavaScript" src="{{asset('js/main.js')}}"></script>
</body>

</html>