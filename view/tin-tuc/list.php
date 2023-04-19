<?php

?>
<ul>
	<?php 
	foreach ($dataTin as $key => $value) {
		echo '<li><a href="'.$value->slug.'">'.$value->ten.'</a></li>';
	}
	 ?>
	
</ul>