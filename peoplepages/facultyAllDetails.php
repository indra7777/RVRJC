<?php $conf=$_SESSION['conUL'];  $dborder="green"; $dhedcolor="green"; $dtablewidth="95%";  
$branchF=$branch; $facultyid=$facultyid;
$resf2=mysqli_query($conf,"SELECT * FROM displayorder WHERE facultyid='$facultyIDpart' and dept='$branch'") ; 
$rowaf2=mysqli_fetch_array($resf2); 
$eduqual=$rowaf2['eduqual'];  $servexp=$rowaf2['servexp'];  $resegrants=$rowaf2['resegrants'];   $adminexp=$rowaf2['adminexp'];   
$honors=$rowaf2['honors'];  $books=$rowaf2['books'];  $journals=$rowaf2['journals'];   $confer=$rowaf2['confer'];   
$fdporg=$rowaf2['fdporg'];  $fdpattnd=$rowaf2['fdpattnd'];  $subhandl=$rowaf2['subhandl']; $scholars=$rowaf2['scholars'];


     if ($eduqual==$orderslno) { include "./csmDisplay/qualificationdetails.php"; }
 
else if ($journals==$orderslno) {include "./csmdisplay/journalpublications.php"; } 

else if ($servexp==$orderslno) { include "./csmDisplay/workexperdetails.php"; } 

else if ($resegrants==$orderslno) { include "./csmDisplay/grantsdetails.php";} 

else if ($adminexp==$orderslno) {include "./csmDisplay/adminstrexperdetails.php"; } 

else if ($honors==$orderslno) { include "./csmDisplay/honordetails.php"; }
else if ($books==$orderslno) { include "./csmDisplay/booksdetails.php"; } 



else if ($confer==$orderslno) { include "./csmdisplay/conferencepublications.php";  } 

else if ($fdporg==$orderslno) { include "./csmdisplay/workshopsorganised.php";} 

else if ($fdpattnd==$orderslno) { include "./csmdisplay/workshopsattended.php"; } 

else if ($subhandl==$orderslno) { include "./csmdisplay/subjectshandled.php";} 

else if ($scholars==$orderslno) { include "./csmdisplay/scholarsdetails.php";} 

else {}
