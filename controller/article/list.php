<?php 
	$dataArt = $query->ChiTiet("tin", [], ["slug" => "="], ["slug" => $p]);

	$tit = $dataArt->ten;
	$key = $dataArt->ten;
	$des = $dataArt->des;
	$thumbs = $ROOT.'uploads/tin/'.$dataArt->hinh;
 ?>