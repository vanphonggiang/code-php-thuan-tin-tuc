<?php
$tit = "Tin tức";
class Tin {
	public function DanhSach($truyvan)
	{
		$data = $truyvan->DanhSach("tin", ["id", "ten"], [], ["id" => "DESC"]);
		return $data;
	}

	public function ThemMoi($query)
	{
		if($_POST['base64Image'] != '')
		{
			$hinh = $_POST['slug'].".jpg";
			file_put_contents('../uploads/tin/'.$hinh, file_get_contents($_POST['base64Image']));
		}
		else
		{
			$hinh = NULL;
		}
		$ten = $_POST['ten'];
		$slug = $_POST['slug'];
		$des = $_POST['des'];
		$menu = $_POST['menu'];
		$query->ThemMoi("tin", ["ten", "slug", "des", "hinh", "menu"], ["ten" => $ten, "slug" => $slug, "des" => $des, "hinh" => $hinh, "menu" => $menu]);
		$this->Info($query);
		header("location:./");
	}

	public function CapNhat($query, $id, $data, $lib)
	{
		$pageCurrent = $lib->pageAddress();
		if($_POST['base64Image'] != '')
		{
			// Xóa hình cũ
			unlink('../uploads/tin/'.$data->hinh);
			$hinh = $_POST['slug'].".jpg";
			file_put_contents('../uploads/tin/'.$hinh, file_get_contents($_POST['base64Image']));
		}
		else
		{
			$hinh = $data->hinh;
		}
		$ten = $_POST['ten'];
		$slug = $_POST['slug'];
		$des = $_POST['des'];
		$menu = $_POST['menu'];
		$query->CapNhat("tin", ["ten", "slug", "des", "hinh", "menu"], ["id"], ["ten" => $ten, "slug" => $slug, "des" => $des, "hinh" => $hinh, "id" => $id, "menu" => $menu]);
		$this->Info($query);
		header("location:../tin?page=".$pageCurrent);
	}

	public function ChiTiet($id, $truyvan)
	{
		$data = $truyvan->ChiTiet("tin", [], ["id" => "="], ["id" => $id]);
		return $data;
	}

	public function Xoa($id, $lib, $truyvan)
	{
		$pageCurrent = $lib->pageAddress();
		$truyvan->Xoa("tin", ["id" => "="], ["id" => $id]);
		$this->Info($truyvan);
		header("location:../tin?page=".$pageCurrent);
	}

	public function Info($truyvan)
	{
		$data = $truyvan->DanhSach("tin", ["slug", "hinh", "ten", "des"], [], ["id" => "DESC"]);
		$truyvan->CapNhat("info", ["tin"], ["id"], ["id" => 1, "tin" => json_encode($data)]);
	}
}
$tin = new Tin();
?>