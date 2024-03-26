<?php

$resf1 = mysqli_query($conf, "SELECT * FROM faculty WHERE facultyid='$facultyIDpart' and branch='$branch'");
$rownumf1 = mysqli_num_rows($resf1);
$resfa1 = mysqli_fetch_array($resf1);  //echo "ABC-$rownumf1";

$branch = $resfa1['branch'];
$salutation = $resfa1['salutation'];
$faculty_name = $resfa1['fname'];
$gender = $resfa1['gender'];
$designation = $resfa1['designation'];
$qualification = $resfa1['qualification'];
$researchinterest = $resfa1['researchinterest'];
$specialisation = $resfa1['specialisation'];

$email = $resfa1['email'];
$offext = $resfa1['offext'];
$cellno = $resfa1['cellno'];
$nt = $resfa1['nt'];
$dor = $resfa1['dor'];
$doj = $resfa1['doj'];
$dojdisplay = date('d-m-Y', strtotime($doj));
$dob = $resfa1['dob'];
$dobdisplay = date('d-m-Y', strtotime($dob));//echo $doj;
$nj = $resfa1['nj'];
$nc = $resfa1['nc'];
$ij = $resfa1['ij'];
$ic = $resfa1['ic'];
$books = $resfa1['books'];
$chapters = $resfa1['chapters'];

$phdcom = $resfa1['phdcom'];
$phdsub = $resfa1['phdsub'];
$phdong = $resfa1['phdong'];
$mtproj = $resfa1['mtproj'];
$btproj = $resfa1['btproj'];
$profmem = $resfa1['profmem'];
$contot = $nc + $ic;
$jourtot = $nj + $ij;
$conftot = $nc + $ic;
$pubtot = $jourtot + $conftot;

$scopcita = $resfa1['scopcita'];
$scophindex = $resfa1['scophindex'];
$citaupdate = $resfa1['citaupdate'];
$websccita = $resfa1['websccita'];
$webscihindex = $resfa1['webscihindex'];
$citaupdatedisplay = date('d-m-Y', strtotime($citaupdate));
$gogleschcita = $resfa1['gogleschcita'];
$goglehindex = $resfa1['goglehindex'];

$phdtot = $phdcom + $phdsub + $phdong;
include "csmDisplay/experiencecount1.php";

include "../csmdisplay/journalconfecount.php";

$f = 1;
echo "<table border=0 align=center>";
echo "<tr height=30px><td width=20px >$f.&nbsp;</td><td width=240px align=left>Name</td><td width=10px>:</td> 
	<td colspan=2>$salutation $faculty_name</td><td align=center colspan=2 rowspan=7 align='top' width=20%>
<img src='https://rvrjcce.ac.in/login/staffimages/$branch/$facultyIDpart.jpg' alt='image' width='151'  hspace='15' align='top' border=1px style='top: 0px' /><br />$externallink</td></tr>";
$f = $f + 1;

echo "<tr height=30px><td>$f.&nbsp;</td><td>Designation</td><td>:</td><td colspan=2>$designation</td></tr>";
//$f=$f+1; echo "<tr height=30px><td>$f.&nbsp;</td><td>Date of birth</td><td>:</td> <td colspan=2>$dobdisplay</td></tr>"; 
$f = $f + 1;
echo "<tr height=30px><td>$f.&nbsp;</td><td>Qualifications</td><td>:</td> <td colspan=2>$qualification</td></tr>";
$f = $f + 1;
echo "<tr height=30px><td>$f.&nbsp;</td><td>Date of joining in the college</td><td>:</td><td colspan=2>$dojdisplay</td></tr>";
$f = $f + 1;

if ($totyears == 1) {
    $yeardisplay = "Year";
} else {
    $yeardisplay = "Years";
}
if ($totmonths == 1) {
    $monthdisplay = "Month";
} else {
    $monthdisplay = "Months";
}

echo "<tr height=30px><td>$f.&nbsp;</td><td>Total Experience</td><td>:</td>
	<td colspan=2>$totyears $yeardisplay $totmonths $monthdisplay [College: $years Y $months M] (As on $date2display)</td></tr>";
