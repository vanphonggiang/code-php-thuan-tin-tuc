<?php
$tit = "Menu";
class Menu {
	public function DanhSach($truyvan)
	{
		$data = $truyvan->DanhSach("menu");
		return $data;
	}
}
$menu = new Menu();
?>