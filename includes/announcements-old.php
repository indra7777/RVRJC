<section id="Announcements">
    <div class="d-flex justify-content-center align-items-center mb-2" >
    <h2 class="text-capitalize text-centerer section-heading" >Announcements</h2>
        <!-- <div><button style="background-color: #660000;color:white" class="btn">Archieves</button></div> -->
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 announcements-menu-box" >
                <!-- Tabs nav -->
                <div class="nav flex-row nav-pills justify-content-evenly align-content-center text-center nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="horizantal">
                    <a class="nav-link p-3 active" id="v-pills-latestnews-tab" data-bs-toggle="pill" href="#v-pills-latestnews" role="tab" aria-controls="v-pills-latestnews" aria-selected="true">
                        <span class="font-weight-bold  text-uppercase">latest news</span></a>
                        <div class="d-flex justify-content-center align-items-center" style="color: var(--bg-main-color);">||</div>
                    <a class="nav-link p-3" id="v-pills-acadamics-tab" data-bs-toggle="pill" href="#v-pills-acadamics" role="tab" aria-controls="v-pills-acadamics" aria-selected="false">
                        <span class="font-weight-bold text-uppercase">Acadamics</span></a>
                        <div class="d-flex justify-content-center align-items-center" style="color: var(--bg-main-color);">||</div>
                    <a class="nav-link p-3" id="v-pills-tandp-tab" data-bs-toggle="pill" href="#v-pills-tandp" role="tab" aria-controls="v-pills-tandp" aria-selected="false">
                        <span class="font-weight-bold text-uppercase">t&p</span></a>
                        <div class="d-flex justify-content-center align-items-center" style="color: var(--bg-main-color);">||</div>
                    <a class="nav-link p-3" id="v-pills-education-tab" data-bs-toggle="pill" href="#v-pills-education" role="tab" aria-controls="v-pills-education" aria-selected="false">
                        <span class="font-weight-bold text-uppercase">Examinations</span></a>
                    </div>
            </div>

            <div class="col-md-12" >
                <!-- Tabs content -->
                <div class="tab-content py-3 notice-main-content-container shadow-lg" id="v-pills-tabContent">
                    <div class="notice-main-content-box tab-pane show active px-5"  id="v-pills-latestnews" role="tabpanel" aria-labelledby="v-pills-latestnews-tab" tabindex="0">
                            
<?php
		$localhost="localhost"; $dbuser="exam";	$dbpass="exam"; $dbname="newsupdates"; 
		
		$conn = new mysqli($servername, $dbuser, $dbpass, $dbname);
		
		if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
		} 

		$result = $conn->query("SELECT * from news WHERE vdate >= now() ORDER BY sdate DESC");
		$k=0;
		
		echo "<ul style='list-style-type: square;'>";		
		if ($result->num_rows > 0) {
    	while($row = $result->fetch_assoc()) {
               	$date=$row['vdate'];
               	$d=date('Y-m-d H:i:s');
    
 		$date1 = strtotime($date);
  		$date2 = strtotime($d);
		$diff = abs($date1 - $date2);
		$years = floor($diff / (365*60*60*24));
     		$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
		$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
		//echo "***$days";
              	 		
 

     //echo "<li>$d--$date--$days</li>";

       if($days<=5){
echo '<li class="nav-item"><a target="_blank" href="' . $row['url'] . '">' . $row['info'] . '</a></li>';

}else{
      echo '<li class="nav-item"><a target="_blank" href="' . $row['url'] . '">' . $row['info'] . '</a></li>';   	}}
		}
		echo "</ul>";
?>
</div>
                    <div class="notice-main-content-box tab-pane fade-left  px-5"  id="v-pills-acadamics" role="tabpanel" aria-labelledby="v-pills-acadamics-tab" tabindex="0">
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                    </div> 
                    <div class="notice-main-content-box tab-pane fade-left px-5"  id="v-pills-tandp" role="tabpanel" aria-labelledby="v-pills-tandp-tab">
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>       
                    </div>
                    
                    <div class="notice-main-content-box tab-pane fade-left px-5"  id="v-pills-education" role="tabpanel" aria-labelledby="v-pills-education-tab">
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/1F3xERKASXaAu-FweWLtV6kNiUjS9J8iY/view?usp=drive_link">Apply for revaluation / personal verification of the examinations for B.Tech., Semester II[first year]; Semester IV[second year];Semester VI[Third year][R18],I to IV B.Tech.,II-Semester[R16] supplementary students.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/155KtuyBAvO4mohbYUbhKKBnBNa-DfzVA/view?usp=drive_link">Examination fee for B.Tech., Lateral entry semester III(second year)[R20] students and B.Tech., semester III & IV, (Second year)(R-20 Regulations)for the academic year 2023-24.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                        <li class="nav-item"><a  href="https://drive.google.com/file/d/13auoDPWwvF6nrol1wKxHaGGzPDv9oBub/view?usp=drive_link">Freshers Day for the academic year 2023-24 will be conducted on 25th November-2023.</a></li>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- news section end -->

