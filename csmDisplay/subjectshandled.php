<?php
$resf2=mysqli_query($conf,"SELECT * FROM subjectsdetails WHERE facultyid='$facultyIDpart' and dept='$branch' order by sno ASC") ;  $rownumf2=mysqli_num_rows($resf2); //echo "echo-$facultyIDpart-$branch-$rownumf1";

echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border=0 bordercolor=$dborder width=$dtablewidth>";
echo "<tr><td align='left' ><font style='font-size:$subheadingsize; font-weight:bold; color:$subheadingcolor;'> 
Subjects Handled</font></td>";  echo "</tr></table>"; 

echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border='1' bordercolor=$dborder width=$dtablewidth>";

echo "<tr style='font-size:12px; font-weight:bold; color:white;' bgcolor=$dhedcolor height=30px>
<td>Subjects </td>"; echo "</tr>"; 

$i=0; $j=0; $c=0;
while ($rowaf2 = mysqli_fetch_array($resf2)) { $facultyid=$rowaf2['facultyid'];  $rowno=$rowaf2['rowno']; 
 $description=$rowaf2['description'];  $sno=$rowaf2['sno'];   $descriptionD="$descriptionD, $description";}
$descriptionD=ltrim($descriptionD, ',');
if($color==true){ $color1=$colorf1; echo "<tr height='$height1';  style='font-size:13px;' bgcolor='$bgcolor1' >"; } 
else { $color1=$colorf2; echo "<tr height='$height1';  style='font-size:13px;' bgcolor='$bgcolor2' >";}
echo "<td align='left'><font style='color:$color1;'>$descriptionD</td>"; echo "</tr>"; $color = !$color;  echo "</table>"; echo "<br>";



