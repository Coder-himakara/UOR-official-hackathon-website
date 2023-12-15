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

  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- Custom Script -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" href="{{asset('css/Reg-page.css')}}">
</head>

<body>
  <img src="{{asset('images/Design2.svg')}}" alt="Design" id="d1" class="img-fluid vector_pos">
  <img src="{{asset('images/Design.svg')}}" alt="Design" class="img-fluid vector_pos" id="d2">

  <header class="header">
    <nav class="navbar navbar-dark ">
      <div class="container-fluid px-0 px-md-1">
        <a class="navbar-brand ms-4 me-0" href="{{route('index')}}">
          <!--Hackthon LOGO. Change with requirements-->
          <img src="{{asset('images/logo 2.png')}}" border-radius: 278.50px width="auto" height="100px" alt="Logo"
            class="vector_pos" id="logo" style="position:absolute; " class="d-inline-block align-text-top">
        </a>
          <!--Navigation Bar items-->
          <ul class="navbar-nav ms-auto">
            <li class="nav-item ">
              <a class="nav-link px-2" aria-current="page" href="{{route('index')}}">Back-to-Home</a>
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
              <span class="st8_2">1.o</span>
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
            <p class="text-sm-start">INSURGEX-1.0 , Sri Lanka's Premier Advanced Analytics
              Competition is powered by Department of Computer
              Science, University of Ruhuna.
            </p>
          </div>
        </div>
      </div>
    </section>
    
    <!--Intro paragraph-->
    <section class="shw_vwport reveal">
      <div class="container">
        <div class="row text-center">
          <div class="section-topic">Enroll Now</div>
          <div class="row text-center">
            <div class="about text-start">
              <b>Participants shall comply with these rules while participating in the Hackathon.</b>
              <br>
              <br>
              <br>
              <ol style="display: block;font: optional;font-weight: 200;">
                <li>Each team is required to create a single Hackathon account, and <b>the username for your
                    HackerRank account must adhere to a specific pattern provided by us.<br>
                    [for alignment with your team's name, "CodeBlasters", the username for HackerRank shouls be
                    CodeBlasters_PIX1 /(TeamName_PIX1) ].
                  </b></li>
                <li>
                  Team size limit: Your team can include <b>a maximum of 3 members.</b>
                </li>
                <li>
                  Code originality: Remember, <b>you cannot copy codes for any other teams.</b>
                </li>
                <li>
                  Communication during Hackathon: During the event, <b>you are allowed to communicate only with your
                    team members.</b>
                </li>
                <li>
                  Feel free to use <b>any tools </b>during the hackthon.
                </li>
                <li>
                  Duration: The Hackathon will run for <b>2 hours.</b>
                </li>
                <li>
                  Device Usage: <b>Please bring your own laptop for the Hackathon.</b>
                </li>
                <li>
                  Extension Requests: If your team requires an extension, feel free to bring it up.
                </li>
                <li>
                  Food Policy: Please note that <b>foods are not allowed in the lab.</b>
                </li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
   
    <div class=container>
      <form action="#" method="post">
        <label for="teamName">Team Name:</label>
        <input type="text" id="teamName" name="teamName" required>

        <hr>

        <div class="member-box">
          <h2>Leader Details</h2>
          <label for="LeaderName">Name:</label>
          <input type="text" id="LeaderName" name="LeaderName" required>

          <label for="member1Contact">Whatsapp Number:</label>
          <input type="tel" id="member1Contact" name="member1Contact" required>

          <label for="leader_faculty">Select Faculty:</label>
          <select id="leader_faculty" name="leader_faculty" required>
            <option value="engineering">Engineering</option>
            <option value="science">Science</option>
            <option value="tech">Technology</option>
            <option value="MandF">Management and Finance</option>
            <option value="medi">Medicine</option>
            <option value="HandM">Humanities and Social Sciences</option>
            <option value="agri">Agriculture</option>
            <option value="alliedHealth">Allied Health Science</option>
            <option value="fishery">Fisheries and Marine Sciences</option>
            <!-- Add more options as needed -->
          </select>

          <label for="leader_batchNumber">Select Batch Number:</label>
          <select id="leader_batchNumber" name="leader_batchNumber" required>
            <option value="2022">41</option>
            <option value="2023">42</option>
            <option value="2024">43</option>
            <option value="2024">44</option>
            <option value="2024">45</option>
            <!-- Add more options as needed -->
          </select>

          <label for="member1SID">
            <label for="member1SID">Student ID:</label>
            <input type="text" id="member1SID" name="member1SIDq" required>

            <label for="member1Email">Email:</label>
            <input type="email" id="member1Email" name="member1Email" required>

        </div>

        <hr>

        <div class="member-box">
          <h2>Member 2 Details</h2>
          <label for="member2Name">Name:</label>
          <input type="text" id="member2Name" name="member2Name" required>

          <label for="member2Contact">Whatsapp Number:</label>
          <input type="tel" id="member2Contact" name="member2Contact" required>

          <label for="m2_faculty">Select Faculty:</label>
          <select id="m2_faculty" name="m2_faculty" required>
            <option value="same">Same as leader</option>
            <option value="engineering">Engineering</option>
            <option value="science">Science</option>
            <option value="tech">Technology</option>
            <option value="MandF">Management and Finance</option>
            <option value="medi">Medicine</option>
            <option value="HandM">Humanities and Social Sciences</option>
            <option value="agri">Agriculture</option>
            <option value="alliedHealth">Allied Health Science</option>
            <option value="fishery">Fisheries and Marine Sciences</option>
            <!-- Add more options as needed -->
          </select>

          <label for="m2_batchNumber">Select Batch Number:</label>
          <select id="m2_batchNumber" name="m2_batchNumber" required>
            <option value="Same">Same as leader</option>
            <option value="2022">41</option>
            <option value="2023">42</option>
            <option value="2024">43</option>
            <option value="2024">44</option>
            <option value="2024">45</option>
            <!-- Add more options as needed -->
          </select>

          <label for="member2SID">
            <label for="member2SID">Student ID:</label>
            <input type="text" id="member2SID" name="member2SID" required>

            <label for="member2Email">Email:</label>
            <input type="email" id="member2Email" name="member2Email" required>

        </div>

        <hr>

        <div class="member-box">
          <h2>Member 3 Details</h2>
          <label for="member3Name">Name:</label>
          <input type="text" id="member3Name" name="member3Name" required>

          <label for="member3Contact">Whatsapp Number:</label>
          <input type="tel" id="member3Contact" name="member3Contact" required>

          <label for="m3_faculty">Select Faculty:</label>
          <select id="m3_faculty" name="m3_faculty" required>
            <option value="same">Same as leader</option>
            <option value="engineering">Engineering</option>
            <option value="science">Science</option>
            <option value="tech">Technology</option>
            <option value="MandF">Management and Finance</option>
            <option value="medi">Medicine</option>
            <option value="HandM">Humanities and Social Sciences</option>
            <option value="agri">Agriculture</option>
            <option value="alliedHealth">Allied Health Science</option>
            <option value="fishery">Fisheries and Marine Sciences</option>
            <!-- Add more options as needed -->
          </select>

          <label for="m3_batchNumber">Select Batch Number:</label>
          <select id="m3_batchNumber" name="m3_batchNumber" required>
            <option value="Same">Same as leader</option>
            <option value="2022">41</option>
            <option value="2023">42</option>
            <option value="2024">43</option>
            <option value="2024">44</option>
            <option value="2024">45</option>
            <!-- Add more options as needed -->
          </select>

          <label for="member3SID">Student ID:</label>
          <input type="text" id="member3SID" name="member3SID" required>

          <label for="member3Email">Email:</label>
          <input type="email" id="member3Email" name="member3Email" required>
        </div>

        <input type="submit" value="Submit">
      </form>
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