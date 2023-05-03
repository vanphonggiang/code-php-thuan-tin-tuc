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
		$this->Info($query);
		header("location:./");
	}

	public function CapNhat($query, $id, $data, $lib)
	{
		$pageCurrent = $lib->pageAddress();
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
		$this->Info($query);
		header("location:../menu?page=".$pageCurrent);
	}

	public function ChiTiet($id, $truyvan)
	{
		$data = $truyvan->ChiTiet("menu", [], ["id" => "="], ["id" => $id]);
		return $data;
	}

	public function Xoa($id, $lib, $truyvan)
	{
		$pageCurrent = $lib->pageAddress();
		$truyvan->Xoa("menu", ["id" => "="], ["id" => $id]);
		$this->Info($truyvan);
		header("location:../menu?page=".$pageCurrent);
	}

	public function Info($truyvan)
	{
		$data = $truyvan->DanhSach("menu");
		$arrMenu = [];
		foreach ($data as $key => $value) {
			$arrMenu[$value->slug] = $value;
		}
		$truyvan->CapNhat("info", ["menu"], ["id"], ["id" => 1, "menu" => json_encode($arrMenu)]);
	}
}
$menu = new Menu();
?>