<!-- placements-gallery -->
<section>
  <div class="d-flex justify-content-center align-items-center">
        <h2 class="section-heading">academic events</h2>
    </div>
  <!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="./images/temp.png" height="300px"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/temp1.png" height="300px"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/temp2.png" height="300px"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/temp3.png" height="300px"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/temp4.png" height="300px"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/temp5.png" height="300px"/>
      </div>
      <div class="swiper-slide">
        <img src="./images/temp6.png" height="300px"/>
      </div>
    </div>
  </div>
</section>

<script src='./js/swiper-bundle.min.js'></script>
 <!-- Initialize Swiper -->
 <script>
  var swiper = new Swiper(".mySwiper", {
   effect: "coverflow",
   grabCursor: true,
   centeredSlides: true,
   slidesPerView: "auto",
   coverflowEffect: {
     rotate: 40,
     stretch: 1,
     depth: 10,
     modifier: 1,
     slideShadows: true,
   },
   loop: true,
 });

</script>