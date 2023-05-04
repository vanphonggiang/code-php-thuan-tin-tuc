<?php
	$dataLoaiTin = $arrMenu->$p;
	if($dataLoaiTin->id != 0)
	{
		$tit = $dataLoaiTin->ten;
		$key = $dataLoaiTin->ten;
		$des = $dataLoaiTin->des;
		$thumbs = $ROOT.'uploads/menu/'.$dataLoaiTin->hinh;
	}
	else
	{
		header("location:./");
	}
?>