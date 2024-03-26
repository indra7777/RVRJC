<?php
$resf2=mysqli_query($conf,"SELECT * FROM journalpublications WHERE (facultyid='$facultyid' OR coauth1='$facultyid' OR coauth2='$facultyid') and dept='$branchF' order by publishdate DESC") ;  $rownumf2=mysqli_num_rows($resf2); 

$result2=mysqli_query($conf,"SELECT * FROM journalpublications WHERE (facultyid='$facultyid' OR coauth1='$facultyid' OR coauth2='$facultyid') and dept='$branchF'") or die("Query 2 failed ");

$i=0; $j=0; $c=0; $ijtot=0; $njtot=0; 
while ($rowa2 = mysqli_fetch_array($result2)) { $pubtype=$rowa2['pubtype'];  
if ($pubtype=="IJ") {$ijtot=$ijtot+1;} else if ($pubtype=="NJ") {$njtot=$njtot+1;}  else {$ijtot=$ijtot; $njtot=$njtot;} }

$journaltot=$ijtot+$njtot;
// $dtablewidth=$dtablewidth-10; echo $dtablewidth;
 
echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border=0 bordercolor=$dborder width=$dtablewidth>";
echo "<tr ><td align='left' colspan=10><font style='font-size:$subheadingsize; font-weight:bold; color:$subheadingcolor;'> 
Journal Publications</font>&nbsp;<font style='font-size:16px;'>
<font style='font-size:17px;color:red'>$journaltot&nbsp;&nbsp;</font>
(&nbsp<font style='font-size:16px;color:darkred'>International&nbsp;:</font><font style='font-size:16px;color:red'> $ijtot&nbsp;&nbsp;</font>
<font style='font-size:16px;color:darkred'>National&nbsp:&nbsp</font><font style='font-size:16px;color:red'>$njtot&nbsp</font>)</td>";
 echo "</tr></table>"; 

echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border='1' bordercolor=$dborder width=$dtablewidth>";
echo "<tr style='font-size:12px; font-weight:bold; color:white;' bgcolor=$dhedcolor height=20px>
<td align='center' rowspan=2 width=3%>IJ/ NJ</td><td rowspan=2 width=10%>Authos Name (s)</td>
<td rowspan=2>Paper Title</td><td rowspan=2>Journal Full Name</td><td align='center' rowspan=2 width=8%>Vol.No., Issue., Page No.(s)</td>
<td align='center' rowspan=2 width=6%>Publish Date</td><td align='center' rowspan=2 width=5%>ISSN No.</td><td align='center' rowspan=2 width=5%>e-ISSN No.</td><td align='center' rowspan=2 width=5%>doiNo</td><td align='center' rowspan=2 width=5%>SCI/<br> SCIE</td> <td align='center' colspan=3>Citations</td>"; echo "</tr>"; 

echo "<tr style='font-size:12px; font-weight:bold; color:white;' bgcolor=$dhedcolor height=30px>
<td align='center' width=5%>Scopus</td><td align='center' width=5%>WoS/ ESCI</td><td align='center' width=5%>Google Scholar</td></tr>";

$i=0; $j=0; $c=0;
while ($rowaf2 = mysqli_fetch_array($resf2)) { $facultyidT=$rowaf2['facultyid'];  $rowno=$rowaf2['rowno']; 
$pubtype=$rowaf2['pubtype']; $title=$rowaf2['title']; $authorname=$rowaf2['authorname'];  $journalname=$rowaf2['journalname']; 
$volpage=$rowaf2['volpage']; $doino=$rowaf2['doino'];  $publishdate=$rowaf2['publishdate'];  $issnno=$rowaf2['issnno']; $eissnno=$rowaf2['eissnno']; $scopus=$rowaf2['scopus'];  $webofsc=$rowaf2['webofsc']; $glesch=$rowaf2['glesch'];
$coauth1=$rowaf2['coauth1']; $coauth2=$rowaf2['coauth2']; $sci=$rowaf2['sci'];
	
if ($scopus=='0') {$scopus=NULL;} else {$scopus=$rowaf2['scopus']; } 
if ($webofsc=='0'){$webofsc=NULL;} else {$webofsc=$rowaf2['webofsc'];}
	
$publishdatedispaly=date('d-m-Y',strtotime($publishdate));  
if ($publishdatedispaly=="30-11--0001") {$publishdatedispaly=NULL;} else {$publishdatedispaly=$publishdatedispaly;
$publishdatedispaly=date('M Y',strtotime($publishdatedispaly)); $publishdatedispaly=strtoupper($publishdatedispaly); }
	
if($color==true){ $color1=$colorf1; echo "<tr height='$height1';  style='font-size:12px;' bgcolor='$bgcolor1' >"; } 
else { $color1=$colorf2; echo "<tr height='$height1';  style='font-size:12px;' bgcolor='$bgcolor2' >";}

if ($issnno!==NULL) { $issnno=str_replace('-','',$issnno);
$issnnopart1=substr($issnno,0,4);$issnnopart2=substr($issnno,4,4); $issnnod="$issnnopart1- $issnnopart2"; } else {$issnnod=NULL;}

if ($eissnno!==NULL) { $eissnno=str_replace('-','',$eissnno);
$eissnnopart1=substr($eissnno,0,4);$eissnnopart2=substr($eissnno,4,4); $eissnnod="$eissnnopart1- $eissnnopart2"; } else {$eissnnod=NULL;}

$splitlen=10; $doistrlen=strlen($doino); //echo $doistrlen;
$doino1=substr($doino,0,$splitlen);$doino2=substr($doino,$splitlen,$splitlen);
$doino3=substr($doino,$splitlen*2,$splitlen);$doino4=substr($doino,$splitlen*3,$splitlen);
$doidisplay="$doino1 $doino2 $doino3 $doino4";

$coautherD=NULL;
if ($coauth1==NULL) {$coauth1text=NULL;} else {$coauth1text="CoAuth1:$coauth1"; $coautherD="<br>$coauth1text"; } 
	if ($coauth2==NULL) {$coauth2text=NULL;} else {$coauth2text="CoAuth2:$coauth2"; $coautherD="$coautherD, $coauth2text";}
	
//$coauth1text=$coauth1text; $coauth2text=$coauth2text; $coautherD

	
echo "<td align='center'> <font style='color:$color1;'>$pubtype</td><td align='left' valign='top'> <font style='color:$color1;'>$authorname </td>
<td valign='top' align='left'><font style='color:$color1;'>$title </td><td valign='top' align='left'><font style='color:$color1;'>$journalname</td>
<td align='center'><font style='color:$color1;'>$volpage</td><td align='center''><font style='color:$color1;'>$publishdatedispaly</td>
<td align='center'><a style='text-decoration:none' href='https://www.google.com/search?q=$issnno' target='_blank;'><font style='color:$color1;'>$issnnod</td>
<td align='center'><a style='text-decoration:none' href='https://www.google.com/search?q=$eissnno' target='_blank;'><font style='color:$color1;'>$eissnnod</td>
<td  align='center'><a style='text-decoration:none' href='https://doi.org/$doino' target='_blank;'><font style='text-decoration:none; font-size:12px; color:$color1;'>$doidisplay</a></td>";
 if ($sci=='N') {$sciD=NULL;} else {$sciD=$sci;} 
echo "<td align='center'><font style='color:$color1;'>$sciD</td><td align='center'><font style='color:$color1;'>$scopus</td><td align='center'><font style='color:$color1;'>$webofsc</td><td align='center'><font style='color:$color1;'>$glesch</td>";

echo "</tr>"; $color = !$color;} echo "</table>"; echo "<br> ";



