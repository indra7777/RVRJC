<section class="counter-container mx-5" id="counter-section">
    <div class="row parallax count">
      <div class="column">
        <div class="counter">
          <div id="odometer-students"></div>
          <span class="plus">+</span>
        </div>
        <h5>Students</h5>
      </div>
      <div class="column">
        <div class="counter">
          <div id="odometer-faculty"></div>
          <span class="plus">+</span>
        </div>
        <h5>Faculty</h5>
      </div>
      <div class="column">
        <div class="counter">
          <div id="odometer-staff"></div>
          <span class="plus">+</span>
        </div>
        <h5>Staff</h5>
      </div>
    </div>
  </section>

  <script src="./js/odometer.js"></script>
  <script>
    // Function to initialize Odometer instances
    function initOdometers() {
      const odStudents = new Odometer({
        el: document.getElementById("odometer-students"),
        format: "(,ddd).dd",
        duration: 3000,
        theme: "default"
      });
      const odFaculty = new Odometer({
        el: document.getElementById("odometer-faculty"),
        format: "(,ddd).dd",
        duration: 3000,
        theme: "default"
      });
      const odStaff = new Odometer({
        el: document.getElementById("odometer-staff"),
        format: "(,ddd).dd",
        duration: 3000,
        theme: "default"
      });

      return { odStudents, odFaculty, odStaff };
    }

    // Function to start counter animation when section is in view
    function startCounterAnimation() {
      const counterSection = document.getElementById("counter-section");
      const { odStudents, odFaculty, odStaff } = initOdometers();

      function animateCounters() {
        const rect = counterSection.getBoundingClientRect();
        const windowHeight = window.innerHeight || document.documentElement.clientHeight;
 
        if (rect.top < windowHeight) {
          // Start the counter animation
          odStudents.update(10000);
          odFaculty.update(700);
          odStaff.update(500);

          // Remove the scroll event listener once counters are animated
          window.removeEventListener("scroll", animateCounters);
        }
      }

      // Attach scroll event listener to trigger animation when section is scrolled into view
      window.addEventListener("scroll", animateCounters);
    }

    // Call the function to start counter animation when the document is loaded
    window.addEventListener("DOMContentLoaded", startCounterAnimation);
  </script>