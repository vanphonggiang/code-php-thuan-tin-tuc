<?php 
	require_once "../../model/Lib.php";
	$lib = new Lib();
	if(isset($_POST['ten']))
	{
		echo $lib->changeTitle($_POST['ten']);
	}
	else
	{
		echo 'no-slug';
	}
?>