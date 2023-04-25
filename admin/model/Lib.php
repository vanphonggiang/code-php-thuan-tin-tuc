<?php
class Lib{
	public function ConfigEmail($mail)
	{
		$mail->isSMTP();
		$mail->Host='smtp.gmail.com';
		$mail->SMTPAuth=true;
		$mail->Username='user@gmail.com';
		$mail->Password='apppass';
		$mail->SMTPSecure='tls';
		$mail->Port=587;
		$mail->SMTPOptions=[
			'ssl'=>[
				'verify_peer'=>false,
				'verify_peer_name'=>false,
				'allow_self_signed'=>true
			]
		];
	}

	public function changeTitle($str)
	{
		$str=trim($str);
		if ($str=="") return "";
		$str = str_replace('"','',$str);
		$str = str_replace("'",'',$str);
		$str = str_replace("%",'',$str);
		$str = str_replace("&",'-',$str);
		$str = str_replace("?",'',$str);
		$str = str_replace('/','',$str);
		$str = str_replace(':','',$str);
		$str = str_replace(',','',$str);
		$str = str_replace(' ','-',$str);
		$unicode = [
			'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
			'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
			'd'=>'đ',
			'D'=>'Đ',
			'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
			'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
			'i'=>'í|ì|ỉ|ĩ|ị',
			'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
			'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
			'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
			'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
			'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
			'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
			'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
		];
		foreach($unicode as $khongdau=>$codau) 
		{
			$arr=explode("|",$codau);
			$str = str_replace($arr,$khongdau,$str);
		}
		$str = mb_convert_case($str,MB_CASE_LOWER,'utf-8'); 
		return $str;
	}

	public function getFile($filename)
	{
		if (is_file($filename)) 
		{
			ob_start();
			include $filename;
			return ob_get_clean();
		}
		return false;
	}

	public function getID()
	{
		isset($_GET['id']) ? $id = $_GET['id'] : $id = 0;
		return $id;
	}

	public function pageAddress()
	{
		isset($_GET['page']) ? $page_get = intval($_GET['page']) : $page_get = 1;
		return $page_get;
	}

	public function GetPage($page_get, $total_page)
	{
		if ($page_get <= 0)
		{
			$page_cur = 1;
		}
		else
		{
			if($page_get <= $total_page)
			{
				$page_cur = $page_get;
			}
			else
			{
				$page_cur = 1;
			}
		}
		return $page_cur;
	}

	public function ConfigPage($page_get, $data_list, $num_of_page)
	{
		$total_row = count($data_list);
		$total_page = ceil($total_row / $num_of_page);
		$page = $this->GetPage($page_get, $total_page);
		$start_page = ($page - 1) * $num_of_page;
		$end_page = $page * $num_of_page;
		return [
			"total_row" => $total_row,
			"total_page" => $total_page,
			"page" => $page,
			"start_page" => $start_page,
			"end_page" => $end_page,
			"num_of_page" => $num_of_page
		];
	}

