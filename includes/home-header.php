<style>
  .carousel-image {
  width: 100%;
  height: auto;
}

.img-box {
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0;
  overflow: hidden;
  transition: all 800ms;
}
</style>
<!-- search section -->
  <div class="search pure-flex">
    <div>
      <div class="search-bar pure-flex">
        <input class="searchTerm" type="search" placeholder="What are you looking for?"><button class="searchButton"><i style="color: white;" class="uil uil-search"></i></button>
      </div>
      <div class="search-links">
        <!-- <a class="search-link" href="">Placement <i class="uil uil-external-link-alt"></i></a>
      <a class="search-link" href="">Placement <i class="uil uil-external-link-alt"></i></a>
      <a class="search-link" href="">Placement <i class="uil uil-external-link-alt"></i></a> -->
      </div>
      <button class="close-btn"><i class="uil uil-times-circle"></i></button>
    </div>
  </div>
  <div id="wholeweb">
  <!-- College Carousal -->
  <div class="intro-box bg-dark">
      <!-- <div class="img-box"><img class="corousal-img" src="./images/rvr2.jpg" alt=""></div>
      <div class="img-box"><img class="corousal-img" src="./images/rvr1.jpg" alt=""></div>
      <div class="img-box"><img class="corousal-img" src="./images/rvr3.jpg" alt=""></div> -->
      <div class="img-corousal">
      <div class="img-box"><video class="carousel-image" autoplay loop muted plays-inline>
        <source src="./images/clg_video.mp4">
      </video>
    </div>
    </div>
    <div class="mask">
    </div>
    <div class="info">
      <div class="intro-nav">
        <div class="links intro-flex">
          <!-- <a href="" class="intro-link"><i class="uil uil-user-circle"></i> Jobs </a> -->
          <a href="./payment_gateway.php" class="intro-link"><i class="uil uil-credit-card"></i> Payment Gateway</a>
          <a href="" class="intro-link"><i class="uil uil-envelope"></i> RVRJC Mail</a>
        </div>
        <div class="media intro-flex">
          <a href="#" class="intro-link">All-Links</a>
          <a href="https://rvrjcce.ac.in/webinterface/employee.php" target="_blank" class="intro-link">Faculty Login</a>
          <a href="http://courses.rvrjc.ac.in/" target="_blank" class="intro-link">Student Login</a>
        </div>

      </div>
      <div class="details">
        <div class="left">
          <img src="./images/footer-rvr.png" width="auto" height="70px" alt="rvr main">
          <!-- <img src="./Icons/location.png" alt="rvr location" width="50px" height="60px">
          <div class="location-details">
              <p id="unique">R.V.R. & J.C.College of Engineering,</p> 
              <p id="unique">Chandramoulipuram, Chowdavaram,GUNTUR-522 019</p>
          </div> -->
        </div>
        <div class="right d-flex flex-row justify-content-end gap-2">
          <div class="d-flex flex-column align-items-end justify-content-start">
            <p style="margin-bottom: 0px;">
              <span style="margin-bottom: 0px;" id="year_count">0</span> Years Of Excellence <span>||</span> NAAC A+ GRADE
            </p>
            <p style="margin-bottom: 0px;">6 Times Accerdited Courses <span>||</span> ISO 9011 : 2015 Certified</p>
          </div>
          <img src="./images/founders.png" width="100px" height="60px" alt="founders of rvr">
        </div>
        <script>
          var year = new Date().getFullYear() - 1985;
          var ele = document.getElementById("year_count");
          ele.innerHTML = year;
        </script>
      </div>
      <!--Home Navbar  -->
      <div class="d-flex flex-column justify-content-between">
        <!-- link  navbar home -->
        <?php include 'navbar.php' ?>
        <!--  -->
        <nav class="navbar burgur-menu navbar-expand-lg bg-body-tertiary w-100" style="position: absolute;z-index:99">
          <div class="w-100">
            <div class="d-flex justify-content-between align-items-center w-100 px-2">
              <h4 class="mt-1"><button style="background: none; border:none;padding:5px;border:2px solid white;border-radius:50%" onclick="Websearch()" class="intro-nav2-link">
                  <i style="color: white;font-size: 18px;" class="uil uil-search"></i>
                </button></h4>
              <div>

                <button class="navbar-toggler p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                  <img class="burgur" src="./Icons/svgs/barswhite.svg" alt="">
                </button>
              </div>
            </div>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <div class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="admissions.php">Admissions</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Campus Life</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Departments</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="academics.php">Academics</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">People</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./committees.php">Committees</a>
                </li>
              </div>
            </div>
          </div>
        </nav>
        <!--  -->
        <div class="welcome d-flex justify-content-around">
         <!-- <div class="left pure-flex"><span class="corousel-btn"><i id="ileft" class="uis uis-angle-left"></i></span></div>-->
          <div style="overflow: hidden;" class="welcome-content">
            <h1 class="slidable head1">WELCOME TO <br><span style="font-size:6rem;color:#660000;font-weight:bold;">RVR&JC CE</span></h1>
            <div class="text-center">
              <!-- <button class="slidable btn more-btn">KNOW MORE</button> -->
            </div>
          </div>
         <!-- <div class="right pure-flex"><span class="corousel-btn"><i id="iright" class="uis uis-angle-right"></i></span></div>-->
        </div>
      </div>
    </div>
  </div>
  <div class="home-center-nav">
    <div class="intro-nav3">
      <a href="#collaborations" class="intro-nav3-link">Collaborations</a>
      <a href="#Announcements" class="intro-nav3-link">Announcements</a>
      <a href="#Pgallery" class="intro-nav3-link">Placement Gallery</a>
      <a href="#events" class="intro-nav3-link">Academic Events</a>
      <a href="#newsletters" class="intro-nav3-link">News Letters</a>
      <a href="#rjgallery" class="intro-nav3-link">RJ Gallery</a>
    </div>
  </div>
<!-- Home Main Container -->
<script>
    window.onscroll = function() {
        myFunction()
    };

    var navbar = document.getElementById("navbar-section-home");
    var sticky = 140;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky-nav")
        } else {
            navbar.classList.remove("sticky-nav");
        }
console.log(sticky,window.pageYOffset)

    }
</script>