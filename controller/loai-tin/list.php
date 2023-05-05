<?php
	$dataLoaiTin = $arrMenu->$p;
	if($dataLoaiTin->id != 0)
	{
		$tit = $dataLoaiTin->ten;
		$key = $dataLoaiTin->ten;
		$des = $dataLoaiTin->des;
		$thumbs = $ROOT.'uploads/menu/'.$dataLoaiTin->hinh;
		$dataTin = $query->DanhSach("tin", ["ten", "hinh", "slug", "des"], ["menu" => "="], ["id" => "DESC"], [], ["menu" => $dataLoaiTin->id]);
	}
	else
	{
		header("location:./");
	}
?>