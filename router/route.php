<?php
	ob_start();
	session_start();
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	if( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ){
		$actual_link = "https"."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$ROOT = "https"."://$_SERVER[HTTP_HOST]/";
	}
	else{
		$actual_link = "http"."://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		$ROOT = "http"."://$_SERVER[HTTP_HOST]/";
	}
	$arr_link = explode("/", $actual_link);
	if($arr_link[2] == 'localhost' || $arr_link[2] == '192.168.1.4'){
		$__URL__ = $ROOT.$arr_link[3]."/";
		isset($arr_link[4]) ? $p = $arr_link[4] : $p = '';
		isset($arr_link[5]) ? $one = $arr_link[5] : $one = '';
	}
	else{
		$__URL__ = $ROOT.$arr_link[3];
		isset($arr_link[3]) ? $p = $arr_link[3] : $p = '';
		isset($arr_link[4]) ? $one = $arr_link[4] : $one = '';
	}
	$string_page = explode("?", $p);
	if(count($string_page) != 1){
		$p = $string_page[0];
	}
	require_once "admin/model/Query.php";
	$query = new Query();
	$dataInfo = $query->ChiTiet("info", [], ["id" => "="], ["id" => 1]);
	$arrMenu = json_decode($dataInfo->menu);
	
	if($p == ''){
		$folder = 'home';
		require_once "controller/".$folder."/list.php";
		$path = 'view/'.$folder.'/list.php';
	}
	else{
		$folder = 'view/'.$p;
		if (file_exists($folder)){
			if($one == ''){
				require_once "controller/".$p."/list.php";
				$path = 'view/'.$p.'/list.php';
			}
			else{
				$check_redirect = explode("?", $one);
				if(count($check_redirect) != 1){
					$one = $check_redirect[0];
				}
				require_once "controller/".$p."/detail.php";
				$path = 'view/'.$p.'/detail.php';
			}
		}
		else{
			if(isset($arrMenu->$p))
			{
				$folder = 'loai-tin';
				if($one == ''){
					require_once 'controller/'.$folder.'/list.php';
					$path = 'view/'.$folder.'/list.php';
				}
				else{
					$child_str = explode("?", $one);
					if(count($child_str)!=1){
						$one = $child_str[0];
					}
					require_once 'controller/'.$folder.'/detail.php';
					$path = 'view/'.$folder.'/detail.php';
				}
			}
			else if(isset($arrLoai->$p))
			{
				$folder = 'loai';
				require_once 'controller/'.$folder.'/list.php';
				$path = 'view/'.$folder.'/list.php';
			}
			else{
				$folder = 'article';
				require_once 'controller/'.$folder.'/list.php';
				$path = 'view/'.$folder.'/list.php';
			}
		}
	}
?>