<?php
$resf2=mysqli_query($conf,"SELECT * FROM booksdetails WHERE facultyid='$facultyIDpart' and dept='$branch' order by publicationyear DESC") ;  $rownumf2=mysqli_num_rows($resf2); 

echo "<table style='margin: 0 auto; border-collapse: collapse' align='center' border='1' bordercolor=$dborder width=$dtablewidth>";
echo "<tr><td align='left' colspan=5><font style='font-size:$subheadingsize; font-weight:bold; color:$subheadingcolor;'> 
Books Published</font></td>"; 
if(isset($_SESSION['username']) && $facultyID==$_SESSION['username'] && $passwordtest==$_SESSION['password'] ) { ?>
<td width=100px colspan=2><a href="addactivityrow.php?branch=<?php echo $branch ?>&facultyid=<?php echo $facultyIDpart ?>&books=Y" target="foo" onClick="window.open('','foo','left=500,top=200,width=400,height=200,scrollbars=yes,toolbar=no')"><input style="font-weight:bold; color:blue;" type="button" value="ADD NEW ROW"></a></td> <?php } echo "</tr>"; 

echo "<tr style='font-size:12px; font-weight:bold; color:white;' bgcolor=$dhedcolor height=30px>
<td align='center' width=15%>Authos Names(s)</td><td>Book Title</td><td >Publisher Details</td><td align='center' width=10%>Edition Details</td>
<td align='center' width=5%>Yearof Publication</td><td align='center' width=8%>ISBN No</td>";
if(isset($_SESSION['username']) && $facultyID==$_SESSION['username'] && $passwordtest==$_SESSION['password'] ) { echo "<td width=50px>Remarks</td>"; } echo "</tr>"; 

$i=0; $j=0; $c=0;
while ($rowaf2 = mysqli_fetch_array($resf2)) { $facultyid=$rowaf2['facultyid'];  $rowno=$rowaf2['rowno']; 
 $authors=$rowaf2['authors'];  $booktitle=$rowaf2['booktitle'];  $publisher=$rowaf2['publisher']; 
$editions=$rowaf2['editions'];$publicationyear=$rowaf2['publicationyear'];$isbnno=$rowaf2['isbnno']; 
	
$publicationyeardispaly=date('d-m-Y',strtotime($publicationyear)); 
if ($publicationyeardispaly=="30-11--0001") {$publicationyeardispaly=NULL;} else {
$publicationyeardispaly=date("M-Y",strtotime($publicationyeardispaly));$publicationyeardispaly=strtoupper($publicationyeardispaly);}
	
if($color==true){ $color1=$colorf1; echo "<tr height='$height1';  style='font-size:12px;' bgcolor='$bgcolor1' >"; } 
else { $color1=$colorf2; echo "<tr height='$height1';  style='font-size:12px;' bgcolor='$bgcolor2' >";}

if ($_GET['booksedit']=="Y" && $_GET['rownum']==$rowno) { 
if(isset($_SESSION['username']) && $facultyID==$_SESSION['username'] && $passwordtest==$_SESSION['password'] ) { ?> 

<body onload="FocusOnInput()"><?php echo "<form name='$formno' method='post' action='activityentry.php'>";

echo "<td align='center'> <font style='color:$color1;'><input style='font-size:12px; color:red; width:120px;' id=1 placeholder='Authos Name(s)'  type=text name=authors value='$authors'></td>";
echo "<td align='left'><textarea rows=1 cols=50 style='font-size:12px; color:$color1; width:90%;' id=2 name=booktitle>$booktitle </textarea></td>";
echo "<td align='left'><textarea rows=1 cols=50 style='font-size:12px; color:$color1; width:90%;' id=10 name=publisher>$publisher</textarea></td>";
echo "<td align='center'> <font style='color:$color1;'>
<input style='font-size:12px; color:red; width:60px;' id=1 placeholder='Editions'  type=text name=editions value='$editions'></td>";

echo "<td align='center'><input style='font-size:12px; color:$color1; width:80%;' id=7 type=date name=publicationyear value='$publicationyear'><input id=8 type=hidden name=dept value='$branch'><input id=9 type=hidden name=rowno value='$rowno'><input id=88 type=hidden name=booksinformation value=Y></td>";

echo "<td align='center'> <font style='color:$color1;'>
<input style='font-size:12px; color:red; width:60px;' id=1 placeholder='ISBN No'  type=text name=isbnno value='$isbnno'>";echo "</td>";

echo "<td align='center'><input style='font-size:12px; color:red;' value='SAVE' type='Submit'></td>"; echo "</form>";} }

else  {
echo "<td align='left'> <font style='color:$color1;'>$authors</td><td align='left'><font style='color:$color1;'>$booktitle </td>
<td align='left'><font style='color:$color1;'>$publisher</td><td align='center'><font style='color:$color1;'>$editions</td>
<td align='center''><font style='color:$color1;'>$publicationyeardispaly</td><td align='center'><font style='color:$color1;'>$isbnno</td>
";

if(isset($_SESSION['username']) && $facultyID==$_SESSION['username'] && $passwordtest==$_SESSION['password'] ) { 	
echo "<td align='center'><a href='facultydetails.php?booksedit=Y&rownum=$rowno'><font style='font-size:12px; color:red;'>EDIT</a></td>";
} }
echo "</tr>"; $color = !$color;} echo "</table>"; echo "<br> ";



