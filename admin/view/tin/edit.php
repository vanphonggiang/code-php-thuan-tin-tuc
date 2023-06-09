<?php
	require_once "controller/menu.php";
	$idTin = $lib->getID();
	$data = $tin->ChiTiet($idTin, $query);
	$dataListMenu = $menu->DanhSach($query);

	if(isset($_POST['add']))
	{
		$tin->CapNhat($query, $idTin, $data, $lib);
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
				<span>Tin</span>
				<span class="ngan"> | </span>
				<span>Cập nhật</span>
			</div>
		</div>

		<form method="post" enctype="multipart/form-data" class="no-tab">
			<select name="menu">
				<option value="0">Chọn</option>
				<?php 
				foreach ($dataListMenu as $key => $value) {
					if($value->id == $data->menu)
					{
						echo '<option value="'.$value->id.'" selected>'.$value->ten.'</option>';
					}
					else
					{
						echo '<option value="'.$value->id.'">'.$value->ten.'</option>';
					}
				}
				?>
			</select>

			<p class="tit">Tên <span class="slug">Tên không dấu</span></p>
			<input class="full" type="text" name="ten" placeholder="Tên" autocomplete="off" required value="<?=$data->ten?>" />

			<p class="tit">Slug</p>
			<input class="full" type="text" name="slug" placeholder="Tên không dấu" autocomplete="off" required value="<?=$data->slug?>" />
					
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
					echo '<img src="../uploads/tin/'.$data->hinh.'" height=100/>';
				}
				?>
			</div>
			<div class="clear"></div>

			<textarea class="ckeditor" name="noidung"><?=$data->noidung?></textarea>

			<p class="tit"></p>
			<input type="submit" name="add" value="Edit" />
		</form>
		<script>
			$('.cropme').simpleCropper();
			
			$('input[name="ten"]').keyup(function(){
				$(".slug").show();
			});
			
			$(".slug").click(function(){
				let ten = $('input[name="ten"]').val();
				$.ajax({
					method: "POST",
					data: {ten:ten},
					url: "view/tin/slug.php",
					success:function(data){
						$('input[name="slug"]').val(data);
						$(".slug").hide();
					}
				});
			});
		</script>
	</section>
</main>