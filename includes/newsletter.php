<section id="news-letter" data-aos="" data-aos-duration="1000" class="mx-5">
    <div class="d-flex justify-content-center align-items-center">
        <h2 class="text-capitalize text-center fw-bolder section-heading">News Letter</h2>
    </div>
    <div  class='my-2 mx-3 news-letter-container' data-bs-ride="">
        <div class='news-letter-box navbar-nav-scroll scrollbar-lady-lips' id="news-letters-container">
            <!-- flip-card-container -->
            <!-- <div class="flip-card-container" style="--hue: 220">
                <div class="flip-card">
                    <div class="card-front">
                        <figure class="figure-newsltr">
                            <canvas id="the-canvas" class="canvas-box" width="100%" height="100%" frameborder="0" scrolling="auto" target="Message"></canvas>
                        </figure>
                    </div>

                    <div class="card-back">
                        <a href="http://drive.google.com/file/d/1RIPSldytNrCBO5vyCbakBS8GJguOiXjH/view?usp=sharing" target="_blank" rel="noopener noreferrer"> 
                        <button type="button" class="btn-book-newsletter">Jan-June 2020</button></a>
                    </div>
                </div>
            </div> -->
            <!-- /flip-card-container -->
        </div>
    </div>
    
</section>
<script
      src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/4.0.379/pdf.mjs"
      type="module"
></script>
<script type="module">
      // If absolute URL from the remote server is provided, configure the CORS
      // header on that server.
      var pdf_urls1 = ["./newsletters/July-Dec2019.pdf","./newsletters/Jan-June2020.pdf","./newsletters/July-Dec2019.pdf","./newsletters/Jan-June2020.pdf"]
      var pdf_urls2 = ["http://drive.google.com/file/d/1RIPSldytNrCBO5vyCbakBS8GJguOiXjH/view?usp=sharing","http://drive.google.com/file/d/1RIPSldytNrCBO5vyCbakBS8GJguOiXjH/view?usp=sharing","http://drive.google.com/file/d/1RIPSldytNrCBO5vyCbakBS8GJguOiXjH/view?usp=sharing","http://drive.google.com/file/d/1RIPSldytNrCBO5vyCbakBS8GJguOiXjH/view?usp=sharing"]
      var years = ["July-Dec2019","Jan-June2020","July-Dec2019","Jan-June2020"]
      // Loaded via <script> tag, create shortcut to access PDF.js exports.
      var { pdfjsLib } = globalThis;
      var news_letters_container = document.getElementById("news-letters-container");

      // The workerSrc property shall be specified.
      pdfjsLib.GlobalWorkerOptions.workerSrc =
        "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/4.0.379/pdf.worker.mjs";

      // Asynchronous download of PDF
      for(let indx in pdf_urls1){
        add_newsletter(pdf_urls1[indx],pdf_urls2[indx],years[indx]);
      }

      function add_newsletter(pdf_url1,pdf_url2,year){
        var loadingTask = pdfjsLib.getDocument(pdf_url1);
        loadingTask.promise.then(
          function (pdf) {
            console.log("PDF loaded");

            // Fetch the first page
            var pageNumber = 1;
            pdf.getPage(pageNumber).then(function (page) {
              console.log("Page loaded");

              var scale = 1.5;
              var viewport = page.getViewport({ scale: scale });

              // Prepare canvas using PDF page dimensions
              var fcc = document.createElement("div");
              var fc = document.createElement("div");
              var cf = document.createElement("div");
              var fn = document.createElement("figure");
              var cb = document.createElement("div");
              var pdf_a = document.createElement("a");
              var bbn = document.createElement("span");
              var icon = document.createElement("div");
              var icon_i = document.createElement("i");
              pdf_a.setAttribute("target","_blank");
              pdf_a.href=pdf_url2
              bbn.innerText = year

              fcc.classList.add("flip-card-container")
              fc.classList.add("flip-card")
              cf.classList.add("card-front")
              fn.classList.add("figure-newsltr")
              cb.classList.add("card-back")
              pdf_a.classList.add("btn-book-newsletter")
              icon.classList.add("news-icon-box")
              icon_i.classList.add("uil")
              icon_i.classList.add("uil-arrow-circle-down")


              fcc.appendChild(fc)
              fc.appendChild(cf)
              fc.appendChild(cb)
              cf.appendChild(fn)
              cb.appendChild(pdf_a)
              icon.appendChild(icon_i)
              pdf_a.appendChild(bbn)
              pdf_a.appendChild(icon)

              var canvas = document.createElement("canvas")
              canvas.classList.add("canvas-box")
              var context = canvas.getContext("2d");
              canvas.height = viewport.height;
              canvas.width = viewport.width;
              fn.appendChild(canvas)
              news_letters_container.appendChild(fcc)

              // Render PDF page into canvas context
              var renderContext = {
                canvasContext: context,
                viewport: viewport,
              };
              var renderTask = page.render(renderContext);
              renderTask.promise.then(function () {
                console.log("Page rendered");
              });
            });
          },
          function (reason) {
            // PDF loading error
            console.error(reason);
          }
        );
      }
      
      
    </script>

<!-- News Letters Ends  -->