<!DOCTYPE html>
<html lang="en">

<head>
    <title>INSURGEX-1.0 | Home</title> <!--Change the title with recent hackthon name-->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Google Font link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Days+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">

    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Custom Script -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/Reg-page.css') }}">
    <link rel="stylesheet" href="{{ asset('css/roboimgs.css') }}">
</head>

<body>
    <img src="{{ asset('images/Design2.svg') }}" alt="Design" id="d1" class="img-fluid vector_pos">
    <img src="{{ asset('images/Design.svg') }}" alt="Design" class="img-fluid vector_pos" id="d2">

    <header class="header">
        <nav class="navbar navbar-dark ">
            <div class="container-fluid px-0 px-md-1">
                <a class="navbar-brand ms-4 me-0" href="{{ route('index') }}">
                    <!--Hackthon LOGO.-->
                    <img src="{{ asset('images/logo without bg2.png') }}" width="auto" height="65px" alt="Logo"
                        class="justify-content-start d-inline-block insurg_logo align-text-top" id="logo">
                </a>
                <!--Navigation Bar items-->
                <ul class="navbar-nav me-4">
                    <li class="nav-item ">
                        <a class="nav-link px-2" aria-current="page" href="{{ route('index') }}">Home</a>
                    </li>
                </ul>
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
                    <div class="order-md-last col-lg-4 col-md-6 mb-lg-0 text-sm-start year">2024</div>
                    <div class="order-md-first col-lg-8 col-md-6 text-md-start desc">
                        <!--Hackthon subtheme title. Change with the time-->
                        <div class="subtext text-sm-start ms-0 ">
                            <p>Storm&apos;s Rage Looms - Brace for Impact !</p>
                        </div>
                        <!--Hackthon Introduction paragraph-->
                        <p class="text-sm-start">INSURGEX-1.0 , Sri Lanka's Premier Advanced Analytics
                            Competition is powered by Department of Computer
                            Science, University of Ruhuna.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!--Robotimg 1-->
        <div class="responsive-robo-container shaking">
            <img src="{{ asset('images/robots/R.png') }}" class="enrollimg" alt="Description of Image 1">
        </div>

        <!--Intro paragraph-->
        <section class="shw_vwport reveal">
            <div class="container">
                <div class="text-center">
                    <div class="section-topic">Enroll Now</div>
                    <div class="about text-start ps-2">
                        <b>Participants shall comply with these rules while filling the registration form.</b>
                        <br>
                        <br>
                        <br>
                        <ol style="display: block;font: optional;font-weight: 200;">
                            <li>Each team is required to create a single Hackathon account, and <b>the username for
                                    your
                                    HackerRank account must adhere to a specific pattern provided by us.<br>
                                    [for alignment with your team's name, "CodeBlasters", the username for
                                    HackerRank shouls be
                                    CodeBlasters_X1 /(TeamName_X1) ].
                                </b></li>
                            <li>
                                Team size limit: Your team can include <b>a maximum of 3 members.</b>
                            </li>
                            <li>
                                There can be one, two or three members for a team.
                            </li>
                            <li>
                                Leader details are mandatory.
                            </li>
                            <li>
                                Try to use a unique name for your team.
                            </li>
                            <li>
                                Email and phone number of the leader must be unique.
                            </li>
                            <li>
                                Please fill all the fields correctly. And don't provide any misleading information.
                            </li>
                        </ol>
                    </div>

                </div>
            </div>
            <script type="text/JavaScript" src="{{ asset('js/shakerobo.js') }}"></script>
        </section>

        <!-- form -->
        <div class="container mb-3">
            <form action="{{ route('store') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!--Get team name seperately -->
                <div class="my-4 text-center teamDiv">
                    <label for="teamName">Team Name:</label>
                    <input required type="text" id="teamName" name="teamName" value="{{ old('teamName') }}">
                </div>

                <!-- leader deatials heading -->
                <h3 class="text-start ps-4 leader-title">Leader</h3>
                <!--Leader/Member 01 Details-->
                <div class="member-box">
                    <div class="input-data my-5">
                        <input required type="text" id="LeaderName" name="LeaderName"
                            value="{{ old('LeaderName') }}">
                        <label for="LeaderName">Name: (This name will be used in the certificate.)</label>
                    </div>

                    <div class="input-data my-5">
                        <input required type="text" id="member1SID" name="member1SID"
                            value="{{ old('member1SID') }}">
                        <label for="member1SID">Student ID No:</label>
                    </div>


                    <div class="input-data my-5 d-inline">
                        <select required id="leader_faculty" name="leader_faculty" value="{{ old('leader_faculty') }}">
                            <option value="" disabled selected hidden></option>
                            <option value="Engineering">Engineering</option>
                            <option value="Science">Science</option>
                            <option value="Technology">Technology</option>
                            <option value="Management and Finance">Management and Finance</option>
                            <option value="Medicine">Medicine</option>
                            <option value="Humanities and Social Sciences">Humanities and Social Sciences</option>
                            <option value="Agriculture">Agriculture</option>
                            <option value="Allied Health Science">Allied Health Science</option>
                            <option value="Fisheries and Marine Sciences">Fisheries and Marine Sciences</option>
                            <!-- Add more options as needed -->
                        </select>
                        <label for="leader_faculty">Faculty:</label>
                    </div>

                    <div class="input-data my-5 d-inline">
                        <select required id="leader_batchNumber" name="leader_batchNumber"
                            value="{{ old('leader_batchNumber') }}">
                            <option value="" disabled selected hidden></option>
                            <option value="1">1st year</option>
                            <option value="2">2nd year</option>
                            <option value="3">3rd year</option>
                            <option value="4">4th year</option>
                            <!-- Add more options as needed -->
                        </select>
                        <label for="leader_year">Year</label>
                    </div>

                    <div class="input-data my-5">
                        <input required type="tel" id="member1Contact" name="member1Contact"
                            value="{{ old('member1Contact') }}">
                        <label for="member1Contact">Whatsapp Number:</label>
                    </div>

                    <div class="input-data my-5">
                        <input required type="email" id="member1Email" name="member1Email"
                            value="{{ old('member1Email') }}">
                        <label for="member1Email">Email:</label>
                    </div>
                </div>

                <!-- Member2 deatials heading -->
                <div class="container text-center mt-3 ms-0 pt-0 member-div">
                    <div class="row pt-0">
                        <h6 class="col-6 member-Title">Member2</h6>
                        <button type="button" class="col-6 btn btn-primary bttn member-add"
                            data-bs-toggle="collapse" data-bs-target="#collapsemember2" aria-expanded="false"
                            aria-controls="collapsemember2" onclick="enableFields()">+</button>
                    </div>
                </div>
                <!--Member 02 Details-->
                <div class="member-box p-2">
                    <div class="collapse" id="collapsemember2">
                        <div class="input-data my-5">
                            <input type="text" id="member2Name" name="member2Name" required
                                title="Must fill this" value="{{ old('member2Name') }}" disabled>
                            <label for="member2Name">Name: (This name will be used in the certificate.)</label>
                        </div>

                        <div class="input-data my-5">
                            <input type="text" id="member2SID" name="member2SID" required title="Must fill this"
                                value="{{ old('member2SID') }}" disabled>
                            <label for="member2SID">Student ID No:</label>
                        </div>

                        <div class="input-data my-5 d-inline">
                            <select id="m2_faculty" name="m2_faculty" required title="Must fill this"
                                value="{{ old('m2_faculty') }}" disabled>
                                <option value="" disabled selected hidden></option>
                                <option value="Engineering">Engineering</option>
                                <option value="Science">Science</option>
                                <option value="Technology">Technology</option>
                                <option value="Management and Finance">Management and Finance</option>
                                <option value="Medicine">Medicine</option>
                                <option value="Humanities and Social Sciences">Humanities and Social Sciences</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Allied Health Science">Allied Health Science</option>
                                <option value="Fisheries and Marine Sciences">Fisheries and Marine Sciences</option>
                                <!-- Add more options as needed -->
                            </select>
                            <label for="m2_faculty">Faculty:</label>
                        </div>

                        <div class="input-data my-5 d-inline">
                            <select id="m2_batchNumber" name="m2_batchNumber" required title="Must fill this"
                                value="{{ old('m2_batchNumber') }}" disabled>
                                <option value="" disabled selected hidden></option>
                                <option value="1">1st year</option>
                                <option value="2">2nd year</option>
                                <option value="3">3rd year</option>
                                <option value="4">4th year</option>
                                <!-- Add more options as needed -->
                            </select>
                            <label for="m2_batchNumber">Year:</label>
                        </div>

                        <div class="input-data my-5">
                            <input type="tel" id="member2Contact" name="member2Contact" required
                                title="Must fill this" value="{{ old('member2Contact') }}" disabled>
                            <label for="member2Contact">Whatsapp Number:</label>
                        </div>

                        <div class="input-data my-5">
                            <input type="email" id="member2Email" name="member2Email" required
                                title="Must fill this" value="{{ old('member2Email') }}" disabled>
                            <label for="member2Email">Email:</label>
                        </div>

                    </div>
                </div>

                <!-- Member3 deatials heading -->
                <div class="container text-center mt-3 ms-0 pt-0 member-div">
                    <div class="row pt-0">
                        <h6 class="col-6 member-Title">Member3</h6>
                        <button type="button" class="col-6 btn btn-primary bttn member-add text-end"
                            data-bs-toggle="collapse" data-bs-target="#collapsemember3" aria-expanded="false"
                            aria-controls="collapsemember3" onclick="enableFields2()">+</button>
                    </div>
                </div>
                <!--Member 03 Details-->
                <div class="member-box p-2">
                    <div class="collapse" id="collapsemember3">
                        <div class="input-data my-5">
                            <input type="text" id="member3Name" name="member3Name" required
                                title="Must fill this" value="{{ old('member3Name') }}" disabled>
                            <label for="member3Name">Name: (This name will be used in the certificate.)</label>
                        </div>

                        <div class="input-data my-5">
                            <input type="text" id="member3SID" name="member3SID" required title="Must fill this"
                                value="{{ old('member3SID') }}" disabled>
                            <label for="member3SID">Student ID No:</label>
                        </div>


                        <div class="input-data my-5 d-inline">
                            <select id="m3_faculty" name="m3_faculty" required title="Must fill this"
                                value="{{ old('m3_faculty') }}" disabled>
                                <option value="" disabled selected hidden></option>
                                <option value="Engineering">Engineering</option>
                                <option value="Science">Science</option>
                                <option value="Technology">Technology</option>
                                <option value="Management and Finance">Management and Finance</option>
                                <option value="Medicine">Medicine</option>
                                <option value="Humanities and Social Sciences">Humanities and Social Sciences</option>
                                <option value="Agriculture">Agriculture</option>
                                <option value="Allied Health Science">Allied Health Science</option>
                                <option value="Fisheries and Marine Sciences">Fisheries and Marine Sciences</option>
                                <!-- Add more options as needed -->
                            </select>
                            <label for="m3_faculty">Faculty:</label>
                        </div>

                        <div class="input-data my-5 d-inline">
                            <select id="m3_batchNumber" name="m3_batchNumber" required title="Must fill this"
                                value="{{ old('m3_batchNumber') }}" disabled>
                                <option value="" disabled selected hidden></option>
                                <option value="1">1st year</option>
                                <option value="2">2nd year</option>
                                <option value="3">3rd year</option>
                                <option value="4">4th year</option>
                                <!-- Add more options as needed -->
                            </select>
                            <label for="m3_batchNumber">Year:</label>
                        </div>

                        <div class="input-data my-5">
                            <input type="tel" id="member3Contact" name="member3Contact" required
                                title="Must fill this" value="{{ old('member3Contact') }}" disabled>
                            <label for="member3Contact">Whatsapp Number:</label>
                        </div>

                        <div class="input-data my-5">
                            <input type="email" id="member3Email" name="member3Email" required
                                title="Must fill this" value="{{ old('member3Email') }}" disabled>
                            <label for="member3Email">Email:</label>
                        </div>
                    </div>
                </div>

                <!-- Submit and Reset buttons -->
                <div class="row">
                    <input class="col-6 btn btn-primary bttn py-0 " type="reset" onclick="return confirmReset()"
                        value="Reset">
                    <input class="col-6 btn btn-primary bttn py-0" type="submit" onclick="return confirmSubmit()"
                        value="Submit">
                </div>
            </form>
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
                                <a href="">
                                    <div class="responsive-cssc-container">
                                        <img src="{{ asset('images/cssc logo.png') }}" class="cssc-logo"
                                            alt="Description of Image 1">
                                    </div>
                                </a>

                            </li>
                        </ul>
                    </div>

                    <!-- Footer Right-->
                    <div class="col-lg-5 col-md-5 col-sm-12 text-justify-center rfooter">
                        <!-- Social Media links -->
                        <ul class="f-contact">
                            <li>
                                <!-- Facebook -->
                                <a href="https://www.facebook.com/csscuor" target="_blank"><i
                                        class="fa fa-facebook-f social"></i></a><span
                                    class="ms-lg-2">facebook.com/csscuor</span>
                            </li>
                            <li>
                                <span><i class="fa fa-envelope"></i></span><span
                                    class="ms-lg-2">insurgex.ruh@gmail.com</span>
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

        <script>
            // Function to enable member 02
            function enableFields() {
                document.getElementById("member2Name").disabled = false;
                document.getElementById("member2Contact").disabled = false;
                document.getElementById("m2_faculty").disabled = false;
                document.getElementById("m2_batchNumber").disabled = false;
                document.getElementById("member2SID").disabled = false;
                document.getElementById("member2Email").disabled = false;

            }
            // Function to enable member 03
            function enableFields2() {
                document.getElementById("member3Name").disabled = false;
                document.getElementById("member3Contact").disabled = false;
                document.getElementById("m3_faculty").disabled = false;
                document.getElementById("m3_batchNumber").disabled = false;
                document.getElementById("member3SID").disabled = false;
                document.getElementById("member3Email").disabled = false;
            }
            //submit and reset button function
            function confirmSubmit() {
                return confirm("Are you sure you want to submit this form?");
            }

            function confirmReset() {
                return confirm("Are you sure you want to Reset this form?");
            }
        </script>

        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
            integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
            integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        <!--main JavaScript -->
        <script type="text/JavaScript" src="{{ asset('js/main.js') }}"></script>
</body>

</html>