$f = $f + 1;
echo "<tr height=30px><td>$f.&nbsp;</td> <td>Area of Specialization</td><td>:</td><td colspan=2>$specialisation</td></tr>";
$f = $f + 1;
echo "<tr height=30px><td>$f.&nbsp;</td> <td>Research Interests</td><td>:</td> <td colspan=4>$researchinterest</td></tr>";
$f = $f + 1;
echo "<tr height=30px><td>$f.</td>";
if ($phdtotal == 0) {
    $guidance = "Project Guidance";
} else {
    $guidance = "Research Guidance";
}
echo "<td>$guidance</td><td>:</td><td colspan=5>";
if ($phdtotal == 0) {
    if ($mtproj == "") {
        $mtprojdisplay = "-";
    } else {
        $mtprojdisplay = $mtproj;
    }
    if ($btproj == "") {
        $btprojdisplay = "-";
    } else {
        $btprojdisplay = $btproj;
    }
    echo "Master&rsquo;s:&nbsp;$mtprojdisplay&nbsp;;&nbsp;&nbsp;&nbsp;Graduate&rsquo;s:&nbsp;$btprojdisplay&nbsp;&nbsp;";
} else {
    echo "PhD:&nbsp;Awarded:&nbsp;$phdcompleted&nbsp;;&nbsp;Submitted:&nbsp;$phdsubmitted&nbsp;;&nbsp;Ongoing:&nbsp;$phdongoing&nbsp;;&nbsp;&nbsp; Master&rsquo;s: $mtproj";
}
echo "</td></tr>";

if ($pubtot == 0) {
    $journaltotdisplay = "-";
    $conftotdisplay = "-";
    $scophindex = "-";
    $webscihindex = "-";
    $goglehindex = "-";
    $scopcita = "-";
    $websccita = "-";
    $gogleschcita = "-";
} else {
    $journaltotdisplay = $journaltot;
    $conftotdisplay = $conftot;
    $scophindex = $scophindex;
    $webscihindex = $webscihindex;
    $goglehindex = $goglehindex;
    $scopcita = $scopcita;
    $websccita = $websccita;
    $gogleschcita = $gogleschcita;
}

$f = $f + 1;
echo "<tr height=30px><td>$f.&nbsp;</td><td>No. of Papers Published</td><td>:</td>
<td colspan=4>$pubtot&nbsp;(Journals:&nbsp;$journaltotdisplay&nbsp;&nbsp;Conferences:&nbsp;$conftotdisplay&nbsp;)</td></tr>";

$f = $f + 1;
echo "<tr height=30px><td>$f.</td><td >Author h-index Details</td><td>:</td><td colspan=4>Scopus: $scophindex; Web of Science: $webscihindex; Google Scholar : $goglehindex </td></tr>";

$f = $f + 1;
echo "<tr height=30px><td>$f.</td><td >Publication Citation Details</td><td>:</td><td>Scopus: $scopcita; Web of Science: $websccita; Google Scholar : $gogleschcita </td>";

if ($orcidR == NULL && $scopusR == NULL && $webofscR == NULL && $googlescolarR == NULL && $vidwanidR == NULL) {
    echo "<td align='center' colspan=3 rowspan=2></td>";
} else {

    echo "<td align='center' rowspan=2><a href='https://orcid.org/$orcidR' target='orcid.widget' style='vertical-align:top;'><img src='images/orcid1.jpg' width=80 height=40 alt='ORCID iD icon'><font style='font-size:14px;'></a><br>
<a href='https://www.scopus.com/authid/detail.uri?authorId=$scopusR' target='_blank;' style='vertical-align:top;'><img src='images/scopus.jpg' width=100 height=40 alt='Scopus icon'></a></td>
<td align='center' rowspan=2><a href='https://scholar.google.com/citations?user=$googlescolarR' target='_blank;' style='vertical-align:top;'><img src='images/googlescholor.png' width=80 height=30 alt='google icon'></a><br>
<a href='https://vidwan.inflibnet.ac.in/profile/$vidwanidR' target='_blank;' style='vertical-align:top;'><img src='images/vidwan.png' width=80 height=28 alt='vidwan icon'></a></td>
<td align='center' rowspan=2><span id='badgeCont31'><script type='text/javascript' src='https://publons.com/mashlets?el=badgeCont31&rid=$webofscR'></script></span></td>";
}
echo "</tr>";

if ($profmem == "") {
    $profmemdisplay = "---";
} else {
    $profmemdisplay = $profmem;
}

$f = $f + 1;
echo "<tr height=30px><td>$f.</td><td >Membership of Professional Societies</td><td>:</td><td>$profmemdisplay</td></tr>";
echo "</table>";

$details = strtoupper($_GET['details']);
if ($details !== "Y") {
    echo "</table></div>";

    $height1 = "35px";
    $dtablewidth = "95%";
    include "csmDisplay/patentspublications.php";
}




