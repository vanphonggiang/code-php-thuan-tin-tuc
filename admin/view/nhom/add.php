<?php
	if(isset($_POST['ten']))
	{
		require_once "../../model/Query.php";
		$query = new Query();
		$last = $query->ThemMoi("nhom", ["ten"], ["ten" => $_POST['ten']]);
		$data = $query->DanhSach("nhom", ["id"]);
		echo json_encode([
			"status" => "success",
			"id" => $last,
			"total" => count($data)
		]);
	}
	else
	{
		echo json_encode([
			"status" => "fail",
			"mess" => "Lỗi truy cập"
		]);
	}
?>