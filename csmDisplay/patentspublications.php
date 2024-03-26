<?php 
$conf=$_SESSION['conUL']; $branchF=$branch; $facultyid=$facultyIDpart;
//echo "ABC-$branchF/$facultyid<br>";


$respatent1=mysqli_query($conf,"SELECT a.patentno,a.patenttitle,a.publishdate,a.filingdate,a.grantdate FROM patentslist a JOIN patentauthors b on a.patentno=b.patentno WHERE b.dept='$branchF' and b.facultyid='$facultyid' order by a.filingdate DESC");  $rownumfacul2=mysqli_num_rows($respatent1); //echo "$rownumfacul2";

if ($rownumfacul2>0) { $ip=1; $color = true; if ($rownumfacul2==1) {$text="Patent";} else {$text="Patents";} 
 

echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border=0  width=$dtablewidth>";
echo "<tr height=30px><td align='left'><font style='font-size:$subheadingsize; font-weight:bold; color:$subheadingcolor;'> 
$text Details</font></td>";  echo "</tr>"; 

echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border='1' bgcolor=gray width=$dtablewidth>";
echo "<tr style='font-size:14px;  font-weight:bold; color:white;' bgcolor='#008000' height=25px>
<td align='center' width=1%>SNo </td><td align='center' width=10%>Patent No</td><td align='center' width=40%>Title of the Patent</td>
<td align='center'>Details of Applicants & Inventors</td><td align='center' width=5%>Remarks</td>";echo "</tr>"; 

				
while ($rowa1=mysqli_fetch_array($respatent1)) { $patentno=$rowa1['patentno']; //echo "$patentno<br>";

$respatent3=mysqli_query($conf,"SELECT * FROM patentauthors WHERE dept='$branchF' and patentno='$patentno' and facultyid='$facultyid'"); $rownumfacul3=mysqli_num_rows($respatent3); //echo "$rownumfacul3";

if ($rownumfacul3>0) { $patenttitle=$rowa1['patenttitle'];
$publishdate=$rowa1['publishdate']; $filingdate=$rowa1['filingdate']; $grantdate=$rowa1['grantdate'];  

if ($filingdate==NULL || $filingdate=="0000-00-00") {$filingdateD="---";} 
else {$filingdateD=date("M-Y",strtotime($filingdate)); $filingdateD=strtoupper($filingdateD);}

if ($publishdate==NULL || $publishdate=="0000-00-00") {$publishdateD="---";} 
else {$publishdateD=date("M-Y",strtotime($publishdate)); $publishdateD=strtoupper($publishdateD);}

if ($grantdate==NULL || $grantdate=="0000-00-00") {$grantdateD="---";} 
else {$grantdateD=date("M-Y",strtotime($grantdate)); $grantdateD=strtoupper($grantdateD);}

if ($grantdateD=="---") { if ($publishdateD=="---") { 
if ($filingdateD=="---") {} else {$remarks="Filed"; }} else {$remarks="Published";} } else {$remarks="Granted";}


$appinvendetails=NULL;
$respatent2=mysqli_query($conf,"SELECT * FROM patentauthors WHERE patentno='$patentno' order by fsno ASC");  
while ($rowa2=mysqli_fetch_array($respatent2)) { $campus=$rowa2['campus']; $branch2=$rowa2['dept'];  $facultyidT=$rowa2['facultyid'];
$authorname=$rowa2['authorname']; $authorname=ltrim($authorname," "); $authorname=rtrim($authorname," ");

if ($branch2==$branchF && $facultyidT==$facultyid) {$appinvendetails="$appinvendetails, <strong>$authorname</strong>";} 
else { $appinvendetails="$appinvendetails, $authorname"; } } $appinvendetails=ltrim($appinvendetails," ,");


$respatent2A=mysqli_query($conf,"SELECT * FROM patentauthors WHERE patentno='$patentno' and (applinven='Applicant' OR applinven='Applicant & Inventor')");  $rownum2A=mysqli_num_rows($respatent2A); 

if ($rownum2A==0) {$appinvendetails="Applicant : <strong>R.V.R. & J.C. College of Engineering</strong>, Inventors: $appinvendetails";} 
else {$appinvendetails=$appinvendetails;} 

if($color==true){ $color1=$colorf1; echo "<tr height='$height1'; style='font-size:13px;' bgcolor='$bgcolor1' >"; } 
else { $color1=$colorf2; echo "<tr height='$height1'; style='font-size:13px;' bgcolor='$bgcolor2' >";}

echo "<td><font style='color:$color1;'>$ip</td><td  align='center'><font style='color:$color1;'>$patentno</td>
<td align='left'><font style='color:$color1;'>&nbsp;$patenttitle</td>
<td align='left'><font style='color:$color1; font-size:12px;'>$appinvendetails</font></td>

<td align='center'><font style='color:$color1;'>$remarks</td></tr>";

//Filed on: $filingdateD<br>Published on: $publishdateD<br>Granted on: $grantdateD

 $color = !$color; $ip=$ip+1; } } }

echo "</table>";



