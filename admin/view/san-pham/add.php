<?php
	require_once "lib/qr-code/autoload.php";
	use Endroid\QrCode\Builder\Builder;
	use Endroid\QrCode\Encoding\Encoding;
	use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelHigh;
	use Endroid\QrCode\Label\Alignment\LabelAlignmentCenter;
	use Endroid\QrCode\Label\Font\NotoSans;
	use Endroid\QrCode\RoundBlockSizeMode\RoundBlockSizeModeMargin;
	use Endroid\QrCode\Writer\PngWriter;

	function ExportQR($ma)
	{
		$result = Builder::create()
			->writer(new PngWriter())
			->writerOptions([])
			->data('http://192.168.1.3/project/dat-hang?ma='.$ma)
			->encoding(new Encoding('UTF-8'))
			->errorCorrectionLevel(new ErrorCorrectionLevelHigh())
			->size(300)
			->margin(0)
			->roundBlockSizeMode(new RoundBlockSizeModeMargin())
			->validateResult(false)
			->build();
		$result->saveToFile("../uploads/qr-code/".$ma.'.png');
	}

	if(isset($_POST['add']))
	{
		$ten = $_POST['ten'];
		$ma = $_POST['ma'];
		$gia = $_POST['gia'];
		$ten = $_POST['ten'];
		ExportQR($ma);
		$query->ThemMoi("sanpham", ["ten", "ma", "gia", "qr"], ["ten" => $ten, "ma"=>$ma, "gia"=>$gia, "qr" => $ma.".png"]);
	}
?>
<main>
	<section class="blog">
		<div class="bread">
			<div class="left">
				<span>QR Code</span>
				<span class="ngan"> | </span>
				<span>thêm mới</span>
			</div>
		</div>
		<form method="post" enctype="multipart/form-data" class="no-tab">
			<p class="tit">Tên</p>
			<input type="text" name="ten" placeholder="Tên" />

			<p class="tit">Mã</p>
			<input type="text" name="ma" placeholder="Mã" />

			<p class="tit">Giá</p>
			<input type="number" name="gia" placeholder="Giá" />

			<p></p>
			<input type="submit" name="add" value="Add" />
		</form>
	</section>
</main>