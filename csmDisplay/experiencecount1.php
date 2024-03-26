<?php
$conf=$_SESSION['conUL'];
$resR1=mysqli_query($conf,"SELECT * FROM rdindexingids WHERE facultyid='$facultyIDpart' and branch='$branch'") or die ("error");  $rownumR1=mysqli_num_rows($resR1);  $resaR1=mysqli_fetch_array($resR1); 
$orcidR=$resaR1['orcid'];  $scopusR=$resaR1['scopus1'];  $webofscR=$resaR1['websc']; $googlescolarR=$resaR1['googlescolar'];  $vidwanidR=$resaR1['vidwanid'];

$doj = date("Y-m-d", strtotime($doj)); 

$resE1=mysqli_query($conf,"SELECT * FROM expriencedetails WHERE facultyid='$facultyIDpart' and dept='$branch' and fromdate <'$doj' order by fromdate ASC") or die ("error");  $rownumE1=mysqli_num_rows($resE1);  //echo $rownumE1;  

//$orcidR=$resaR1['orcid'];  $webofscR=$resaR1['websc']; $googlescolarR=$resaR1['googlescolar']; 

//$date1=$doj; //echo $date1;


$l1=0;
while ($resaE1=mysqli_fetch_array($resE1)) { $l1=$l1+1; $fromdate=$resaE1['fromdate'];  $todate=$resaE1['todate'];

     if ($l1==1)  {$prevdt1st=$fromdate; $prevdt1en=$todate;}	else if ($l1==2) {$prevdt2st=$fromdate; $prevdt2en=$todate;}
else if ($l1==3)  {$prevdt3st=$fromdate; $prevdt3en=$todate;}	else if ($l1==4) {$prevdt4st=$fromdate; $prevdt4en=$todate;}
else if ($l1==5)  {$prevdt5st=$fromdate; $prevdt5en=$todate;}	else if ($l1==6) {$prevdt6st=$fromdate; $prevdt6en=$todate;}
else if ($l1==7)  {$prevdt7st=$fromdate; $prevdt7en=$todate;}	else if ($l1==8) {$prevdt8st=$fromdate; $prevdt8en=$todate;}
else if ($l1==9)  {$prevdt9st=$fromdate; $prevdt9en=$todate;}	else if ($l1==10) {$prevdt10st=$fromdate; $prevdt10en=$todate;}
else if ($l1==11) {$prevdt11st=$fromdate; $prevdt11en=$todate;}	else if ($l1==12) {$prevdt12st=$fromdate; $prevdt12en=$todate;}
else if ($l1==13) {$prevdt13st=$fromdate; $prevdt13en=$todate;}	else if ($l1==14) {$prevdt14st=$fromdate; $prevdt14en=$todate;}
else if ($l1==15) {$prevdt15st=$fromdate; $prevdt15en=$todate;}	else if ($l1==16) {$prevdt16st=$fromdate; $prevdt16en=$todate;}
else if ($l1==17) {$prevdt17st=$fromdate; $prevdt17en=$todate;}	else if ($l1==18) {$prevdt18st=$fromdate; $prevdt18en=$todate;}
else if ($l1==19) {$prevdt19st=$fromdate; $prevdt19en=$todate;}	else if ($l1==20) {$prevdt20st=$fromdate; $prevdt20en=$todate;}
else {} }
 
if ($dor=="0000-00-00") {$date2display=date("d-m-Y"); $date2=date("Y-m-d");  } 
else { $date2=$dor; $date2display=date("d-m-Y",strtotime($date2));  }

$doj = date("Y-m-d", strtotime($doj)); 
$diff = abs(strtotime($date2) - strtotime($doj));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

$prevdiff1=abs(strtotime($prevdt1en) - strtotime($prevdt1st));	$prevdiff2=abs(strtotime($prevdt2en) - strtotime($prevdt2st));
$prevdiff3=abs(strtotime($prevdt3en) - strtotime($prevdt3st));	$prevdiff4=abs(strtotime($prevdt4en) - strtotime($prevdt4st));
$prevdiff5=abs(strtotime($prevdt5en) - strtotime($prevdt5st));	$prevdiff6=abs(strtotime($prevdt6en) - strtotime($prevdt6st));
$prevdiff7=abs(strtotime($prevdt7en) - strtotime($prevdt7st));	$prevdiff8=abs(strtotime($prevdt8en) - strtotime($prevdt8st));
$prevdiff9=abs(strtotime($prevdt9en) - strtotime($prevdt9st));	$prevdiff10=abs(strtotime($prevdt10en) - strtotime($prevdt10st));
$prevdiff11=abs(strtotime($prevdt11en) - strtotime($prevdt11st));	$prevdiff12=abs(strtotime($prevdt12en) - strtotime($prevdt12st));
$prevdiff13=abs(strtotime($prevdt13en) - strtotime($prevdt13st));	$prevdiff14=abs(strtotime($prevdt14en) - strtotime($prevdt14st));
$prevdiff15=abs(strtotime($prevdt15en) - strtotime($prevdt15st));	$prevdiff16=abs(strtotime($prevdt16en) - strtotime($prevdt16st));
$prevdiff17=abs(strtotime($prevdt17en) - strtotime($prevdt17st));	$prevdiff18=abs(strtotime($prevdt18en) - strtotime($prevdt18st));
$prevdiff19=abs(strtotime($prevdt19en) - strtotime($prevdt19st));	$prevdiff20=abs(strtotime($prevdt20en) - strtotime($prevdt20st));

$prevdiff = ($prevdiff1+$prevdiff2+$prevdiff3+$prevdiff4+$prevdiff5+$prevdiff6
		+$prevdiff7+$prevdiff8+$prevdiff9+$prevdiff10+$prevdiff11+$prevdiff12
		+$prevdiff13+$prevdiff14+$prevdiff15+$prevdiff16+$prevdiff17+$prevdiff18+$prevdiff19+$prevdiff20); 

$prevyears = floor($prevdiff / (365*60*60*24));
$prevmonths = floor(($prevdiff - $prevyears * 365*60*60*24) / (30*60*60*24));
$prevdays = floor(($prevdiff - $prevyears * 365*60*60*24 - $prevmonths*30*60*60*24)/ (60*60*24)); //echo $prevdiff;

$totdiff=$prevdiff+$diff;
$totyears = floor($totdiff / (365*60*60*24));
$totmonths = floor(($totdiff - $totyears * 365*60*60*24) / (30*60*60*24));
$totdays = floor(($totdiff - $totyears * 365*60*60*24 - $totmonths*30*60*60*24)/ (60*60*24));

//echo "$years years $months months<br>";
//echo "$prevyears years $prevmonths months<br>";
//echo "$totyears years $totmonths months<br>";


