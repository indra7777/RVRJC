<?php
$resf2=mysqli_query($conf,"SELECT * FROM confpublications WHERE (facultyid='$facultyid' OR coauth1='$facultyid' OR coauth2='$facultyid') and dept='$branchF' order by publishdate DESC") ;  $rownumf2=mysqli_num_rows($resf2); 

$result2=mysqli_query($conf,"SELECT * FROM confpublications WHERE (facultyid='$facultyid' OR coauth1='$facultyid' OR coauth2='$facultyid') and dept='$branchF'");

$ictot=0; $nctot=0; 
while ($rowa2 = mysqli_fetch_array($result2)) { $pubtype=$rowa2['pubtype'];  
if ($pubtype=="IC") {$ictot=$ictot+1;} else if ($pubtype=="NC") {$nctot=$nctot+1;}  else {$ictot=$ictot; $nctot=$nctot;} }

$conftot=$ictot+$nctot;

echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border=0 bordercolor=$dborder width=$dtablewidth>";
echo "<tr><td align='left' colspan=9><font style='font-size:$subheadingsize; font-weight:bold; color:$subheadingcolor;'> 
Conference Publications</font>&nbsp;<font style='font-size:16px;'><font style='font-size:17px;color:red'>$conftot&nbsp;</font>
(&nbsp<font style='font-size:16px;color:darkred'>International&nbsp;:</font><font style='font-size:16px;color:red'> $ictot&nbsp;&nbsp;</font>
<font style='font-size:16px;color:darkred'>National&nbsp:&nbsp</font><font style='font-size:16px;color:red'>$nctot&nbsp</font>)</td>"; 
echo "</tr></table>"; 
 
echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border='1' bordercolor=$dborder width=$dtablewidth>";

echo "<tr style='font-size:12px; font-weight:bold; color:white;' bgcolor=$dhedcolor  height=20px>
<td align='center' rowspan=2 width=3%>IC/ NC</td><td align='center' rowspan=2 width=11%>Authos Name (s)</td><td rowspan=2>Paper Title</td>
<td rowspan=2>Conference Full Name</td><td align='center' rowspan=2 width=7%>Page No.(s)</td>
<td align='center' rowspan=2 width=3%>Publish Year</td><td align='center' rowspan=2 width=5%>e-ISBN No</td>
<td align='center' rowspan=2 width=5%>doiNo</td><td align='center' colspan=3>Citations</td>";

echo "</tr>"; 

echo "<tr style='font-size:12px; font-weight:bold; color:white;' bgcolor=$dhedcolor  height=30px>
<td align='center' width=5%>Scopus</td><td align='center' width=5%>Webof Science</td><td align='center' width=5%>Google Scholar</td></tr>";


$i=0; $j=0; $c=0;
while ($rowaf2 = mysqli_fetch_array($resf2)) { $facultyid=$rowaf2['facultyid'];  $rowno=$rowaf2['rowno']; 
$pubtype=$rowaf2['pubtype']; $title=$rowaf2['title']; $authorname=$rowaf2['authorname'];  $confname=$rowaf2['confname']; 
$volpage=$rowaf2['volpage']; $doino=$rowaf2['doino'];  $publishdate=$rowaf2['publishdate'];    $scopus=$rowaf2['scopus'];  $webofsc=$rowaf2['webofsc']; $glesch=$rowaf2['glesch']; $issnno=$rowaf2['issnno'];	
$coauth1=$rowaf2['coauth1']; $coauth2=$rowaf2['coauth2'];


$publishdatedispaly=date('d-m-Y',strtotime($publishdate));  
if ($publishdatedispaly=="30-11--0001") {$publishdatedispaly=NULL;} else {$publishdatedispaly=$publishdatedispaly;
$publishdatedispaly=date('M Y',strtotime($publishdatedispaly)); $publishdatedispaly=strtoupper($publishdatedispaly); }
	
if($color==true){ $color1=$colorf1; echo "<tr height='$height1';  style='font-size:12px;' bgcolor='$bgcolor1' >"; } 
else { $color1=$colorf2; echo "<tr height='$height1';  style='font-size:12px;' bgcolor='$bgcolor2' >";}

$splitlen=6; $issnstrlen=strlen($issnno); //echo $doistrlen;
$issnno1=substr($issnno,0,$splitlen);$issnno2=substr($issnno,$splitlen,$splitlen);
$issnno3=substr($issnno,$splitlen*2,$splitlen);$issnno4=substr($issnno,$splitlen*3,$splitlen);
$issnnodisplay="$issnno1 $issnno2 $issnno3 $issnno4";

$splitlen=8; $doistrlen=strlen($doino); //echo $doistrlen;
$doino1=substr($doino,0,$splitlen);$doino2=substr($doino,$splitlen,$splitlen);
$doino3=substr($doino,$splitlen*2,$splitlen);$doino4=substr($doino,$splitlen*3,$splitlen);
$doidisplay="$doino1 $doino2 $doino3 $doino4";


 if ($coauth1==NULL) {$coauth1text=NULL;} else {$coauth1text="CoAuth1:$coauth1";} 
	if ($coauth2==NULL) {$coauth2text=NULL;} else {$coauth2text="CoAuth2:$coauth2";}
if(isset($_SESSION['username']) && $facultyID==$_SESSION['username'] && $passwordtest==$_SESSION['password'] ) {
$coauth1text=$coauth1text; $coauth2text=$coauth2text; } else {$coauth1text=NULL; $coauth2text=NULL;}

echo "<td align='center'> <font style='color:$color1;'>$pubtype</td>
<td valign='top' align='left'><font style='color:$color1;'>$authorname </td>
<td valign='top' align='left'><font style='color:$color1; vertical-align: top; '>$title </td>
<td valign='top' align='left'><font style='color:$color1;'>$confname</td>
<td align='center'><font style='color:$color1;'>$volpage</td><td align='center''><font style='color:$color1;'>$publishdatedispaly</td>
<td align='center'><a style='text-decoration:none' href='https://www.google.com/search?q=isbn $issnno' target='_blank;'>
<font style='font-size:12px; color:$color1;'>$issnnodisplay</a></td>
<td align='center'><a style='text-decoration:none' href='https://doi.org/$doino' target='_blank;'>
<font style='font-size:12px; color:$color1;'>$doidisplay</a></td><td align='center'><font style='color:$color1;'>$scopus</td>
<td align='center'><font style='color:$color1;'>$webofsc</td><td align='center'><font style='color:$color1;'>$glesch</td>";
	

echo "</tr>"; $color = !$color;} echo "</table>"; echo "<br>";


