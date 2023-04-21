<?php
$tit = "Menu";
class Menu {
	public function DanhSach($truyvan)
	{
		$data = $truyvan->DanhSach("menu");
		return $data;
	}

	public function ThemMoi($query)
	{
		if($_POST['base64Image'] != '')
		{
			$hinh = $_POST['slug'].".jpg";
			file_put_contents('../uploads/menu/'.$hinh, file_get_contents($_POST['base64Image']));
		}
		else
		{
			$hinh = NULL;
		}
		$ten = $_POST['ten'];
		$slug = $_POST['slug'];
		$des = $_POST['des'];
		$query->ThemMoi("menu", ["ten", "slug", "des", "hinh"], ["ten" => $ten, "slug" => $slug, "des" => $des, "hinh" => $hinh]);
		header("location:./");
	}

	public function CapNhat($query, $id, $data)
	{
		if($_POST['base64Image'] != '')
		{
			// Xóa hình cũ
			unlink('../uploads/menu/'.$data->hinh);
			$hinh = $_POST['slug'].".jpg";
			file_put_contents('../uploads/menu/'.$hinh, file_get_contents($_POST['base64Image']));
		}
		else
		{
			$hinh = $data->hinh;
		}
		$ten = $_POST['ten'];
		$slug = $_POST['slug'];
		$des = $_POST['des'];
		$query->CapNhat("menu", ["ten", "slug", "des", "hinh"], ["id"], ["ten" => $ten, "slug" => $slug, "des" => $des, "hinh" => $hinh, "id" => $id]);
		header("location:./");
	}

	public function ChiTiet($id, $truyvan)
	{
		$data = $truyvan->ChiTiet("menu", [], ["id" => "="], ["id" => $id]);
		return $data;
	}
}
$menu = new Menu();
?>