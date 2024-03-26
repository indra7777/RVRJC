<?php include './includes/header.php' ?>
<main class="inner-page-container">
  <div class="incontainer">
    <div class="row" >
      <div class="sidebar col-md-3">
        <div class="sidebar-sticky">
          <h2>About</h2>
          <ul class="sidemenu-items-box">
            <li class="sidemenu-item"><a class="change dropdown" href="#">RVRJC History</a></li>


            <li class="sidemenu-item"><a>
                <input class="sub-radio" type="radio" name="accordion" id="vm">
                <label class="change" for="vm">Vision and Mission</label>
                <div class="sub-content">
                  <ul class="sidemenu-item">
                    <li class="change">Vision</li>
                    <li class="change">Mission</li>
                  </ul>
                </div>
              </a>
            </li>

            <li class="sidemenu-item"><a class="change dropdown" href="#">Quality Policy</a></li>

            <li class="sidemenu-item"><a class="change dropdown" href="#">Values and Core Principles</a></li>

            <li class="sidemenu-item"><a>
                <input class="sub-radio" type="radio" name="accordion" id="achive">
                <label class="change" for="achive">Achievements</label>
                <div class="sub-content">
                  <ul class="sidemenu-item">
                    <li class="change">Accreditation and Affiliation</li>
                    <li class="change">Ranking and Recognition</li>
                  </ul>
                </div>
              </a>
            </li>

            <li class="sidemenu-item"><a>
                <input class="sub-radio" type="radio" name="accordion" id="management">
                <label class="change" for="management">Management</label>
                <div class="sub-content">
                  <ul class="sidemenu-item">
                    <li class="change">About NES</li>
                    <li class="change">Founders</li>
                    <li class="change">Donor trusts and Commercial establishments</li>
                    <li class="change">Message from the President</li>
                    <li class="change">Other Institutions</li>
                  </ul>
                </div>
              </a>
            </li>

            <li class="sidemenu-item"><a class="change dropdown" href="#">Organizational Map</a></li>

            <li class="sidemenu-item"><a>
                <input class="sub-radio" type="radio" name="accordion" id="alumni">
                <label class="change" for="alumni">Alumni</label>
                <div class="sub-content">
                  <ul class="sidemenu-item">
                    <li class="change">About Alumni</li>
                    <li class="change">Mission & Objectives</li>
                    <li class="change">Alumni Meets</li>
                    <li class="change">Committee</li>
                    <li class="change">Office Barrers</li>
                    <li class="change">Alumni Registration</li>
                    <li class="change">Members Department wise</li>
                    <li class="change">Alumni Videos</li>
                    <li class="change">Contact Information</li>
                  </ul>
                </div>
              </a>
            </li>



          </ul>
        </div>
      </div>
      <div class="content-column col-md-8 col-lg-9" id="reload" >
        <div class="bread-crumb">
          <ul class="breadcrumb">
            <li><a href="./index.php">Home</a></li>
            <li><a href="#">About</a></li>
            <span id="fill"></span>


          </ul>
          <h1><span id="heading">About</span></h1>
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
  document.querySelectorAll(".change").forEach(item => {

    item.addEventListener("click", function (e) {
      document.querySelectorAll(".change").forEach(item => {
        item.style.fontWeight = "normal";
      });

      e.target.style.fontWeight = "bold";
e.target.style.color="#660000";

      document.getElementById("fill").innerHTML = `<li><a id="fill" href="#">${e.target.innerText}</a></li>`;
      document.getElementById("heading").innerHTML = `${e.target.innerText}`;

      switch (e.target.innerText) {
        case "RVRJC History":
          document.getElementById("box").innerHTML = `<?php include './about_pages/rvr_history.php' ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;

        case "Vision":
          document.getElementById("box").innerHTML = `<?php include './about_pages/vision.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;

        case "Mission":
          document.getElementById("box").innerHTML = `<?php include './about_pages/mission.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "Quality Policy":
          document.getElementById("box").innerHTML = `<?php include './about_pages/quality_policy.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "Values And Core Principles":
          document.getElementById("box").innerHTML = `<?php include './about_pages/values&core_principles.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "Accreditation and Affiliation":
          document.getElementById("box").innerHTML = `<?php include './about_pages/accrediation&affiliation.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "Ranking and Recognition":
          document.getElementById("box").innerHTML = `<?php include './about_pages/ranking.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "About NES":
          document.getElementById("box").innerHTML = `<?php include './about_pages/aboutNES.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "Donor trusts and Commercial establishments":
          document.getElementById("box").innerHTML = `<?php include './about_pages/donor_trusts.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "Founders":
          document.getElementById("box").innerHTML = `<?php include './about_pages/founders.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "Message from the President":
          document.getElementById("box").innerHTML = `<?php include './about_pages/president_message.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "Other Institutions":
          document.getElementById("box").innerHTML = `<?php include './about_pages/other_institutions.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "About Alumni":
          document.getElementById("box").innerHTML = `<?php include './about_pages/about_alumni.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "Mission & Objectives":
          document.getElementById("box").innerHTML = `<?php include './about_pages/alumni_mission&obj.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "Alumni Meets":
          document.getElementById("box").innerHTML = `<?php include './about_pages/alumni_meets.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "Committee":
          document.getElementById("box").innerHTML = `<?php include './about_pages/alumni_committee.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "Office Barrers":
          document.getElementById("box").innerHTML = `<?php include './about_pages/alumni_office_barrers.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "Alumni Registration":
          document.getElementById("box").innerHTML = `<?php include './about_pages/alumni_registration.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "Members Department wise":
          document.getElementById("box").innerHTML = `<?php include './about_pages/alumni_members.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "Alumni Videos":
          document.getElementById("box").innerHTML = `<?php include './about_pages/alumni_videos.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
        case "Contact Information":
          document.getElementById("box").innerHTML = `<?php include './about_pages/alumni_contact.php'; ?>`;
          localStorage.setItem("aboutSelectedOption", document.getElementById("reload").innerHTML); break;
      }
    })
  });
  const savedOption = localStorage.getItem("aboutSelectedOption");
  if (savedOption) {
    reload.innerHTML = savedOption;
  }
</script>
<?php include './includes/footer.php' ?>