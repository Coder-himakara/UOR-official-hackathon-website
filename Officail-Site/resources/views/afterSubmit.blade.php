<!DOCTYPE html>
<html lang="en">

<head>
    <title>Submit Done</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Google Font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Days+One&display=swap" rel="stylesheet">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/afterSubmit.css')}}">

    <style>
        body {
            overflow-x: hidden;
        }

        .Thanktext,
        .luck,
        .pdf-download-text,
        .f-contact,
        .cpyright {
            margin-bottom: 20px;
        }

        .f-logo li {
            display: inline-block;
            margin-right: 10px;
        }

        .footer {
            padding-top: 20px;
        }

        /* Adjusted styles for the Thanktext */
        .Thanktext span {
            display: block;
            font-size: 5vw;
            /* Adjust as needed */
        }

        .luck h4 {
            font-size: 3vw;
            /* Adjust as needed */
        }

        .pdf-download-text p.lead,
        .pdf-download-text a.btn {
            font-size: 2vw;
            /* Adjust as needed */
        }

        .cpyright {
            font-size: 1.5vw;
            /* Adjust as needed */
        }

        @media (max-width: 767px) {

            /* Adjusted styles for smaller screens */
            .f-logo li {
                margin-right: 0;
            }

            .f-logo a {
                display: block;
                margin-bottom: 10px;
            }

            .f-contact li {
                margin-bottom: 10px;
            }
        }

        @media (min-width: 768px) and (max-width: 991px) {

            /* Adjusted styles for medium screens */
            .Thanktext span {
                font-size: 4vw;
            }

            .luck h4 {
                font-size: 2.5vw;
            }

            .pdf-download-text p.lead,
            .pdf-download-text a.btn {
                font-size: 1.8vw;
            }

            .cpyright {
                font-size: 1vw;
            }
        }

        @media (min-width: 992px) {

            /* Default styles for larger screens */
            .Thanktext span {
                font-size: 5vw;
            }

            .luck h4 {
                font-size: 3vw;
            }

            .pdf-download-text p.lead,
            .pdf-download-text a.btn {
                font-size: 2vw;
            }

            .cpyright {
                font-size: 1.5vw;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="Thanktext text-center">
            <span class="st8_1">Thank You For Registering With Us...!</span>
        </div>
    </div>

    <div class="luck text-center">
        <h4 class="display-6">"Best of luck! Code your way to victory in the hackathon!"</h4>
    </div>

    <div class="container text-center">
        <div class="pdf-download-text">
            <p class="lead">Download your team details from below</p>
            <a class="btn btn-primary btn-lg" id="pdfbtn" href="{{ route('generate-pdf', ['id' => $Hackteam->id]) }}"
                target="_blank" role="button">Download PDF</a>
        </div>
    </div>

    <div class="container text-center">
        <div class="pdf-download-text">
            <p class="lead">Return to Home Page</p>
            <a class="btn btn-primary btn-lg" id="homebtn" href="{{ route('index') }}" role="button">Home Page</a>
        </div>
    </div>


    <!-- Footer-->
  <footer class="footer">
    <div class="container-fluid px-lg-5">
      <div class="row">
        <!-- Footer Left-->
        <div class="col-lg-7 col-md-7 col-sm-12 lfooter text-center">
          <span><i class="fa fa-home"></i></span><span class="ms-2">UNIVERSITY OF RUHUNA,
            WELLAMADAMA<br>MATARA, SRI LANKA.</span>
          <ul class="f-logo">
            <li>
              <a href=""><i class="fa fa-home mx-2"></i></a>
              <a href=""><i class="fa fa-home mx-2"></i></a>
              <a href=""><i class="fa fa-home mx-2"></i></a>
            </li>
          </ul>
        </div>

        <!-- Footer Right-->
        <div class="col-lg-5 col-md-5 col-sm-12 text-justify-center rfooter">
          <!-- Social Media links -->
          <ul class="f-contact">
            <li>
              <!-- Facebook -->
              <a href=""><i class="fa fa-facebook-f social"></i></a><span class="ms-lg-2">www.facebook.com</span>
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
