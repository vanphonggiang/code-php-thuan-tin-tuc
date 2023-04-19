<?php
	echo "3 ngày sau: ".date('Y-m-d', strtotime('3 days'));
	echo "<br>";
	echo "3 ngày trước: ".date('Y-m-d', strtotime('-3 days'));
	echo "<br>";
	$days_ago = date('Y-m-d', strtotime('-5 days', strtotime('2021-03-28')));
	echo "Hôm nay là: 2021-03-28";
	echo "<br>";
	echo "5 ngày trước: ".$days_ago;
	echo "<br>";
	$month_ago = date('Y-m-d', strtotime('-5 months', strtotime('2021-03-28')));
	echo "5 tháng trước: ".$month_ago;
	echo "<br>";
	$year_ago = date('Y-m-d', strtotime('1 years', strtotime('2021-03-28')));
	echo "1 năm sau: ".$year_ago;
?>