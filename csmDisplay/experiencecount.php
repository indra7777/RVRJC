<?php
$date1=$doj; //echo $date1;

$date2 = date("Y-m-d");  $date2display = date("d-m-Y"); 
$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

$prevdiff1=abs(strtotime($prevdt1en) - strtotime($prevdt1st));
$prevdiff2=abs(strtotime($prevdt2en) - strtotime($prevdt2st));
$prevdiff3=abs(strtotime($prevdt3en) - strtotime($prevdt3st));
$prevdiff4=abs(strtotime($prevdt4en) - strtotime($prevdt4st));
$prevdiff5=abs(strtotime($prevdt5en) - strtotime($prevdt5st));
$prevdiff6=abs(strtotime($prevdt6en) - strtotime($prevdt6st));

$prevdiff = ($prevdiff1+$prevdiff2+$prevdiff3+$prevdiff4+$prevdiff5+$prevdiff6); 

$prevyears = floor($prevdiff / (365*60*60*24));
$prevmonths = floor(($prevdiff - $prevyears * 365*60*60*24) / (30*60*60*24));
$prevdays = floor(($prevdiff - $prevyears * 365*60*60*24 - $prevmonths*30*60*60*24)/ (60*60*24)); //echo $prevdiff;

$totdiff=$prevdiff+$diff;
$totyears = floor($totdiff / (365*60*60*24));
$totmonths = floor(($totdiff - $totyears * 365*60*60*24) / (30*60*60*24));
$totdays = floor(($totdiff - $totyears * 365*60*60*24 - $totmonths*30*60*60*24)/ (60*60*24));




