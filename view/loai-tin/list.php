
	<link rel="stylesheet" type="text/css" href="public/css/home.css?v=<?=time()?>" />
	<main>
		<h1><?=$dataLoaiTin->ten?></h1>
		<ul>
			<?php 
				foreach ($dataTin as $key => $value) 
				{
				?>
					<li>
						<a href="<?=$value->slug?>"><img class="lazy" src="uploads/news.svg" data-src="uploads/tin/<?=$value->hinh?>" alt="<?=$value->ten?>" width="500" height="282" /></a>
						<h2><a href="<?=$value->slug?>"><?=$value->ten?></a></h2>
						<p><?=$value->des?></p>
					</li>
				<?php
				}
			?>
			
		</ul>
	</main>