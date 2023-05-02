<?php
	if(isset($_POST['user']))
	{
		require_once "../../model/Query.php";
		$query = new Query();

		// Check user
		$dataThanhVien = $query->ChiTiet("thanhvien", [], ["user" => "="], ["user" => $_POST['user']]);
		if(empty($dataThanhVien))
		{
			$last = $query->ThemMoi("thanhvien", ["user", "pass", "fullname", "nhom"], ["user" => $_POST['user'], "pass" => md5($_POST['pass']), "fullname" => $_POST['fullname'], "nhom" => $_POST['nhom']]);
			$data = $query->DanhSach("thanhvien", ["id"]);
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
				"mess" => "Thành viên đã tồn tại"
			]);
		}
	}
	else
	{
		echo json_encode([
			"status" => "fail",
			"mess" => "Lỗi truy cập"
		]);
	}
?>