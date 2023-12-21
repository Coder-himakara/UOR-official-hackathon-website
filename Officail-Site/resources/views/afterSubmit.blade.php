<!DOCTYPE html>
<html lang="en">

<head>
    <title>Submit Done</title>
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

    <!--Don't know why added. But don't delete-->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <!-- Custom Script -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">   
</head>

<body>
    <div class="Thanktext">
        <h2>Thank you for registering with us!</h2>
    </div>
    <div class="luck">
        <h4>"Best of luck ! Code your way to victory in the hackathon!"</h4>
    </div>
    <img src="{{asset('images/afterSubmit/logo background.png')}}" alt="logo" id=logobg>
    <img src="{{asset('images/afterSubmit/design.svg')}}" alt="Design" id="d1" class="img-fluid vector_pos">

    <div class="container">
        <div class="pdf-download-text">
            <p>Download your team details from below</p>
        </div>
        <div>
            <a class="btn btn-primary" id="pdfbtn" href="{{ route('generate-pdf', ['id' => $Hackteam->id]) }}" target="_blank"
                role="button">Download PDF</a>
        </div>
    </div>
    <div class="container2">
        <div class="return-home-text">
            <p>Return to Home Page</p>
        </div>
        <div>
            <a class="btn btn-primary" id="homebtn" href="{{ route('index') }}" role="button">Home Page</a>
        </div>
    </div>




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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <!-- Custom JavaScript -->
    <script type="text/JavaScript" src="{{ asset('js/main.js') }}"></script>

</body>

<!--To disable go back feature. But it is not working in every case-->
<script>
    history.pushState(null, null, location.href);
    window.onpopstate = function() {
        history.pushState(null, null, location.href);
    };
</script>

</html>
