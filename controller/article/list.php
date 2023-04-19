<?php 
	$dataArt = $query->ChiTiet("tin", [], ["slug" => "="], ["slug" => $p]);

	$tit = $dataArt->ten;
	$key = "Keyword";
	$des = $dataArt->mota;
	$thumbs = $ROOT.'uploads/tin-tuc/'.$dataArt->hinh;
	echo md5('1');
 ?>