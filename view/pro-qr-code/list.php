<?php
	$dataPro = $query->DanhSach("sanpham");
	foreach ($dataPro as $key => $value) {
		echo '<img src="uploads/qr-code/'.$value->qr.'">';
	}
?>
