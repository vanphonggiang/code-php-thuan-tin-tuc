<?php
	$idMenu = $lib->getID();
	$data = $menu->ChiTiet($idMenu, $query);
	if(isset($_POST['add']))
	{
		$menu->CapNhat($query, $idMenu, $data);
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
				<span>Cập nhật</span>
			</div>
		</div>

		<form method="post" enctype="multipart/form-data" class="no-tab">
			<p class="tit">Tên</p>
			<input type="text" name="ten" placeholder="Tên" autocomplete="off" required value="<?=$data->ten?>" />

			<p class="tit">Slug <span class="using-name">Sử dụng tên</span></p>
			<input type="text" name="slug" placeholder="Tên không dấu" autocomplete="off" required value="<?=$data->slug?>" />
					
			<p class="tit">Des</p>
			<textarea rows="3" name="des" placeholder="Intro" placeholder="Description"><?=$data->des?></textarea>

			<p class="tit">Chọn hình</p>
			<div class="simple-cropper-images">
				<div class="cropme" style="width: 500px; height: 282px;"></div>
			</div>
			<input type="hidden" name="base64Image" value=""/>
			<div>
				<?php 
				if($data->hinh != NULL)
				{
					echo '<img src="../uploads/menu/'.$data->hinh.'" height=100/>';
				}
				?>
			</div>
			<div class="clear"></div>

			<p class="tit"></p>
			<input type="submit" name="add" value="Edit" />
		</form>
		<script>$('.cropme').simpleCropper();</script>
	</section>
</main>