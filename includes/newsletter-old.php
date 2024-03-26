<section id="newsletters" data-aos="" data-aos-duration="1000" class="mx-5">
    <div class="d-flex justify-content-center align-items-center">
        <h2 class="text-capitalize text-center fw-bolder section-heading">News Letter</h2>
    </div>
    <div  class='my-2 mx-3 news-letter-container' data-bs-ride="">
        <div class='row news-letter-box navbar-nav-scroll scrollbar-lady-lips'>
            <!-- flip-card-container -->
            <div class="flip-card-container" style="--hue: 220">
                <div class="flip-card">
                    <div class="card-front">
                        <figure class="figure-newsltr">
                            <canvas id="the-canvas" class="canvas-box" class="canvas-box" width="100%" height="100%" frameborder="0" scrolling="auto" target="Message"></canvas>
                        </figure>
                    </div>

                    <div class="card-back">
                        <a href="http://drive.google.com/file/d/1RIPSldytNrCBO5vyCbakBS8GJguOiXjH/view?usp=sharing" target="_blank" rel="noopener noreferrer"> 
                        <button type="button" class="btn-book-newsletter">Jan-June 2020</button></a>
                    </div>
                </div>
            </div>
            <!-- /flip-card-container -->
            <!-- flip-card-container -->
            <div class="flip-card-container" style="--hue: 220">
                <div class="flip-card">
                    <div class="card-front">
                        <figure class="figure-newsltr">
                            <canvas id="the-canvas1" class="canvas-box" width="100%" height="100%" frameborder="0" scrolling="auto" target="Message"></canvas>
                        </figure>
                    </div>

                    <div class="card-back">
                        <button type="button" class="btn-book-newsletter">July-Dec 2019</button>
                    </div>
                </div>
            </div>
            <!-- /flip-card-container -->
            <!-- flip-card-container -->
            <div class="flip-card-container" style="--hue: 220">
                <div class="flip-card">
                    <div class="card-front">
                        <figure class="figure-newsltr">
                            <canvas id="the-canvas2" class="canvas-box" width="100%" height="100%" frameborder="0" scrolling="auto" target="Message"></canvas>
                        </figure>
                    </div>

                    <div class="card-back">
                            <button type="button" class="btn-book-newsletter">Jan-June 2020</button>
                    </div>
                </div>
            </div>
            <!-- /flip-card-container -->
            <!-- flip-card-container -->
            <div class="flip-card-container" style="--hue: 220">
                <div class="flip-card">
                    <div class="card-front">
                        <figure class="figure-newsltr">
                            <canvas id="the-canvas3" class="canvas-box" width="100%" height="100%" frameborder="0" scrolling="auto" target="Message"></canvas>
                        </figure>
                    </div>

                    <div class="card-back">
                        <button type="button" class="btn-book-newsletter">July-Dec 2019</button>
                    </div>
                </div>
            </div>
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
      var url = "./newsletters/Jan-June2020.pdf";
      var url1 = "./newsletters/July-Dec2019.pdf";
      // Loaded via <script> tag, create shortcut to access PDF.js exports.
      var { pdfjsLib } = globalThis;

      // The workerSrc property shall be specified.
      pdfjsLib.GlobalWorkerOptions.workerSrc =
        "https://cdnjs.cloudflare.com/ajax/libs/pdf.js/4.0.379/pdf.worker.mjs";

      // Asynchronous download of PDF
      var loadingTask = pdfjsLib.getDocument(url);
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
            var canvas = document.getElementById("the-canvas");
            var context = canvas.getContext("2d");
            canvas.height = viewport.height;
            canvas.width = viewport.width;

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
      var loadingTask = pdfjsLib.getDocument(url1);
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
            var canvas = document.getElementById("the-canvas1");
            var context = canvas.getContext("2d");
            canvas.height = viewport.height;
            canvas.width = viewport.width;

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
      var loadingTask = pdfjsLib.getDocument(url);
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
            var canvas = document.getElementById("the-canvas2");
            var context = canvas.getContext("2d");
            canvas.height = viewport.height;
            canvas.width = viewport.width;

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
      var loadingTask = pdfjsLib.getDocument(url1);
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
            var canvas = document.getElementById("the-canvas3");
            var context = canvas.getContext("2d");
            canvas.height = viewport.height;
            canvas.width = viewport.width;

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
    </script>

<!-- Researches Ends  -->