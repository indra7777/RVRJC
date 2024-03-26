<?php include './includes/header.php' ?>

<main class="inner-page-container">
  <div class="incontainer">
    <div class="row">
      <div class="sidebar col-md-3">
        <div class="sidebar-sticky">
          <h2>People</h2>
          <ul class="sidemenu-items-box">
            <li class="sidemenu-item"><a class="change" href="#">Founders</a></li>
	     <li class="sidemenu-item"><a class="change" href="#">Executive Body</a></li>
	     <li class="sidemenu-item"><a class="change" href="#">Governing Body</a></li>
            <li class="sidemenu-item"><a class="change" href="#">Principal</a></li>
	    <li class="sidemenu-item"><a class="change" href="#">Directors</a></li>
	    <li class="sidemenu-item"><a class="change" href="#">HOD's</a></li>
            <li class="sidemenu-item"><a class="change" href="#">Faculty</a></li>
	    <li class="sidemenu-item"><a class="change" href="#">Library</a></li>
	    <li class="sidemenu-item"><a class="change" href="#">Office</a></li>
	    <li class="sidemenu-item"><a class="change" href="#">Staff</a></li>
	    <li class="sidemenu-item"><a class="change" href="#">Alumni</a></li>
          </ul>
        </div>
      </div>
      <div class="content-column col-md-8 col-lg-9" id="reload">
        <div class="bread-crumb">
          <ul class="breadcrumb">
            <li><a href="./index.php">Home</a></li>
            <li><a href="#">people</a></li>
            <span id="fill"></span>
          </ul>
          <h1><span id="heading">People</span></h1>
        </div>
<div class="inner-content-box" id="box">
          <p>welcome to the people page of RVR&JC College of Engineering</p>
        </div>    </div>
  </div>
</main>
<div class="internal-content-container">
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
        case "Founders":
          document.getElementById("box").innerHTML = `<?php include './peoplepages/founders.php' ?>`;localStorage.setItem("peopleSelectedOption", document.getElementById("reload").innerHTML); break; break;
        case "Executive Body":
          document.getElementById("box").innerHTML = `<?php include './peoplepages/executive_body.php'; ?>`;localStorage.setItem("peopleSelectedOption", document.getElementById("reload").innerHTML); break; break;
case "Principal":
          document.getElementById("box").innerHTML = `<?php include './peoplepages/principal.php'; ?>`;localStorage.setItem("peopleSelectedOption", document.getElementById("reload").innerHTML); break; break;
case "Faculty":
          document.getElementById("box").innerHTML = `<?php include './facultyList.php'; ?>`;localStorage.setItem("peopleSelectedOption", document.getElementById("reload").innerHTML); break; break;
case "Office":
          document.getElementById("box").innerHTML = `<?php include './peoplepages/officestaff.php'; ?>`;localStorage.setItem("peopleSelectedOption", document.getElementById("reload").innerHTML); break; break;
      }

  })
  });
 const savedOption = localStorage.getItem("peopleSelectedOption");
  if (savedOption) {
    reload.innerHTML = savedOption;
  }


  </script>


  <?php include './includes/footer.php' ?>