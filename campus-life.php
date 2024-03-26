<?php include './includes/header.php' ?>
<main class="inner-page-container">
  <div class="incontainer">
    <div class="row">
      <div class="sidebar col-md-3">
        <div class="sidebar-sticky">
          <h2>Campus Life</h2>
          <ul class="sidemenu-items-box">
            <li class="sidemenu-item"><a class="change dropdown" href="#">Library</a></li>
            <li class="sidemenu-item"><a>
                <input class="sub-radio" type="radio" name="accordion" id="vac">
                <label class="change" for="vac">Facilities</label>
                <div class="sub-content">
                  <ul class="sidemenu-item">
                    <li class="change">Dispensary</li>
                    <li class="change">Hostels</li>
                    <li class="change">Transportation</li>
                    <li class="change">Canteen</li>
                    <li class="change">Stores</li>
                    <li class="change">OAT</li>
                    <li class="change">Seminar Halls</li>
                    <li class="change">Labs</li>
                    <li class="change">T & P Cell</li>
                    <li class="change">ED Cell</li>
                    <li class="change">Power Stations</li>
                    <li class="change">Wifi Facility</li>
                    <li class="change">Elevators</li>
                    <li class="change">RO Water</li>
                  </ul>
                </div>
              </a>
            </li>
            <li class="sidemenu-item"><a>
                <input class="sub-radio" type="radio" name="accordion" id="sports">
                <label class="change" for="sports">SportsPlex</label>
                <div class="sub-content">
                    <h6>Outdoor</h6>
                  <ul class="sidemenu-item">
                    <li class="change">Volleyball</li>
                    <li class="change">BasketBall</li>
                    <li class="change">Beach Volleyball</li>
                    <li class="change">Batmintion</li>
                    <li class="change">Shuttle</li>
                  </ul>
                  <h6>Indoor</h6>
                  <ul class="sidemenu-item">
                    <li class="change">Chess</li>
                    <li class="change">Carroms</li>
                    <li class="change">Table tennis</li>
                  </ul>
                </div>
              </a>
            </li>
            <li class="sidemenu-item"><a class="change" href="#">NSS</a></li>
            <li class="sidemenu-item"><a class="change" href="#">NCC</a></li>
            <li class="sidemenu-item"><a class="change" href="#">Incubation Centers</a></li>
            <li class="sidemenu-item"><a class="change" href="#">SAC</a></li>
            <li class="sidemenu-item"><a class="change" href="#">Gym</a></li>
            <li class="sidemenu-item"><a class="change" href="#">Studdent Orginations</a></li>
            <li class="sidemenu-item"><a class="change" href="#">Clubs</a></li>
          </ul>
        </div>
      </div>
      <div class="content-column col-md-8 col-lg-9">
        <div class="bread-crumb">
          <ul class="breadcrumb">
            <li><a href="./index.php">Home</a></li>
            <li><a href="#">Campus-Life</a></li>
            <span id="fill"></span>
          </ul>

          <h1><span id="heading">Campus Life</span></h1>
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
</div>
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
    })
  });
  </script>
<?php include './includes/footer.php' ?>