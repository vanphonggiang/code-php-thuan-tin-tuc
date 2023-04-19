<?php
//$date1 = "2008-11-01 22:45:00";
$date1 = "2008-11-01";
//$date2 = "2008-11-01 22:45:01";
$date2 = "2008-11-01";
$diff = strtotime($date2) - strtotime($date1);
echo $diff;
//$diff = abs(strtotime($date2) - strtotime($date1));
$years = floor($diff / (365*60*60*24));
$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));
$hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));
$minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60) / 60);
$seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60));
echo $years." years, ".$months." months, ".$days." days, ".$hours." hours, ".$minutes." minutes, ".$seconds." seconds";
?>