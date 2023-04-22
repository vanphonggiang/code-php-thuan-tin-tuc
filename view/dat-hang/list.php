<?php
	if(isset($_GET['ma']))
	{
		$datSanPham = $query->ChiTiet("sanpham", [], ["ma" => "="], ["ma" => $_GET['ma']]);
		echo $datSanPham->ten." | ".$datSanPham->ma;
	}
?>
<form method="post">
	<input type="text" name="ten" value="<?=$datSanPham->ten?>" />
	<input type="text" name="ma" value="<?=$datSanPham->ma?>" />
	<input type="number" name="gia" value="<?=$datSanPham->gia?>" />
	<input type="number" name="soluong" value="1" />
	<input type="submit" name="order" value="Đặt hàng" />
</form>