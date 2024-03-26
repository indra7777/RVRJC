const researchCard = document.querySelector("#research-card-js");
if (researchCard) {
  researchCard.innerHTML = `
  <!-- card start -->
      <div class="flip-card">
          <div class="flip-card-front">
              <div class='card-img'><img src="../images/faculty/KollaSrinivas.png"></div>  
              <div class='card-body'> 
                      <h4>Dr.Kolla Srinivas</h4>
                      <p>A quick description of the front item</p> 
                      <button class="flip-card-btn-turn-to-back">See More</button>
              </div>  
          </div>
          <div class="flip-card-back">
              <div class='card-body'> 
                  <h4>About Research</h4><hr>
                  <p>Some quick example text to build on the card title and make up the bulk of the card's content.</p>      
                  <button class="flip-card-btn-turn-to-front">Know More</button>
              </div>   
          </div>
      </div>     
  <!-- card end -->
    `;
}
