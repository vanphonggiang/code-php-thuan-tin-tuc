<?php
	ob_start();
	session_start();
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	CONST __URLWEB__ = "https://example.com/";
	CONST __NAME__ = "Project";
	if(!isset($_SESSION['proid'])) {
		header("location:login.php");
	}
	else{
		if($_SESSION['pronhom'] == 2){
			header("location:login.php");
		}
	}
	if( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ){
		$actual_link = "https"."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$ROOT = "https"."://$_SERVER[HTTP_HOST]/";
	}
	else{
		$actual_link = "http"."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$ROOT = "http"."://$_SERVER[HTTP_HOST]/";
	}
	$arr_link = explode("/", $actual_link);
	if($arr_link[2] == 'localhost'){
		$__URL__ = $ROOT.$arr_link[3]."/admin/";
		isset($arr_link[5]) ? $p = $arr_link[5] : $p = '';
		isset($arr_link[6]) ? $one = $arr_link[6] : $one = '';
	}
	else{
		$__URL__ = $ROOT.$arr_link[3]."/";
		isset($arr_link[4]) ? $p = $arr_link[4] : $p = '';
		isset($arr_link[5]) ? $one = $arr_link[5] : $one = '';
	}
	$string_page = explode("?", $p);
	if(count($string_page) != 1){
		$p = $string_page[0];
	}
	$__ID__ = isset($_SESSION['proid']) ? $_SESSION['proid'] : '';
	$__NHOM__ = isset($_SESSION['pronhom']) ? $_SESSION['pronhom'] : '';
	$__FULLNAME__ = isset($_SESSION['profullname']) ? $_SESSION['profullname'] : '';
	require_once "model/Query.php";
	require_once "model/Lib.php";
	$query = new Query();
	$lib = new Lib();
	if($p == ''){
		$folder = "home";
		require_once 'controller/'.$folder.'.php';
		$path = 'view/'.$folder.'/list.php';
	}
	else{
		$folder = 'view/'.$p;
		if (file_exists($folder)){
			if($one == ''){
				require_once "controller/".$p.".php";
				$path = 'view/'.$p.'/list.php';
			}
			else{
				require_once "controller/".$p.".php";
				$url_full = 'view/'.$p.'/'.$one;
				$str_process = explode("?", $url_full);
				if (count($str_process) != 1){
					$url_full = $str_process[0];
				}
				$path = $url_full.'.php';
			}
		}
		else{
			$folder = "home";
			require_once 'controller/'.$folder.'.php';
			$path = 'view/'.$folder.'/list.php';
		}
	}
?>