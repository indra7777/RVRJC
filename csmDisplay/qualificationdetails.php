<?php

$resf1=mysqli_query($conf,"SELECT * FROM qualifidetails WHERE facultyid='$facultyid' and dept='$branchF' order by yearpass DESC");  $rownumf1=mysqli_num_rows($resf1);  //$resfa1=mysqli_fetch_array($resf1); 

//echo "echo-$facultyid-$branchF-$rownumf1";
echo "<table style='margin: 0 auto;' border=0 ><tr height=10><td ></td></tr></table>"; 

echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border=0 bordercolor=$dborder width=$dtablewidth>";
echo "<tr><td align='left' colspan=7 ><font style='font-size:$subheadingsize; font-weight:bold; color:$subheadingcolor;'> 
Qualifications</font></td></tr></table>"; 

echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border='1' bordercolor=$dborder width=$dtablewidth>";
echo "<tr style='font-size:12px; font-weight:bold; color:white;' bgcolor=$dhedcolor height=30px><td >Qualif-ications</td>
<td >Specialization</td> <td align='center'>Thesis Tittle (For PhD)</td><td align='center'>University/ Board</td>
<td align='center'>Name of the Institute, Place </td><td align='center' width=9%>Month & Year of Pass</td>"; echo "</tr>";
$i=0; $j=0; $c=0;
while ($rowaf1 = mysqli_fetch_array($resf1)) { $facultyid=$rowaf1['facultyid'];  $rowno=$rowaf1['rowno']; 
echo"hi";
 $degree=$rowaf1['degree'];  $brspec=$rowaf1['brspec']; $boarduniv=$rowaf1['boarduniv'];   $institutename=$rowaf1['institutename'];  $yearpass=$rowaf1['yearpass'];  $percentage=$rowaf1['percentage'];  $certidate=$rowaf1['certidate']; $thesistitle=$rowaf1['thesistitle'];    
$yearpassdispaly=date('d-m-Y',strtotime($yearpass)); $certidatedispaly=date('d-m-Y',strtotime($certidate));
if ($yearpassdispaly=="30-11--0001") {$yearpassdispaly=NULL;} else {$yearpassdispaly=$yearpassdispaly;}
if ($certidatedispaly=="30-11--0001") {$certidatedispaly=NULL;} else {$certidatedispaly=$certidatedispaly;}

if($color==true){ $color1=$colorf1; echo "<tr height=$height1;  style='font-size:12px;' bgcolor='$bgcolor1' >"; } 
else { $color1=$colorf2; echo "<tr height=$height1;  style='font-size:12px;' bgcolor='$bgcolor2' >";}

 echo "<td align='center'> <font style='color:$color1;'>$degree</td><td align='left'><font style='color:$color1;'>$brspec </td>
<td align='left'><font style='color:$color1;'>$thesistitle</td><td align='left'><font style='color:$color1;'>$boarduniv</td>
<td align='left'><font style='color:$color1;'>$institutename</td><td align='center'><font style='color:$color1;'>$yearpassdispaly</td>";	

echo "</tr>"; $color = !$color; } echo "</table>"; echo "<br> ";



