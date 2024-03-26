<?php
$resf2=mysqli_query($conf,"SELECT * FROM fdpsatndetails WHERE facultyid='$facultyIDpart' and dept='$branch' order by fromdate DESC") ;  $rownumf2=mysqli_num_rows($resf2); 

echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border=0 bordercolor=$dborder width=$dtablewidth>";
echo "<tr><td align='left' colspan=4><font style='font-size:$subheadingsize; font-weight:bold; color:$subheadingcolor;'> 
FDP / Conference / Workshop /  Seminar Attended</font></td>";  echo "</tr></table >"; 

echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border='1' bordercolor=$dborder width=$dtablewidth>";

echo "<tr style='font-size:12px; font-weight:bold; color:white;' bgcolor=$dhedcolor height=30px><td align='center'  width=10%>Activity</td><td width=35%>Workshop/FDP/ Seminar Title</td><td >Organisation Details</td><td align='center'  width=8%>From Date</td><td align='center'  width=8%>To Date</td>"; echo "</tr>"; 

$i=0; $j=0; $c=0;
while ($rowaf2 = mysqli_fetch_array($resf2)) { $facultyid=$rowaf2['facultyid'];  $rowno=$rowaf2['rowno']; 
 $actvtype=$rowaf2['actvtype']; $activitytitle=$rowaf2['activitytitle']; $organdetails=$rowaf2['organdetails'];  $fromdate=$rowaf2['fromdate'];  $todate=$rowaf2['todate']; 
	
$fromdatedispaly=date('d-m-Y',strtotime($fromdate)); $todatedispaly=date('d-m-Y',strtotime($todate)); 
if ($fromdatedispaly=="30-11--0001") {$fromdatedispaly=NULL;} else {$fromdatedispaly=$fromdatedispaly;}
if ($todatedispaly=="30-11--0001") {$todatedispaly=NULL;} else {$todatedispaly=$todatedispaly;}
	
if($color==true){ $color1=$colorf1; echo "<tr height='$height1';  style='font-size:12px;' bgcolor='$bgcolor1' >"; } 
else { $color1=$colorf2; echo "<tr height='$height1';  style='font-size:12px;' bgcolor='$bgcolor2' >";}

echo "<td align='center'> <font style='color:$color1;'>$actvtype</td><td align='left'><font style='color:$color1;'>$activitytitle </td><td align='left'><font style='color:$color1;'>$organdetails</td><td align='center''><font style='color:$color1;'>$fromdatedispaly</td><td align='center'><font style='color:$color1;'>$todatedispaly</td>"; echo "</tr>"; $color = !$color;} echo "</table>"; echo "<br>";



