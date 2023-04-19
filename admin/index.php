<?php require_once "route/route.php"; ?>

<!DOCTYPE html>
<html lang="vi">
<head>
	<base href="<?=$__URL__?>" />
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title><?=$tit?></title>
	<link rel="shortcut icon" href="public/image/favicon.svg" />
	<link rel="stylesheet" type="text/css" href="public/css/style.css?v1.0" />
	<link rel="stylesheet" href="lib/font-awesome-pro-6.0/css/all.css" />
	<link rel="stylesheet" href="lib/scrollbar/smooth-scrollbar.css" />
	<link rel="stylesheet" type="text/css" href="lib/datepicker/jquery-ui.min.css"/>
	<script src="public/js/jquery.js"></script>
	<script src="lib/ckeditor/ckeditor.js"></script>
	<script src="lib/ckfinder/ckfinder.js"></script>
	<script src="lib/scrollbar/smooth-scrollbar.js"></script>
	<script src="lib/datepicker/jquery-ui.min.js"></script>
	<script src="lib/datepicker/jquery.ui.datepicker-vi-VN.js"></script>
</head>
<body>
	<?php 
		require_once "view/layout/header.php";
		echo '<aside>';
			require_once "view/layout/menu.php"; 
			require_once $path;
		echo '</aside>';
	?>

	<div class="loading"><img src="public/image/loading.svg"/></div>
	<script src="public/js/app.js"></script>
	<script>
		let page = '<?=$p?>';
		$('a[href="'+page+'"]').addClass("actived");
	</script>
</body>
</html>
<?php ob_end_flush(); ?>