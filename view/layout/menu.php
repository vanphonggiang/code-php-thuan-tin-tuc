
	<nav>
		<ul>
			<?php 
			foreach ($arrMenu as $keyM => $valueM) {
				echo '<li><a href="'.$valueM->slug.'">'.$valueM->ten.'</a></li>';
			}
			?>

		</ul>
	</nav>