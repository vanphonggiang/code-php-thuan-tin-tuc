<?php
	session_start();
	unset($_SESSION['proid']);
	unset($_SESSION['profullname']);
    unset($_SESSION['pronhom']);
	header("location:login.php");
?>