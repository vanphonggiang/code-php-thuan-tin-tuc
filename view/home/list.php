
	<main>
		<h1>Code Thuần PHP</h1>
		<ul>
			<?php 
				foreach ($dataTin as $key => $value) 
				{
				?>
					<li>
						<img src="uploads/tin/<?=$value->hinh?>" alt="<?=$value->ten?>" />
						<h2><a href="<?=$value->slug?>"><?=$value->ten?></a></h2>
						<p><?=$value->des?></p>
					</li>
				<?php
				}
			?>
			
		</ul>
	</main>