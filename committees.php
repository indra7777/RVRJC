<?php include './includes/header.php'?>

<main class="inner-page-container">
  <div  class="incontainer">
    <div class="row">
      <div class="sidebar col-md-3">
        <div class="sidebar-sticky">
          <h2>Committees</h2>
          <ul class="sidemenu-items-box">
            <li class="sidemenu-item"><a class="change dropdown" href="#">All Committees</a>
          </ul>
        </div>
      </div>
      <div class="content-column col-md-8 col-lg-9">
        <div class="bread-crumb">
          <ul class="breadcrumb">
            <li><a href="./index.php">Home</a></li>
            <li><a href="#">Committees</a></li>
            <span id="fill"></span>
          </ul>
          <h1>Committees</h1>
        </div>
        <div class="inner-content-box" id="box">
          <ul class="list-container">
            <li><a href="#">R &amp; D Cell</a></li> 				
            <li><a href="#EMDCmain.php">EMD Cell</a></li>  
            <li><a href="#IQACmain.php">IQAC</a></li>  
            <li><a href="#VECmain.php">Value Education Cell</a></li> 
            <li><a href="#SDCmain.php">Skill Development Centre</a></li> 
            <li><a href="#IITBRCmain.php">IIT Bombay Remote Centre</a></li>  
            <li><a href="#GRCmain.php">Grievance Redressal Cell</a></li> 
            <li><a href="#SPCmain.php">Social Protection Cell</a></li> 
            <li><a href="#antiRaggingmain.php">Anti Ragging </a></li> 
            <li><a href="#LAICCmain.php">Lady Advisory &amp; Internal Complaints Committee</a></li>   
            <li><a href="#AICTEpreranamain.php">AICTE Prerana</a></li> 
            <li><a href="#SIH.php">SMART INDIA HACKATHON(SIH) </a></li>  
            <li><a href="#NPTELmain.php">Swayam NPTEL </a></li>  
            <li><a href="#ISTEyoga&amp;Meditation.php">ISTE Yoga &amp; Meditation </a></li>  
            <li><a href="#CodeofConductCommittee.php">Code of Conduct Committee</a></li> 
            <li><a href="#trainingandPlacementsmain.php">Training and Placements</a></li>  
            <!--<li><a href="#iso9001-2015.php">ISO 9001-2015 </a></li>  -->
            <!--<li><a href="#ARIIA.php">ARIIA </a></li> -->
            <li><a href="#alumnimain.php">Alumni </a></li> 		
          </ul>
        </div>
      </div>
    </div>
  </div>
</main>
</div>
<script>
     $(window).ready(function(e){
    document.getElementById("innerPage").style.display = "block";
   })
</script>
<?php include './includes/footer.php' ?>