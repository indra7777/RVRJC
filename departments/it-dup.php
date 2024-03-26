
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="generator" content="Hugo 0.88.1">
    <title>R.V.R. & J.C. College Of Engineering</title>
    <link rel="shortcut icon" href="./images/RVR&JCCE_Logo.png" type="image/gif">

    <!-- Bootstrap 5.3 core CSS  -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <script src="../../js/aos.js"></script>
    <script src="../../js/particles.js"></script>
    <script src="./js/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="./css/aos.css">
    <link rel="stylesheet" href="./css/odometer-theme-default.css"> 

    <!-- swiper-css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- laoding uniocons -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/solid.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">

    <style>
      @font-face {
        font-family: 'TWRVR';
        src: url(fonts/TitilliumWeb/TitilliumWeb-Regular.ttf);
      }
      body{
        font-family:'TWRVR';
        -webkit-user-select: none !important; 
        -ms-user-select: none !important; 
        user-select: none !important; 
      }
        @media only screen and (max-device-width: 1366px) {
      .parallax {
        background-attachment: scroll;
      }
      }
      .parallax {
      /* The image used */
        background-image: url("./images/rvr1.jpg");
        min-height: 250px;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
      }


      /* placement gallery css(temporary) */
      .swiper {
        width: 90%;
        height: 400px;
      }

      .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 260px;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        -webkit-box-reflect: below 1px linear-gradient(transparent, transparent , #0002 , #0004);
      }

      /* department-gallery */
      .gallery-main{
        display:grid;
        grid-template-columns:repeat(7,1fr);
        grid-auto-columns: 200px;
        grid-gap:10px;
        padding:50px 50px;
      }
      .i-1{
        grid-column: span 2;
        grid-row:span 4;
      }
      .i-3{
        grid-row:span 4;
      }
      .i-24{
        grid-row:span 7;
        grid-column: span 2;
      }
      .i-5{
        grid-column: span 2;
        grid-row:span 3;
      }
      .i-6{
        grid-row:span 3;
      }

      
    </style>

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="./css/particles.css">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/gallery-new.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/footers.css">
    <link rel="stylesheet" href="./css/calendar.css">
    <link rel="stylesheet" href="./css/navbar.css">
    <link rel="stylesheet" href="./css/gallery.css">
    <link rel="stylesheet" href="./css/search.css">
    <link rel="stylesheet" href="./css/placement_gallery.css">
    <link rel="stylesheet" href="./css/news.css">
    <link rel="stylesheet" href="./css/about.css">
    <link rel="stylesheet" href="./css/collaborations.css">
    <link rel="stylesheet" href="./css/placements.css">
</head>

