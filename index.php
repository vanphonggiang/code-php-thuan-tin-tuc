<?php 
require_once "router/route.php";
?>

<!DOCTYPE html>
<html lang="vi-VN">
<head>
	<base href="<?=$__URL__?>" />
	<title><?=$tit?></title>
	<meta charset="utf-8"/>
	<meta http-equiv="content-language" content="vi" / >
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="<?=$des?>" />
	<meta name="keywords" content="<?=$key?>" />
	<meta name='revisit-after' content='1 days' />
	<meta name="robots" content="noodp,index,follow" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?=$tit?>" />
	<meta property="og:image" content="<?=$thumbs?>" />
	<meta property="og:image:secure_url" content="<?=$thumbs?>" />
	<meta property="og:description" content="<?=$des?>" />
	<meta property="og:url" content="<?=$actual_link?>" />
	<meta property="og:site_name" content="<?=$tit?>" />
	<meta name="format-detection" content="telephone=no" />
	<link rel="preload" as="image" href="uploads/news.svg" />
	<link rel="shortcut icon" href="favicon.png" type="image/png" />
	<link rel="canonical" href="<?=$actual_link?>" />
	<link rel="stylesheet" type="text/css" href="public/css/style.css?v=<?=time()?>" />
	<script src="public/js/jquery.js"></script>
</head>
<body>
	<?php
	require_once "view/layout/header.php";
	require_once "view/layout/menu.php";
	require_once $path;
	require_once "view/layout/footer.php";
	?>
	
	<script>
		$(document).ready(function(){
			$(window).on("ajaxComplete", function() {
				$(window).lazyLoadXT()
			});

			$(document).on('click', 'span.close svg', function(){
				$(".popup").css("display", "none");
				$(".popup").html('');
			});
		});
	</script>
</body>
</html>
<?php ob_end_flush(); ?>