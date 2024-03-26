<?php

$conf=$_SESSION['conUL']; $branchF=$branch; $facultyid=$facultyIDpart;

$result2=mysqli_query($conf,"SELECT * FROM journalpublications WHERE (facultyid='$facultyid' OR coauth1='$facultyid' OR coauth2='$facultyid') and SUBSTRING(dept,1,2)='$branchF'") or die("Query 2 failed ");

$i=0; $j=0; $c=0; $ijtot=0; $njtot=0; 
while ($rowa2 = mysqli_fetch_array($result2)) { $pubtype=$rowa2['pubtype'];  
if ($pubtype=="IJ") {$ijtot=$ijtot+1;} else if ($pubtype=="NJ") {$njtot=$njtot+1;}  else {$ijtot=$ijtot; $njtot=$njtot;} }

$journaltot=$ijtot+$njtot;

$result2=mysqli_query($conf,"SELECT * FROM confpublications WHERE (facultyid='$facultyid' OR coauth1='$facultyid' OR coauth2='$facultyid') and SUBSTRING(dept,1,2)='$branchF'");

$ictot=0; $nctot=0; 
while ($rowa2 = mysqli_fetch_array($result2)) { $pubtype=$rowa2['pubtype'];  
if ($pubtype=="IC") {$ictot=$ictot+1;} else if ($pubtype=="NC") {$nctot=$nctot+1;}  else {$ictot=$ictot; $nctot=$nctot;} }

$conftot=$ictot+$nctot;

$pubtot=$journaltot+$conftot;

////////////////////////////

$result2=mysqli_query($conf,"SELECT * FROM schalorsdetails WHERE facultyid='$facultyid' and SUBSTRING(dept,1,2)='$branchF'");
$rownum2=mysqli_num_rows($result2); $rownum2=mysqli_num_rows($result2); $phdtotal=$rownum2;

$result21=mysqli_query($conf,"SELECT * FROM schalorsdetails WHERE facultyid='$facultyid' and SUBSTRING(dept,1,2)='$branchF' and titleofthethesis like '%submitted%'"); $rownum21=mysqli_num_rows($result21);

if ($rownum21==0) {$phdsubmitted="--";} else {$phdsubmitted=$rownum21;}

$phdcompleted=0; $ongoing=0; 
while ($rowa2 = mysqli_fetch_array($result2)) { $titleofthethesis=$rowa2['titleofthethesis']; $yearofaward=$rowa2['yearofaward'];  

if ($yearofaward!=='0000-00-00') {$phdcompleted=$phdcompleted+1;} else {$phdcompleted=$phdcompleted;}  }

$phdongoing=$rownum2-$rownum21-$phdcompleted;   

//echo "$rownum2-$rownum21-$phdcompleted-$phdongoing";

