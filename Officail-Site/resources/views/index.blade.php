<!DOCTYPE html>
<html lang="en">

<head>
    <title>INSURGEX-1.0 | Home</title> <!--Change the title with recent hackthon name-->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <!--Google Font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Days+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@600&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Archivo&family=Black+Ops+One&family=Carter+One&family=Exo+2&family=Montserrat+Alternates:wght@800&family=Viga&display=swap"
        rel="stylesheet">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link defer href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom Script -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/roboimgs.css') }}">
</head>

<body>
    <div class="container-fluid" id="particles-js"></div>
    <img src="{{ asset('images/Design2.svg') }}" alt="Design" id="d1" class="img-fluid vector_pos">
    <img src="{{ asset('images/Design.svg') }}" alt="Design" class="img-fluid vector_pos" id="d2">
    <img src="{{ asset('images/Vector.svg') }}" alt="Design" class="img-fluid vector_pos" id="d3">


    <header class="header">
        <!--Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark ">
            <div class="container-fluid px-0 px-md-1">
                <a class="navbar-brand ms-4 me-0" href="{{ route('index') }}">
                    <!--Hackthon LOGO. Change with requirements-->
                    <img src="{{ asset('images/logo without bg2.png') }}" border-radius: 278.50px width="auto"
                        height="210px" alt="Logo" class="vector_pos" id="logo" style="position:absolute; "
                        class="d-inline-block align-text-top">
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-center container-fluid px-0" id="navbarNav">
                    <!--Navigation Bar items-->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item ">
                            <a class="nav-link px-1" aria-current="page" href="#welcome">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" href="#about">About</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" href="#guideline">Guideline</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" aria-current="page" href="#timeline">Timeline</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" href="#prizes">Prizes</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link px-1" href="{{ route('contactUs') }}" target="_self">Contact-us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                More</a>
                            <!--Navigation drop don menu-->
                            <div class="dropdown-menu dropdown-menu-right">
                                <button class="dropdown-item test" type="button"><a href="#sponsers"
                                        class="dd-item">Sponsers</a></button>
                                <button class="dropdown-item" type="button"><a href="{{ route('updates') }}"
                                        target="_self" class="dd-item">News-&-Updates</a></button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>


    <main>
        <!-- Welcome section-->
        <section id="welcome" class="shw_vwport">
            <div class="container">
                <div class="row">
                    <div class="topic-color text-sm-start">
                        <!--Hackthon main title.Can change with the time-->
                        <p><span class="st8_2_1">I</span>
                            <span class="st8_2">NSURGE</span>
                            <span class="st8_2_3">X</span>
                            <span class="st8_2">1.0</span>
                        </p>
                    </div>
                </div>

                <div class="row">
                    <div class="order-md-last col-lg-6 col-md-6 mb-lg-0 text-sm-start year">2023</div>
                    <div class="order-md-first col-lg-6 col-md-6 text-md-start desc">
                        <!--Hackthon subtheme title. Change with the time-->
                        <div class="subtext text-sm-start ms-0 ">
                            <p>Storm&apos;s Rage Looms - Brace for Impact !</p>
                        </div>
                        <!--Hackthon Introduction paragraph-->
                        <p class="text-sm-start">Welcome to 'INSURGEX 1.0', the algorithmic hackathon event
                            organized by the Computer
                            Science Students' Community of University of Ruhuna.
                            Expect a great experience!
                        </p>
                        <a href="{{ route('register') }}" target="_self"><button type="button"
                                class="btn btn-primary bttn text-center">
                                <span class="bttn-text">ENROLL NOW</span>
                            </button></a>
                    </div>
                </div>
            </div>
        </section>


        <!-- ABOUT section -->
        <section class="shw_vwport reveal" id="about">
            <div class="container">
                <div class="row text-sm-end ms-2">
                    <div class="section-topic">About</div>
                </div>
                <div class="row about">
                    <!--About us paragraph-->
                    <div class="text-sm-justify-center about-text">INSURGEX is an algorithmic coding competition
                        organized by
                        undergraduates of the Department of Computer Science at
                        University of Ruhuna.
                        We have organized this event through “HackerRank”
                        platform.Participants are able to use any programming language
                        they prefer.It takes 03 hours to compete with a group consisting
                        of maximum three members.
                        This algorithmic event is organized with the explicit purpose of
                        enhancing the coding skills of undergraduates.This is taking place
                        as a Physical event and winners will receive cash prizes and
                        valuable certificate.
                        And also, all the other participants will receive a digital certificate
                        as an appreciation oftheir participation and hard work.</div>
                </div>
            </div>
        </section>
        <!--Robotimg 1-->
        <div class="responsive-robo-container shaking">
            <img src="{{ asset('images/robots/R3.png') }}" class="guidelineimg" alt="Description of Image 1">
        </div>

        <!-- GUIDELINE section -->
        <section class="shw_vwport reveal" id="guideline">
            <div class="container ms-sm-2 ">
                <div class="row">
                    <div class="col-sm-10 ms-sm-4 text-sm-center offset-sm-1 section-topic">Guidelines</div>
                </div>
                <div class="row guideline">
                    <div class="col-sm-10  ms-sm-4 guideline-text">
                        <!--Guidline list-->
                        <ol>
                            <li>
                                Lorem ipsum dolor sit amet consectetur adipisicing eli
                            </li>
                            <li>
                                Similique hic possimus dolore cumqu consectetur exercitationem assumenda omnis corrupti
                                modi inve
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. ntore, perspiciatis accusamus.
                                Iusto
                                exercitationem unde
                                doloribus aliquid accusamus animi impedit?Lorem ipsum dolor sit
                            </li>
                            <li>
                                amet consectetur adipisicing elit. Sit sapiente molestias ad velit cumque qui rerum
                                alias earum at
                                perferendis in
                            </li>
                            <li>
                                beatae quidem dolorum odio, dicta mollitia accusantium atque repellendus!
                            </li>
                            <li>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem aliquam tempore fugiat
                                repellat
                                laudantium,
                            </li>
                        </ol>
                        <div class="row text-sm-center text-start">
                            <a href=""><button type="button" class="btn btn-primary bttn"><span
                                        class="bttn-text">Download</span></button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Robotimg 2-->
        <div class="responsive-robo-container shaking">
            <img src="{{ asset('images/robots/R4.png') }}" class="timelineimg" alt="Description of Image 1">
        </div>

        <!-- TIMELINE section -->
        <section class="shw_vwport timeline " id="timeline">
            <div class="container-fluid">
                <div class="row mx-0 text-sm-center text-start">
                    <div class=" _timeline text-md-end section-topic">TimeLine</div>
                    <div class="timelineSec ms-sm-1 px-0">
                        <div class="phone-timeline"></div>
                        <div class=" left-container timeline-align reveal">

                            <div class="text-box">
                                <h2>Google</h2>
                                <small>2023-2024</small>
                                <p>The success of every web site depend on search engine optimisation and digital
                                    marketing stratergy. If you are on first page of all major search...
                                </p>
                                <span class="left-container-arrow"></span>
                            </div>
                        </div>

                        <div class=" right-container timeline-align reveal">

                            <div class="text-box">
                                <h2>LinkedIn</h2>
                                <small>2023-2024</small>
                                <p>The success of every web site depend on search engine optimisation and digital
                                    marketing stratergy. If you are on first page of all major search...
                                </p>
                                <span class="right-container-arrow"></span>
                            </div>
                        </div>

                        <div class="left-container timeline-align reveal">

                            <div class="text-box">
                                <h2>YouTube</h2>
                                <small>2023-2024</small>
                                <p>The success of every web site depend on search engine optimisation and digital
                                    marketing stratergy. If you are on first page of all major search...
                                </p>
                                <span class="left-container-arrow"></span>
                            </div>
                        </div>

                        <div class="right-container timeline-align reveal">

                            <div class="text-box">
                                <h2>Facebook</h2>
                                <small>2023-2024</small>
                                <p>The success of every web site depend on search engine optimisation and digital
                                    marketing stratergy. If you are on first page of all major search...
                                </p>
                                <span class="right-container-arrow"></span>
                            </div>
                        </div>

                        <div class="left-container timeline-align reveal">

                            <div class="text-box">
                                <h2>Twitter</h2>
                                <small>2023-2024</small>
                                <p>The success of every web site depend on search engine optimisation and digital
                                    marketing stratergy. If you are on first page of all major search...
                                </p>
                                <span class="left-container-arrow"></span>
                            </div>
                        </div>

                        <div class="right-container timeline-align reveal">

                            <div class="text-box">
                                <h2>Facebook</h2>
                                <small>2023-2024</small>
                                <p>The success of every web site depend on search engine optimisation and digital
                                    marketing stratergy. If you are on first page of all major search...
                                </p>
                                <span class="right-container-arrow"></span>
                            </div>
                        </div>

                        <div class="left-container timeline-align reveal">

                            <div class="text-box">
                                <h2>Twitter</h2>
                                <small>2023-2024</small>
                                <p>The success of every web site depend on search engine optimisation and digital
                                    marketing stratergy. If you are on first page of all major search...
                                </p>
                                <span class="left-container-arrow"></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>

        <!--Robotimg 3-->
        <div class="responsive-robo-container shaking">
            <img src="{{ asset('images/robots/R7.png') }}" class="awardimg" alt="Description of Image 1">
        </div>

        <!-- AWARDS AND PRIZE section -->
        <section class="shw_vwport" id="prizes">
            <div class="section-topic text-center">Award and Prizes</div>
            <div class="container prize reveal mt-5">
                <div class="row justify-content-evenly">

                    <!-- 1 -->
                    <div class="prize-body reveal sp-prize col-lg  col-md mx-lg-4 mx-md-2 order-md-2">
                        <div class="info-box-name">1nd</div>
                        <div class="card">
                            <img class="user-image" src="{{ asset('images/1.png') }}" alt="1nd">
                        </div>
                        <div class="info-box-name">Rs.30,000</div>
                    </div>

                    <!-- 2 -->
                    <div class="prize-body reveal col-lg col-md mx-lg-4 mx-md-2 order-md-1">
                        <div class="info-box-name">2nd</div>
                        <div class="card">
                            <img class="user-image" src="{{ asset('images/2.png') }}" alt="2nd">
                        </div>
                        <div class="info-box-name">Rs.20,000</div>
                    </div>

                    <!-- 3 -->
                    <div class="prize-body reveal sp-prize col-lg  col-md mx-lg-4 mx-md-2 order-md-3">
                        <div class="info-box-name">3nd</div>
                        <div class="card">
                            <img class="user-image" src="{{ asset('images/3.png') }}" alt="3nd">
                        </div>
                        <div class="info-box-name">Rs.10,000</div>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <!-- PARTNERSHIP and Sponsors section -->
        <section class="shw_vwport" id="sponsers">
            <div class="container-fluid reveal">
                <div class="section-topic text-center">Sponsors</div>
                <div class="container prize reveal mt-5">
                    <div class="row justify-content-evenly">
                        <!-- 1 -->
                        <div class="prize-body reveal col-lg  col-md mx-lg-4 mx-md-2 order-md-2">
                            <div class="info-box-name">logo</div>
                            <div class="card">
                                <img class="user-image" src="" alt="1nd">
                            </div>
                        </div>

                        <!-- 2 -->
                        <div class="prize-body reveal sp-prize col-lg col-md mx-lg-4 mx-md-2 order-md-1">
                            <div class="info-box-name">logo</div>
                            <div class="card">
                                <img class="user-image" src="" alt="2nd">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- -->
        <script type="text/JavaScript" src="{{ asset('js/shakerobo.js') }}"></script>
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
                            <span><i class="fa fa-envelope"></i></span><span
                                class="ms-lg-2">Insurgex.ruh@gmail.com</span>
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
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script difer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <script type="text/JavaScript" src="{{ asset('js/Particle/particles.js') }}"></script>
    <script type="text/JavaScript" src="{{ asset('js/Particle/app.js') }}"></script>
    <!-- Custom JavaScript -->
    <script type="text/JavaScript" src="{{ asset('js/main.js') }}"></script>
    <script type="text/JavaScript" src="{{ asset('js/Tiimeline.js') }}"></script>

</html>
