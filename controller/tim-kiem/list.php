<?php
	$tit = "Tìm kiếm bài viết trên codethuan.com";
	if(isset($_GET['keyword']))
	{
		$des = "Tìm kiếm bài viết trên trang codethuan.com với từ khóa ".$_GET['keyword'];
		$dataTin = $query->DanhSach("tin", ["id", "ten", "hinh", "slug", "menu", "loai", "mota"], ["ten" => "LIKE"], ["id" => "DESC"], [], ["ten" => "%".$_GET['keyword']."%"]);
	}
	else
	{
		$des = "Tìm kiếm bài viết trên trang codethuan.com";
		$dataTin = $query->DanhSach("tin", ["id", "ten", "hinh", "slug", "menu", "loai", "mota"], [], ["id" => "DESC"]);
	}
	$key = $dataInfo->keyword;
	$thumbs = $ROOT.'uploads/info.jpg';
?>