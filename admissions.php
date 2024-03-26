<?php include './includes/header.php' ?>
<main class="inner-page-container">
  <div class="incontainer">
    <div class="row">
      <div class="sidebar col-md-3">
        <div class="sidebar-sticky">
          <h2>Admissions</h2>
          <ul class="sidemenu-items-box">
            <li class="sidemenu-item">
              <a class="change dropdown" href="#">Programs offered</a>
            <li class="sidemenu-item"><a class="change" href="#">Fee structure</a></li>
            <li class="sidemenu-item"><a class="change" href="#">Scholarships</a></li>
            <li class="sidemenu-item"><a>
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
            </li>
          </ul>
        </div>
      </div>
      <div class="content-column col-md-8 col-lg-9" id="reload">
        <div class="bread-crumb">
          <ul class="breadcrumb">
            <li><a href="./index.php">Home</a></li>
            <li><a href="#">Admissions</a></li>
            <span id="fill"></span>


          </ul>
          <h1><span id="heading">Admissions</span></h1>
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
      console.log(e.target.parentElement.parentElement.parentElement.children[1].innerText)
      if(e.target.parentElement.parentElement.parentElement.children[1].innerText == "Value added courses" || e.target.parentElement.parentElement.parentElement.children[1].innerText == "How to approach"){
        document.getElementById("fill").innerHTML = `<li><a id="fill" href="#">${e.target.parentElement.parentElement.parentElement.children[1].innerText.charAt(0).toUpperCase() + e.target.parentElement.parentElement.parentElement.children[1].innerText.slice(1).toLowerCase()}</a></li><li><a id="fill" href="#">${e.target.innerText.charAt(0).toUpperCase() + e.target.innerText.slice(1).toLowerCase()}</a></li>`;
      }
      document.getElementById("heading").innerHTML = `${e.target.innerText.charAt(0).toUpperCase() + e.target.innerText.slice(1).toLowerCase()}`;
      switch (e.target.innerText) {
        case "PROGRAMS OFFERED":
          document.getElementById("box").innerHTML = `<?php include 'programs_offered.php' ?>`;
localStorage.setItem("admissionsSelectedOption", document.getElementById("reload").innerHTML); break;
        case "FEE STRUCTURE":
          document.getElementById("box").innerHTML = `<?php include 'fee_structure.php'; ?>`;
localStorage.setItem("admissionsSelectedOption", document.getElementById("reload").innerHTML); break;
      }
    })
  });
 const savedOption = localStorage.getItem("admissionsSelectedOption");
  if (savedOption) {
    reload.innerHTML = savedOption;
  }

  </script>
<?php include './includes/footer.php' ?>