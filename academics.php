<?php include './includes/header.php' ?>
<main class="inner-page-container">
  <div class="incontainer">
    <div class="row">
      <div class="sidebar col-md-3">
        <div class="sidebar-sticky">
          <h2>Academics</h2>
          <ul class="sidemenu-items-box">
            <li class="sidemenu-item"><a class="change dropdown" href="#">Academic Calender</a></li>
            <li class="sidemenu-item"><a class="change" href="#">Academic Regulations</a></li>
            <li class="sidemenu-item"><a class="change" href="#">Curicullum and Syllubus</a></li>
            <li class="sidemenu-item"><a class="change" href="#">Services & Conduct Rules</a></li>
            
            
            <!-- sub menu items if any sub menu items are there then uncomment it and placce the content -->
            <!-- <li class="sidemenu-item"><a>
                <input class="sub-radio" type="radio" name="accordion" id="vac">
                <label class="change" for="vac">Value added courses</label>
                <div class="sub-content">
                  <ul class="sidemenu-item">
                    <li class="change">one</li>
                    <li class="change">two</li>
                    <li class="change">one</li>
                    <li class="change">two</li>
                  </ul>
                </div>
              </a>
            </li>
            <li class="sidemenu-item"><a>
                <input class="sub-radio" type="radio" name="accordion" id="second">
                <label class="change" for="second">How to approach</label>
                <div class="sub-content">
                  <ul class="sidemenu-item">
                    <li class="change dot">one</li>
                    <li class="change">two</li>
                    <li class="change">one</li>
                    <li class="change">two</li>
                  </ul>
                </div>
              </a>
            </li> -->


          </ul>
        </div>
      </div>
      <div class="content-column col-md-8 col-lg-9" id="reload">
        <div class="bread-crumb">
          <ul class="breadcrumb">
            <li><a href="./index.php">Home</a></li>
            <li><a href="#">Academics</a></li>
            <span id="fill"></span>


          </ul>
          <h1><span id="heading">Academics</span></h1>
        </div>
        <div class="inner-content-box" id="box">
          <p>&Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia tempora ullam explicabo debitis
            blanditiis quo quis est molestias veritatis neque ratione hic optio perferendis, labore nostrum vitae in?
            Perferendis.</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia quia impedit quaerat sint cum pariatur!
            Quisquam tempora, voluptate itaque aliquam eos quam molestiae sed modi sit alias soluta error eveniet!
          <p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ad cupiditate deleniti saepe? Similique
            provident sit iusto laborum qui? Laudantium incidunt maiores nihil saepe, rem vero neque non reprehenderit
            dolore?</p>
          <p>&Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores mollitia tempora ullam explicabo debitis
            blanditiis quo quis est molestias veritatis neque ratione hic optio perferendis, labore nostrum vitae in?
            Perferendis.</p>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia quia impedit quaerat sint cum pariatur!
            Quisquam tempora, voluptate itaque aliquam eos quam molestiae sed modi sit alias soluta error eveniet!
          <p>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ad cupiditate deleniti saepe? Similique
            provident sit iusto laborum qui? Laudantium incidunt maiores nihil saepe, rem vero neque non reprehenderit
            dolore?</p>
        </div>
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
        case "ACADEMIC CALENDER":
          document.getElementById("box").innerHTML = `<?php include 'Academi_Calender.php' ?>`; 
localStorage.setItem("academicsSelectedOption", document.getElementById("reload").innerHTML); break;
        case "ACADEMIC REGULATIONS":
          document.getElementById("box").innerHTML = `<?php include 'Academic_Regulations.php'; ?>`;localStorage.setItem("academicsSelectedOption", document.getElementById("reload").innerHTML); break;
      }
    })
  });
 const savedOption = localStorage.getItem("academicsSelectedOption");
  if (savedOption) {
    reload.innerHTML = savedOption;
  }


  </script>
<?php include './includes/footer.php' ?>