	public function PhanTrang($url, $total_page, $page_num)
	{
		if ($total_page > 1 )
		{
			$range = 5;
			$range_min = ($range % 2 == 0) ? ($range / 2) - 1 : ($range - 1) / 2;
			$range_max = ($range % 2 == 0) ? $range_min + 1 : $range_min;
			$page_min = $page_num- $range_min;
			$page_max = $page_num+ $range_max;
			$page_min = ($page_min < 1) ? 1 : $page_min;
			$page_max = ($page_max < ($page_min + $range - 1)) ? $page_min + $range - 1 : $page_max;
			if ($page_max > $total_page)
			{
				$page_min = ($page_min > 1) ? $total_page - $range + 1 : 1;
				$page_max = $total_page;
			}
			$page_min = ($page_min < 1) ? 1 : $page_min;
			$page_pagination = '';
			if ( ($page_num > ($range - $range_min)) && ($total_page > $range) ) 
			{
				$page_pagination .= '<a href="'.$url.'page=1"><li><svg width="10px" height="10px" viewBox="0 0 316.04 319.04"><path class="fil0" d="M0 158.25c0,14.02 6.67,17.24 15.24,25.82l39.21 39.18c26.05,28.16 50.51,51.79 77.75,79.03 15.1,15.09 12.89,16.48 28.31,16.48 4.3,0 9.26,-3.57 11.43,-5.98 4.09,-4.55 4.75,-8.56 4.75,-15.17 0,-9.96 -6.82,-14.91 -12.14,-20.22l-50.39 -50.39c-5.92,-5.91 -9.69,-10.98 -15.55,-16.8 -10.09,-10.03 -46.02,-44.64 -50.08,-50.7 3.94,-5.9 39.62,-40.33 49.46,-50.08 3.58,-3.55 4.51,-4.74 7.59,-8.59l58.35 -58.61c7.91,-7.89 12.76,-10.48 12.76,-23.33 0,-17.78 -22.08,-24.98 -33.94,-12.78 -29,29.83 -60.24,57.81 -87.7,88.99l-39.19 39.2c-6.27,6.27 -15.86,12.31 -15.86,23.95z"/><path class="fil0" d="M139.36 158.25c0,14.02 6.66,17.24 15.24,25.82 14.61,14.61 30.41,28.95 43.61,44.74 1.67,2.01 3.05,3.19 4.91,5.03l78.38 78.41c12.84,13.21 34.54,6.52 34.54,-14.64 0,-9.96 -6.81,-14.91 -12.13,-20.22l-58.42 -58.54c-14.63,-17.49 -51.32,-49.96 -57.61,-59.35 7.18,-10.73 44.18,-42.53 57.06,-58.67l58.35 -58.61c7.9,-7.89 12.75,-10.48 12.75,-23.33 0,-18.18 -22.18,-24.88 -33.93,-12.78 -29,29.83 -60.25,57.81 -87.7,88.99l-39.19 39.2c-6.27,6.27 -15.86,12.31 -15.86,23.95z"/></svg></li></a>';
			}
			if ($page_num != 1) 
			{
				$page_pagination .= '<a href="'.$url.'page='.($page_num-1).'"><li><svg x="0px" y="0px" viewBox="0 0 477.175 477.175"><path d="M145.188,238.575l215.5-215.5c5.3-5.3,5.3-13.8,0-19.1s-13.8-5.3-19.1,0l-225.1,225.1c-5.3,5.3-5.3,13.8,0,19.1l225.1,225c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4c5.3-5.3,5.3-13.8,0-19.1L145.188,238.575z"/></svg></li></a>';
			}
			for ($i = $page_min;$i <= $page_max;$i++) 
			{
				if ($i == $page_num) $page_pagination .= "<li class='active'>".$i.'</li>';
				else $page_pagination.= '<a href="'.$url.'page='.$i.'"><li>'.$i.'</li></a>';
			}
			if ($page_num < $total_page) 
			{
				$page_pagination.= '<a href="'.$url.'page='.($page_num + 1).'"><li><svg x="0px" y="0px" viewBox="0 0 477.175 477.175"><path d="M360.731,229.075l-225.1-225.1c-5.3-5.3-13.8-5.3-19.1,0s-5.3,13.8,0,19.1l215.5,215.5l-215.5,215.5c-5.3,5.3-5.3,13.8,0,19.1c2.6,2.6,6.1,4,9.5,4c3.4,0,6.9-1.3,9.5-4l225.1-225.1C365.931,242.875,365.931,234.275,360.731,229.075z"/></svg></li></a>';
			}
			if (($page_num< ($total_page - $range_max)) && ($total_page > $range)) 
			{
				$page_pagination .= '<a href="'.$url.'page='.$total_page.'"><li><svg width="10px" height="10px" viewBox="0 0 896.08 904.38"><path class="fil0" d="M0 53.5c0,43.54 39.6,69.59 82.02,112.01 32.62,32.62 62.64,62.65 95.26,95.26 7.95,7.95 15.67,14.6 22.77,23.09 41.47,49.61 145.49,141.68 163.32,168.3 -14.52,21.67 -70.27,72.02 -92.61,94.37 -16.73,16.73 -30.83,30.96 -47.63,47.61l-186.97 190.52c-22.41,22.39 -36.16,29.72 -36.16,66.15 0,51.56 62.89,70.54 96.22,36.24l195.71 -195.88c9.68,-9.68 16.76,-16.81 26.46,-26.46l137.59 -141.11c25.07,-25.08 44.98,-33.34 44.98,-74.97 0,-31.39 -26.28,-49.22 -43.22,-66.15 -41.42,-41.43 -86.21,-82.07 -123.63,-126.85 -29.57,-35.37 -183.13,-181.97 -236.16,-236.57 -37.69,-38.8 -97.95,-13.86 -97.95,34.44z"/><path class="fil0" d="M395.12 53.5c0,43.54 39.6,69.59 82.02,112.01 32.62,32.62 62.62,62.67 95.26,95.26l91.72 95.25c22.69,22.69 79.65,74.15 94.37,96.14 -11.19,16.7 -112.34,114.33 -140.24,141.98l-186.97 190.52c-22.41,22.39 -36.16,29.72 -36.16,66.15 0,50.43 62.59,70.84 96.22,36.24 63.54,-65.36 189.16,-183 236.26,-236.48 44.21,-50.21 76.49,-79.97 123.5,-126.97 25.07,-25.08 44.98,-33.34 44.98,-74.97 0,-31.39 -26.28,-49.22 -43.22,-66.15 -19.67,-19.68 -36.77,-36.77 -56.44,-56.45 -18.64,-18.63 -37.04,-35.51 -54.73,-54.63 -6.64,-7.19 -6.53,-8.67 -12.46,-15.77 -4.76,-5.69 -8.67,-9.04 -13.95,-14.27l-222.21 -222.3c-19.12,-19.68 -21.08,-18.47 -52.09,-18.47 -20.45,0 -45.86,22.73 -45.86,52.91z"/></svg></li></a>';
			}
			$page_pagination="<span>".$page_num."/".$total_page."</span>".$page_pagination;               
		}
		return $page_pagination;
	}
}
?>