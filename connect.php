<?php

$localhost="localhost"; $dbuser1="exam";	$dbpass1="exam";

$_SESSION['cona'] = mysqli_connect($localhost,$dbuser1,$dbpass1,"deptece"); // Check connection
if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$_SESSION['conUL'] = mysqli_connect($localhost,$dbuser1,$dbpass1,"userlogin"); // Check connection
if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$_SESSION['conSP'] = mysqli_connect($localhost,$dbuser1,$dbpass1,"spsection-results"); // Check connection
if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$_SESSION['conRE'] = mysqli_connect($localhost,$dbuser1,$dbpass1,"research"); // Check connection
if (mysqli_connect_errno()) { echo "Failed to connect to MySQL: " . mysqli_connect_error();}

$_SESSION['localhost']=$localhost; $_SESSION['dbuser']=$dbuser; $_SESSION['dbpass']=$dbpass;