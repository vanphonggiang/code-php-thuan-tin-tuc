<?php
if(isset($_POST['add']))
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
?>
<!-- Css files-->
<link rel="stylesheet" type="text/css" href="lib/crop/css/style.css" />
<link rel="stylesheet" type="text/css" href="lib/crop/css/style-example.css" />
<link rel="stylesheet" type="text/css" href="lib/crop/css/jquery.Jcrop.min.css" />

<!-- Js files-->
<script src="lib/crop/scripts/jquery.Jcrop.js"></script>
<script src="lib/crop/scripts/jquery.SimpleCropper.js"></script>
<main>
	<section class="blog">
		<div class="bread">
			<div class="left">
				<span>Menu</span>
				<span class="ngan"> | </span>
				<span>thêm mới</span>
			</div>
		</div>

		<form method="post" enctype="multipart/form-data" class="no-tab">
			<p class="tit">Tên</p>
			<input type="text" name="ten" placeholder="Tên" autocomplete="off" required />

			<p class="tit">Slug <span class="using-name">Sử dụng tên</span></p>
			<input type="text" name="slug" placeholder="Tên không dấu" autocomplete="off" required />
					
			<p class="tit">Des</p>
			<textarea rows="3" name="des" placeholder="Intro" placeholder="Description"></textarea>

			<p class="tit">Chọn hình</p>
			<div class="simple-cropper-images">
				<div class="cropme" style="width: 500px; height: 282px;"></div>
			</div>
			<input type="hidden" name="base64Image" value=""/>

			<div class="clear"></div>

			<p class="tit"></p>
			<input type="submit" name="add" value="Add" />
		</form>
		<script>$('.cropme').simpleCropper();</script>
	</section>
</main>