<body>
  
  <div id="main-content">
    <div class="info">
      <div class="intro-nav">
          <div class="links intro-flex">
              <a href="" class="intro-link"><i class="uil uil-user-circle"></i> Jobs </a>
              <a href="" class="intro-link"><i class="uil uil-credit-card"></i> Calendar</a>
              <a href="" class="intro-link"><i class="uil uil-credit-card"></i> Payment Gateway</a>
          </div>
          
          <div class="media intro-flex">
              <a href="" class="intro-link"><i class="uil uil-twitter"></i></a>
              <a href="" class="intro-link"><i class="uil uil-linkedin"></i></a>
              <a href="" class="intro-link"><i class="uil uil-facebook-f"></i></a>
              <a href="" class="intro-link"><i class="uil uil-instagram"></i></a>
              <!-- <a href="https://rvrjcce.ac.in/webinterface/employee.php" target="_blank" class="intro-link"></i>Faculty Login</a>
              <a href="http://courses.rvrjc.ac.in/" target="_blank" class="intro-link"></i>Student Login</a> -->
              <a href="" class="intro-link"><i class="uil uil-envelope"></i> RVRJC Mail</a>
          </div>
      </div>

      <div class="details" style="font-size:12px;">
        <div class="left">
          <a href="../../index.php" ><img src="./images/rvr_department.png" width="auto" height="70px" alt="rvr_main"></a>?&nbsp;
            
        </div>
        <div class="right d-flex flex-row justify-content-end align-items-center">
          <div class="d-flex flex-column align-items-end justify-content-start mx-1" >
            <p style="margin-bottom: 0px; color:black; font-weight: bold;"><sp style="margin-bottom: 0px;"an id="year_count">0</sp> Years Of Excellence || NAAC A+ GRADE</p>
            <p style="margin-bottom: 0px; color:black; font-weight: bold;">6 Times Accerdited Courses || ISO 9011 : 2015 Certified</p>    
          </div>
          <img class="founders" src="./images/founders.png" alt="founders of rvr">&nbsp;
        </div>
        <script>
          var year = new Date().getFullYear()-1985;
          var ele=document.getElementById("year_count");
          ele.innerHTML=year;
      </script>
      </div>
          
       <!--Home Navbar  and welcome department-->
       <div style="border: solid #660000;box-shadow: 0 6px 20px -8px black; margin:10px 15px;border-radius:12px " id="particles">
        <div style="margin: 10px 0px ;" id="webcoderskull">
          <!-- navbar -->
          <div class="home-nav-box intro-nav2 d-flex align-items-center list-unstyled ">
	      <li class="dropdown dropdown-container">
                <a class="intro-nav2-link home-nav-option fw-bold " style="letter-spacing: 0.13rem; color:black; font-size:12px" href=""><i style="font-size:1.3rem;color: black;" class="uil uil-home"></i> Home</a>
                  </a></li>
              <li class="dropdown dropdown-container">
                <a href="./admissions.php" class="intro-nav2-link home-nav-option fw-bold" style="letter-spacing: 0.13rem;  color:black; font-size:12px" >People</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="./academics.php">Faculty</a></li>
                    <li><a class="dropdown-item" href="#">Support Staff</a></li> 
                  </ul>
              </li>
              <li class="dropdown dropdown-container">
                <a class="intro-nav2-link home-nav-option fw-bold" style="letter-spacing: 0.13rem; color:black; font-size:12px"  href="./academics.php">Academics</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Academic Calender</a></li>
                    <li><a class="dropdown-item" href="#">Class Teacher</a></li>
                    <li><a class="dropdown-item" href="#">Circullum & Syllabus</a></li>
                   </ul>
              </li> 
              <li class="dropdown dropdown-container">
                <a class="intro-nav2-link home-nav-option fw-bold" style="letter-spacing: 0.13rem; color:black; font-size:12px"  href="" data-bs-toggle="dropdown">Resources Life</a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Laboratories</a></li>
                    <li><a class="dropdown-item" href="#">Seminar Halls</a></li>
                   </ul>
              </li>
              <li class="dropdown dropdown-container">
                <a class="intro-nav2-link home-nav-option fw-bold" style="letter-spacing: 0.13rem; color:black; font-size:12px"  href="departments.html" data-bs-toggle="dropdown">Student Activities</a>
                  <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Student Magazines</a></li>
                      <li><a class="dropdown-item" href="#">Internships</a></li>
                      <li><a class="dropdown-item" href="#">List Of Activities</a></li>
                      <li><a class="dropdown-item" href="#">Placements</a></li>
		      <li><a class="dropdown-item" href="#">Student List</a></li>
                    </ul>
                  </li>
            <button style="background: none; border:none;" onclick="Websearch()" class="intro-nav2-link">
              <i style="color: black; font-size: 1.3rem;" class="uil uil-search"></i>
            </button>
          </div>
        </div>

        <!-- welcome content -->
        <div class="d-flex justify-content-between p-3" id="welcome-content">
          <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="p-5">
              <h2 style="color:#660000; font-weight:600 ">Welcome to Department of</h2>
              <h1 style="color:#660000; font-weight:600 ">INFORMATION TECHNOLOGY</h1>
            </div>
          </div>
          <div style="padding-right: 40px;">
            <img width="340px" src="../../images/department-cards/information-technology.png" alt="deparments-img">
          </div>
        </div>
      </div>

  
    </div> 
  </div>
  </br></br>
  </br></br></br></br>
  </br></br></br></br>
  </br></br></br></br>
  </br></br></br></br>
  </br></br></br></br>

  <!-- About section -->
  <div class="note d-flex justify-content-evenly flex-wrap">
    <div class="about-box shadow-lg">
        <h1 class="aboutsec-heading">About</h1>
        <div class="para">Established by the renowned Nagarjuna Education Society (1967) in 
            the year 1985, the College drew its initial impetus from people's 
            representatives, local doctors, charitable trusts and commercial 
            houses of Guntur District.</div>
            <img class="curve" src="images/principal.svg" alt="Principle Image">
    </div>
    <div class="about-box shadow-lg">
    <h1 class="aboutsec-heading">HOD</h1>
    
    <div class="d-flex">
        <div class="para">
            <h4>Dr.Kolla Srinivas</h4>
            Principal, Dean Student Affirs, Professor <br>
            <b>Mail:</b> principal@rvrjc.ac.in
        </div>
        <img class="principal-box" src="./images/faculty/new_principle.png" alt="">
    </div>
    </div>
  </div>
  </br>
  
  <!-- placement gallery -->

  <section class="placements container-fluid" style="position:relative">
    <h2  class="text-capitalize text-center fw-bolder main-head">placement gallery</h2>
    </br></br></br>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="./images/temp.png" alt="" height="250px" width="400px">
        </div>
        <div class="swiper-slide">
          <img src="./images/temp1.png" alt="" height="250px" width="400px">
        </div>
        <div class="swiper-slide">
          <img src="./images/temp2.png" alt="" height="250px" width="400px">
        </div>
        <div class="swiper-slide">
          <img src="./images/temp3.png" alt="" height="250px" width="400px">
        </div>
        <div class="swiper-slide">
          <img src="./images/temp4.png" alt="" height="250px" width="400px">
        </div>
        <div class="swiper-slide">
          <img src="./images/temp5.png" alt="" height="250px" width="400px">
        </div>
        <div class="swiper-slide">
          <img src="./images/temp6.png" alt="" height="250px" width="400px">
        </div>
        <div class="swiper-slide">
          <img src="./images/temp.png" alt="" height="250px" width="400px">
        </div>
        <div class="swiper-slide">
          <img src="./images/temp1.png" alt="" height="250px" width="400px">
        </div>
        <div class="swiper-slide">
          <img src="./images/temp2.png" alt="" height="250px" width="400px">
        </div>
        <div class="swiper-slide">
          <img src="./images/temp3.png" alt="" height="250px" width="400px">
        </div>
        <div class="swiper-slide">
          <img src="./images/temp4.png" alt="" height="250px" width="400px">
        </div>
      </div>
      </br>
      <div class="swiper-pagination"></div>
    </div>
  </section>

  <!-- news-letter -->
 
  <section class="notice container-fluid">
      <div class="d-flex justify-content-center align-items-center mb-2" >
        <h2 class="text-capitalize text-center fw-bolder main-head">News Letters</h2>
      </div>
      </br>
      <div class="d-flex justify-content-evenly ">
          <div >
              <img style="border-radius:25px;" width="240px" height="300px"  src="./images/rvr1.jpg" alt="fall-2023">
              <p style="text-align:center;  font-weight: bold;" >Fall-2023</p>
          </div>
          <div>
              <img style="border-radius:25px;" width="240px" height="300px" src="./images/rvr2.jpg" alt="spring-2023">
              <p style="text-align:center; font-weight: bold;">Spring-2023</p>
          </div>
          <div>
              <img style="border-radius:25px;" width="240px" height="300px" src="./images/rvr3.jpg" alt="spring-2023">
              <p style="text-align:center; font-weight: bold;">Spring-2023</p>
          </div>
          <div>
              <img style="border-radius:25px;" width="240px" height="300px" src="./images/rvr2.jpg" alt="spring-2023">
              <p style="text-align:center; font-weight: bold;">fall-2023</p>
          </div>
      </div>
    </section>

    <!-- Department Gallery Section -->

    <section id="gallery" data-aos="" data-aos-duration="1000" class="container-fluid gallery-section">
      <div class="d-flex flex-row justify-content-center align-items-center">
        <h2 class="text-capitalize text-center fw-bolder main-head">IT Gallery</h2>
      </div>
      <div class="container border d-flex justify-content-evenly gallery-box shadow-lg">
        <div class="gallery-main">
          <div class="gallery-container i-1">
              <div class="image" style="height: 160px;"><img id="event1" src="./images/rvr1.jpg" alt="event-picture"></div>
          </div>
          <div class="gallery-container i-24">
              <div class="image"><img src="./images/rvr2.jpg" alt="event-picture"></div>
          </div>
          <div class="gallery-container i-3">
            <div class="image"><img src="./images/rvr2.jpg" alt="event-picture"></div>
          </div>  
          <div class="gallery-container i-24">
              <div class="image"><img src="./images/rvr2.jpg" alt="event-picture"></div>
          </div>
          <div class="gallery-container i-5">
            <div class="image" style="height: 160px;"><img id="event1" src="./images/rvr3.jpg" alt="event-picture"></div>
          </div>
          <div class="gallery-container i-6">
              <div class="image"><img src="./images/rvr2.jpg" alt="event-picture"></div>
          </div>
          
        </div>
      </div>
    </section>
    </br></br></br>

    <!-- Footer section -->
    <div data-aos="" data-aos-duration="1000" class="container-fluid text-white" style="background-color: #212331;width:100%" class="footer-container">
      <footer class="footer row row-cols-8 pt-5 border-top">
        <div class="col-sm-4 col-md-8 order-md-0 order-lg-0 col-lg-4" >
          <div class="d-flex justify-content-center">
            <img src="./images/footer-rvr.png"  width="80%" class="footer-rvr w-20 img-fluid" alt="RVRJCCE">
          </div>
          <ul class="d-flex flex-column list-unstyled "> 
            <li class="ms-3 text-center"><i class="uil uil-phone"></i><a href="#" class="d-inline nav-link p-1 text-light">xxx-xxx-xxx</a></li>
            <li class="ms-3 text-center" ><i class="uil uil-envelope"></i><a href="#"  class="d-inline nav-link p-1 text-light">info@rvrjc.ac.in</a></li>
            <li class="ms-3 text-center" ><i class="uil uil-globe"></i><a href="#"  class="d-inline nav-link p-1 text-light">www.rvrjc.ac.in</a></li>
          </ul>

          <ul class="list-unstyled d-flex justify-content-center">
            <a href="https://www.youtube.com/c/RVRJCCollegeofEngineering" target="_blank"><img class="m-1" style="width:40px;height:40px" src="icons/svgs/youtube-svg.svg" alt="YouTube"></a>
            <a href="https://www.facebook.com/RVR-JC-College-of-Engineering-Autonomous-442983819071705" target="_blank"><img class=" m-1" style="width:40px;height:40px" src="icons/svgs/facebook-svg.svg" alt="facebook"></a> 
            <a href="https://twitter.com/rvrjc_official" target="_blank"><img class="rounded-circle m-1" style="width:40px;height:40px" src="icons/svgs/x-svg.svg" alt="twitter"></a>
            <a href="https://www.instagram.com/rvrjcce.official/" target="_blank"><img class="m-1" style="width:40px;height:40px" src="icons/svgs/instagram-svg.svg" alt="instagram"></a>
            <a href="https://www.linkedin.com/school/r.v.r.-&-j.c.-college-of-engineering/" target="_blank"><img class="m-1" style="width:40px;height:40px" src="icons/svgs/linkedin-svg.svg" alt="Linkedin"></i></a>
          </ul>
        </div>

      <!-- verticall line after college details  -->
      <!-- <div class="vl p-0"></div>  -->
      
        <div class="links-column col-sm-2 col-md-4 order-md-2 order-lg-0 col-lg-2">
          <h5 class="border-bottom border-2 border-danger mb-4 pb-2" style="border-bottom-width: 50px;">Quick Links</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#"  class="nav-link p-0 pb-2 text-white">Departments</a></li>
            <li class="nav-item mb-2"><a href="#"  class="nav-link p-0 pb-2 text-white">Faculty</a></li>
            <li class="nav-item mb-2"><a href="#"  class="nav-link p-0 pb-2 text-white">R&D Cell</a></li>
            <li class="nav-item mb-2"><a href="#"  class="nav-link p-0 pb-2 text-white">Centres of Excellence</a></li>
          </ul>
        </div>

        <div class="links-column col-sm-2 col-md-6 order-md-2 order-lg-0 col-lg-2">
          <h5 class="border-bottom border-2 border-danger mb-4 pb-2">Explore</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#"  class="nav-link p-0 text-white pb-2 ">Rules</a></li>
            <li class="nav-item mb-2"><a href="#"  class="nav-link p-0 text-white pb-2 ">Campus Life</a></li>
            <li class="nav-item mb-2"><a href="#"  class="nav-link p-0 text-white pb-2 ">Institute Newsletter</a></li>
            <li class="nav-item mb-2"><a href="#"  class="nav-link p-0 text-white pb-2 ">Educational Programmes</a></li>
            <li class="nav-item mb-2"><a href="#"  class="nav-link p-0 text-white pb-2 ">PhD Seminar</a></li>
            <li class="nav-item mb-2"><a href="#"  class="nav-link p-0 text-white pb-2 ">Contact Us</a></li>
            <!-- <li class="nav-item mb-2"><a href="#" style="border-bottom-style:dashed;border-color:grey" class="nav-link p-0 text-white pb-2 ">About Us</a></li> -->
          </ul>
        </div>
        <div class="col-sm-4 col-md-4 order-md-1 order-lg-0 col-lg-4" >
          <!-- <h5 class="border-bottom border-2 border-danger pb-1">Map</h5>   -->
          <iframe width="100%" height="100%"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" style="border:2px solid ghostwhite;border-radius:10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3830.3316190062897!2d80.32332137516829!3d16.254765734444238!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a4a76e740000001%3A0xc41c8498715c6da0!2sR.V.R.%20%26%20J.C.College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1699157234638!5m2!1sen!2sin" ></iframe>
        </div>
        <div class="copyright-details d-flex flex-lg-row order-md-3 order-lg-0 justify-content-around p-2" style="background-color:#2b2d3b;">
          <p>Copyright&copy; 2021 R.V.R.&J.C. College of Engineering.All rights reserved.</p>  
          <p>Developed & Maintained by RVRJCCE</p>   
        </div>
      </footer>
    </div>

</body>


<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 15,
      stretch: 1,
      depth: 210,
      modifier: 1,
      slideShadows: false,
    },
    loop: true,
    pagination: {
      el: ".swiper-pagination",
      },
  });
</script>

<script>
  AOS.init();
</script>

<script src="./js/corousel.js"></script>
<script src="./js/search.js"></script>
<script src="./js/bootstrap.bundle.min.js"></script>


</html>





