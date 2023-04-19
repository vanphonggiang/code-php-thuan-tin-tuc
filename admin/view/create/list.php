<main>
	<section class="blog">
		<form method="post">
			<input type="text" name="route" placeholder="Route" autocomplete="off" spellcheck="false" />
			<input type="submit" name="create" value="Create">
			<p class="tit">Tên route là không dấu, không ký tự đặc biệt, bao gồm "-"</p>
		</form>

	</section>
</main>
<?php 
	if(isset($_POST["create"]))
	{
		$folder = $_POST['route'];
		#Tạo folder
		if (!file_exists('view/'.$folder)) 
		{
			mkdir("view/".$folder, 0700);
			#Tạo file
			if (!file_exists('view/'.$folder.'/index.html')) {
    			touch('view/'.$folder.'/index.html');
    		}
			if (!file_exists('view/'.$folder.'/list.php')) {
				touch('view/'.$folder.'/list.php');
    			#Thêm nội dung vào file
    			$fl = fopen('view/'.$folder.'/list.php', 'a');
    			fwrite( $fl, "<?php\n\n?>");
				fclose($fl);
    		}
    		if(!file_exists('view/'.$folder.'/add.php'))
    		{
    			touch('view/'.$folder.'/add.php');
    			#Thêm nội dung vào file
				$fd = fopen('view/'.$folder.'/add.php', 'a');
    			fwrite( $fd, "<?php\n\n?>");
				fclose($fd);
    		}
    		if(!file_exists('view/'.$folder.'/edit.php'))
    		{
    			touch('view/'.$folder.'/edit.php');
    			#Thêm nội dung vào file
				$fd = fopen('view/'.$folder.'/edit.php', 'a');
    			fwrite( $fd, "<?php\n\n?>");
				fclose($fd);
    		}
    		if(!file_exists('view/'.$folder.'/del.php'))
    		{
    			touch('view/'.$folder.'/del.php');
    			#Thêm nội dung vào file
				$fd = fopen('view/'.$folder.'/del.php', 'a');
    			fwrite( $fd, "<?php\n\n?>");
				fclose($fd);
    		}
    		if (!file_exists('controller/'.$folder.'.php')) {
    			touch('controller/'.$folder.'.php');
    			#Thêm nội dung vào file
    			$fl = fopen('controller/'.$folder.'.php', 'a');
    			fwrite( $fl, "<?php\n\n?>");
				fclose($fl);
    		}
		}
		else
		{
			#Tạo file
			if (!file_exists('view/'.$folder.'/index.html')) {
    			touch('view/'.$folder.'/index.html');
    		}
			if (!file_exists('view/'.$folder.'/list.php')) {
				touch('view/'.$folder.'/list.php');
    			#Thêm nội dung vào file
    			$fl = fopen('view/'.$folder.'/list.php', 'a');
    			fwrite( $fl, "<?php\n\n?>");
				fclose($fl);
    		}
    		if(!file_exists('view/'.$folder.'/add.php'))
    		{
    			touch('view/'.$folder.'/add.php');
    			#Thêm nội dung vào file
				$fd = fopen('view/'.$folder.'/add.php', 'a');
    			fwrite( $fd, "<?php\n\n?>");
				fclose($fd);
    		}
    		if(!file_exists('view/'.$folder.'/edit.php'))
    		{
    			touch('view/'.$folder.'/edit.php');
    			#Thêm nội dung vào file
				$fd = fopen('view/'.$folder.'/edit.php', 'a');
    			fwrite( $fd, "<?php\n\n?>");
				fclose($fd);
    		}
    		if(!file_exists('view/'.$folder.'/del.php'))
    		{
    			touch('view/'.$folder.'/del.php');
    			#Thêm nội dung vào file
				$fd = fopen('view/'.$folder.'/del.php', 'a');
    			fwrite( $fd, "<?php\n\n?>");
				fclose($fd);
    		}
    		if (!file_exists('controller/'.$folder.'.php')) {
    			touch('controller/'.$folder.'.php');
    			#Thêm nội dung vào file
    			$fl = fopen('controller/'.$folder.'.php', 'a');
    			fwrite( $fl, "<?php\n\n?>");
				fclose($fl);
    		}
		}
	}
?>