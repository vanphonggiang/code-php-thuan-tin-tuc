<?php
	$data = $query->ChiTiet("info", [], ["id" => "="], ["id" => 1]);

	if(isset($_POST['edit']))
	{
		$query->CapNhat("info", ["title", "des"], ["id"], ["id" => 1, "title" => $_POST['title'], "des" => $_POST['des']]);
		header("location:info");
	}
?>

<main>
	<section class="blog">
		<div class="bread">
			<div class="left">
				<span>Info</span>
				<span class="ngan"> | </span>
				<span>Cập nhật</span>
			</div>
		</div>

		<form method="post" enctype="multipart/form-data" class="no-tab">
			<p class="tit">Title</p>
			<input class="full" type="text" name="title" placeholder="Tên" autocomplete="off" required value="<?=$data->title?>" />
					
			<p class="tit">Des</p>
			<textarea rows="3" name="des" placeholder="Description" placeholder="Description"><?=$data->des?></textarea>

			<p class="tit"></p>
			<input type="submit" name="edit" value="Edit" />
		</form>
	</section>
</main>