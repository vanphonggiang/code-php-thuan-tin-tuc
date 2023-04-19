<form method="post">
	<input type="text" name="route" placeholder="Route" autocomplete="off" spellcheck="false" />
	<input type="submit" name="create" value="Tạo route"/>
</form>
<?php 
	if(isset($_POST["create"]))
	{
		$folder = $_POST['route'];
		#Tạo folder
		if (!file_exists('view/'.$folder)) 
		{
			mkdir("view/".$folder, 0700);
			mkdir("controller/".$folder, 0700);
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
    		if(!file_exists('view/'.$folder.'/detail.php'))
    		{
    			touch('view/'.$folder.'/detail.php');
    			#Thêm nội dung vào file
				$fd = fopen('view/'.$folder.'/detail.php', 'a');
    			fwrite( $fd, "<?php\n\n?>");
				fclose($fd);
    		}
    		if (!file_exists('controller/'.$folder.'/index.html')) {
    			touch('controller/'.$folder.'/index.html');
    		}
    		if (!file_exists('controller/'.$folder.'/list.php')) {
    			touch('controller/'.$folder.'/list.php');
    			#Thêm nội dung vào file
    			$fl = fopen('controller/'.$folder.'/list.php', 'a');
    			fwrite( $fl, "<?php\n\n?>");
				fclose($fl);
    		}
    		if (!file_exists('controller/'.$folder.'/detail.php')) {
    			touch('controller/'.$folder.'/detail.php');
    			#Thêm nội dung vào file
				$fd = fopen('controller/'.$folder.'/detail.php', 'a');
    			fwrite( $fd, "<?php\n\n?>");
				fclose($fd);
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
    		if(!file_exists('view/'.$folder.'/detail.php'))
    		{
    			touch('view/'.$folder.'/detail.php');
    			#Thêm nội dung vào file
				$fd = fopen('view/'.$folder.'/detail.php', 'a');
    			fwrite( $fd, "<?php\n\n?>");
				fclose($fd);
    		}
    		if (!file_exists('controller/'.$folder.'/index.html')) {
    			touch('controller/'.$folder.'/index.html');
    		}
    		if (!file_exists('controller/'.$folder.'/list.php')) {
    			touch('controller/'.$folder.'/list.php');
    			#Thêm nội dung vào file
    			$fl = fopen('controller/'.$folder.'/list.php', 'a');
    			fwrite( $fl, "<?php\n\n?>");
				fclose($fl);
    		}
    		if (!file_exists('controller/'.$folder.'/detail.php')) {
    			touch('controller/'.$folder.'/detail.php');
    			#Thêm nội dung vào file
				$fd = fopen('controller/'.$folder.'/detail.php', 'a');
    			fwrite( $fd, "<?php\n\n?>");
				fclose($fd);
    		}
		}
	}
?>