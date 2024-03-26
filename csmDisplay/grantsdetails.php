<?php //$conf=$_SESSION['conRE']; //echo "$facultyid";

$resf2=mysqli_query($conf,"SELECT * FROM grantsdetails WHERE (facultyid='$facultyid' OR copi1id='$facultyid' OR copi2id='$facultyid' OR copi3id='$facultyid' OR copi4id='$facultyid') and SUBSTRING(dept,1,2)='$branchF' order by grantyear DESC") ;  $rownumf2=mysqli_num_rows($resf2); 

echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border=0 bordercolor=$dborder width=$dtablewidth>";
echo "<tr><td align='left' colspan=6><font style='font-size:$subheadingsize; font-weight:bold; color:$subheadingcolor;'> 
Research / Sponsored Grants</font></td>";  echo "</tr></table>"; 
echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border='1' bordercolor=$dborder width=$dtablewidth>";

echo "<tr style='font-size:12px; font-weight:bold; color:white;' bgcolor=$dhedcolor height=30px>
<td align='center' width=20%>Scheme </td><td align='center'>Activity Details</td><td align='center'>Sponsored Organisation</td>
<td align='center' width=10%>Grant Amount (in Rs/-)</td><td align='center' width=10%>Sanctioned Year</td>
<td align='center' width=10%>Completed Year</td>";echo "</tr>"; 

$i=0; $j=0; $c=0;
while ($rowaf2 = mysqli_fetch_array($resf2)) { $facultyid=$rowaf2['facultyid'];  $rowno=$rowaf2['rowno'];  
 $scheme=$rowaf2['scheme'];  $schemedetails=$rowaf2['schemedetails'];  $sponsorg=$rowaf2['sponsorg']; 
$grantamount=$rowaf2['grantamount']; $grantyear=$rowaf2['grantyear']; $compyear=$rowaf2['compyear']; 
	
setlocale(LC_MONETARY,'en_IN');  $grantdisplay=money_format('%.0n',$grantamount);$grantamountdisplay=substr($grantdisplay,3,50);
	 
$grantyeardispaly=date('d-m-Y',strtotime($grantyear)); $compyeardispaly=date('d-m-Y',strtotime($compyear));
if ($grantyeardispaly=="30-11--0001") {$grantyeardispaly=NULL;} else {$grantyeardispaly=$grantyeardispaly;}
if ($compyeardispaly=="30-11--0001") {$compyeardispaly="On Going";} else {$compyeardispaly=$compyeardispaly;}
$copi1id=$rowaf2['copi1id'];   $copi2id=$rowaf2['copi2id'];  $copi3id=$rowaf2['copi3id'];  $copi4id=$rowaf2['copi4id']; 
$copi1name=$rowaf2['copi1name'];   $copi2name=$rowaf2['copi2name'];  $copi3name=$rowaf2['copi3name'];  $copi4name=$rowaf2['copi4name']; 

$copinames=NULL;
if ($copi1id!==NULL && $copi2id!==NULL && $copi3id!==NULL) {$copinames="<br>CO-PI1:$copi1name<br>CO-PI2:$copi2name<br>CO-PI3:$copi3name"; }
else if ($copi1id!==NULL && $copi2id!==NULL && $copi3id==NULL) {$copinames="<br>CO-PI1:$copi1name<br>CO-PI2:$copi2name"; }
else if ($copi1id!==NULL && $copi2id==NULL && $copi3id==NULL) {$copinames="<br>CO-PI1:$copi1name"; }
else {$copinames=NULL;}

if($color==true){ $color1=$colorf1; echo "<tr height='$height1';  style='font-size:12px;' bgcolor='$bgcolor1' >"; } 
else { $color1=$colorf2; echo "<tr height='$height1';  style='font-size:12px;' bgcolor='$bgcolor2' >";}

echo "<td align='center'> <font style='color:$color1;'>$scheme $copinames</td><td align='left'><font style='color:$color1;'>$schemedetails </td>
<td align='left'><font style='color:$color1;'>$sponsorg</td><td align='center'><font style='color:$color1;'>$grantamountdisplay</td>
<td align='center''><font style='color:$color1;'>$grantyeardispaly</td><td align='center'><font style='color:$color1;'>$compyeardispaly</td>";

echo "</tr>"; $color = !$color;} echo "</table>"; echo "<br> ";



