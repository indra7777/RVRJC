<?php 
include("./connect.php"); 
$branch = "CM";
$conf = $_SESSION['conUL'];
$resfaculty1 = mysqli_query($conf, "SELECT * FROM faculty WHERE branch='$branch' AND dor='0000-00-00' AND nt='T'");
?>
<div class="inner-content-box" id="box">
    <div class="inner-content-box" id="box">
        <div class="faculty_list_container" id="general_administration">
            <div class="rvr_council">
                <div class="people_block">
                    <div class="faculty_list faculty-block-grid">

                        <?php
			$resfaculty = mysqli_query($conf, "SELECT * FROM faculty WHERE branch='$branch' AND nt='T' ORDER BY sno ASC");
                        $i = 1;
                        while ($row = mysqli_fetch_array($resfaculty)) {
                            $facultyid = $row['facultyid'];
                            $branch = $row['branch'];
                            $sno = $row['sno'];
                            $salutation = $row['salutation'];
                            $facultyname = $row['fname'];
                            $gender = $row['gender'];
                            $designation = $row['designation'];
                            $nt = $row['nt'];
                            $email = $row['email'];
                            $offext = $row['offext'];
                            $mobileNo = $row['cellno'];
                            $qualification = $row['qualification'];
                            $doj = $row['doj'];
                            $dor = $row['dor'];
                            $aadharno = $row['aadharno'];

                            $resfacultycheck = mysqli_query($conf, "SELECT * FROM users WHERE aadharno='$aadharno' AND remarks='E'");
                            $rownumfacultycheck = mysqli_num_rows($resfacultycheck);

                            if ($sno == NULL || $sno == 0) {
                                continue;
                            }

                            if ($dor == NULL || $dor == "0000-00-00") {
                                $dordisplay = NULL;
                            } else {
                                $dorDisp = date('d-m-Y', strtotime($dor));
                            }

                            $test = NULL;
                            if (($dor !== "0000-00-00" && $dor < $ayearstdate) || ($dor == "0000-00-00" && $doj > $ayearenddate)) {
                                $test = "Y";
                            }

                            $aictetest = NULL;
                            if (($dor !== "0000-00-00" && $dor < $aicteayend1) || ($dor == "0000-00-00" && $doj > $aicteayst1)) {
                                $aictetest = "<font color=red>*</font>";

                                if ($doj !== "0000-00-00" && $doj > $aicteayst1) {
                                    $dojd = date('d-m-Y', strtotime($doj));
                                    $dojdisplay = "<br><font style='color:green;'>Joined on $dojd</font>";
                                } else {
                                    $dojdisplay = NULL;
                                }
                            } else {
                                $aictetest = NULL;
                                $dordisplay = NULL;
                                $dojdisplay = NULL;
                            }
                            ?>

                            <div class="faculty-grid-item">
                                <div class="staff-image">
                                     <a href="facultyProfile.php?facultyid=<?php echo $facultyid ?>&branch=<?php echo $branch ?>">
            				<img src="./csmDisplay/grb.jpg" alt="Name">
        			     </a>
                                </div>
                                <div class="staff-data">
                                    <h6> <a href="facultyProfile.php?facultyid=<?php echo $facultyid ?>&branch=<?php echo $branch ?>">
                			<?php echo "$salutation. $facultyname" ?>
            			    </a></h6>
                                    <p><?php echo $designation ?></p>
                                    <p><?php echo $mobileNo ?></p>
                                </div>
                            </div>

                            <?php
                        }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
