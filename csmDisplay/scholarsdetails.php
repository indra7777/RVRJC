<?php

$resf2=mysqli_query($conf,"SELECT * FROM scholarsdetails WHERE facultyid='$facultyIDpart' and dept='$branch' order by yearofaward ASC, yearofreg ASC, schregno ASC") or die ("Error");  $rownumf2=mysqli_num_rows($resf2); //echo "echo-$facultyIDpart-$branch-$rownumf1";
	
echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border=0 bordercolor=$dborder width=$dtablewidth>";
echo "<tr><td align='left' colspan=5 ><font style='font-size:$subheadingsize; font-weight:bold; color:$subheadingcolor;'> 
Research Schalors Details</font></td>"; echo "</tr></table>"; 

echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border='1' bordercolor=$dborder width=$dtablewidth>";
 
echo "<tr style='font-size:12px; font-weight:bold; color:white;' bgcolor=$dhedcolor height=30px>
<td width=15%>Name of the Scholar</td><td align='center' width=10%>RegNo</td><td align='center'  width=8%>Year of Registration</td><td align='center'  width=10%>University</td>
<td >Research Area / Title of Thesis</td><td align='center'  width=8%>Year of Award</td>";  echo "</tr>"; 

$i=0; $j=0; $c=0;
while ($rowaf2 = mysqli_fetch_array($resf2)) { $facultyid=$rowaf2['facultyid'];  $rowno=$rowaf2['rowno']; 
$nameoftheschalor=$rowaf2['nameofthescholar'];  $yearofreg=$rowaf2['yearofreg']; $schregno=$rowaf2['schregno'];   
$titleofthethesis=$rowaf2['titleofthethesis'];  $yearofaward=$rowaf2['yearofaward'];  $university=$rowaf2['university'];  

$yearofregdispaly=date('d-m-Y',strtotime($yearofreg)); $yearofawarddispaly=date('d-m-Y',strtotime($yearofaward));
if ($yearofregdispaly=="30-11--0001") {$yearofregdispaly=NULL;} else {$yearofregdispaly=$yearofregdispaly;
$yearofregdispaly=date('M Y',strtotime($yearofregdispaly)); $yearofregdispaly=strtoupper($yearofregdispaly);}
if ($yearofawarddispaly=="30-11--0001") {$yearofawarddispaly=NULL;} else {$yearofawarddispaly=$yearofawarddispaly;
$yearofawarddispaly=date('M Y',strtotime($yearofawarddispaly)); $yearofawarddispaly=strtoupper($yearofawarddispaly);}

if($color==true){ $color1=$colorf1; echo "<tr height='$height1';  style='font-size:12px;' bgcolor='$bgcolor1' >"; } 
else { $color1=$colorf2; echo "<tr height='$height1';  style='font-size:12px;' bgcolor='$bgcolor2' >";}

echo "<td align='left'><font style='color:$color1;'>$nameoftheschalor</td>
<td align='center''><font style='color:$color1;'>$schregno</td>";
 echo "<td align='center'><font style='color:$color1;'>$yearofregdispaly</td>";

echo "<td align='center'><font style='color:$color1;'>$university</td>
<td align='left'><font style='color:$color1;'>$titleofthethesis </td><td align='center'><font style='color:$color1;'>$yearofawarddispaly</td>";	

echo "</tr>"; $color = !$color;} echo "</table>"; echo "<br>";

