<?php include './includes/header.php'?>
<main class="inner-page-container">
  <div class="incontainer">
    
      <div class="content-column col-md-8 col-lg-9">
        <div class="bread-crumb">
          <ul class="breadcrumb">
            <li><a href="./index.php">Home</a></li>
            <li><a href="#">Payment Gateway</a></li>
            <span id="fill"></span>


          </ul>
          <h1><span id="heading">Payment GateWay</span></h1>
        </div>
        <div class="inner-content-box" id="box">
          <p>Welcome to the RVR&JC CE Payments</p>
        </div>
      </div>
    </div>
</main>
<script>
     $(window).ready(function(e){
    document.getElementById("innerPage").style.display = "block";
   })
document.querySelectorAll(".change").forEach(item => {

    item.addEventListener("click", function (e) {
      document.querySelectorAll(".change").forEach(item => {
        item.style.fontWeight = "normal";
      });

      e.target.style.fontWeight = "bold";
e.target.style.color="#660000";

      document.getElementById("fill").innerHTML = `<li><a id="fill" href="#">${e.target.innerText.charAt(0).toUpperCase() + e.target.innerText.slice(1).toLowerCase()}</a></li>`;
      document.getElementById("heading").innerHTML = `${e.target.innerText.charAt(0).toUpperCase() + e.target.innerText.slice(1).toLowerCase()}`;

      switch (e.target.innerText) {
        case "EXAMINATION FEES":
          document.getElementById("box").innerHTML = `<?php include './paymentpages/examinationfees.php' ?>`; break;
        
	case "TUTION FEES":
          document.getElementById("box").innerHTML = `<?php include './paymentpages/tutionfees.php' ?>`; break;
      }
    })
  });
  </script>

<?php include './includes/footer.php'?>