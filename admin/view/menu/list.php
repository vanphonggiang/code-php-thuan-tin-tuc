<?php
$data = $menu->DanhSach($query);
?>
<main>
	<section class="blog">
		<div class="bread">
			<div class="left">
				<span>Menu</span>
				<span class="ngan"> | </span>
				<span>danh sách</span>
			</div>
			<div class="right">
				<div class="search">
					<input type="text" name="timtin" placeholder="Tìm tin bài" />
					<ul class="load">
						<li><a href="">Chao</a></li>
						<li><a href="">Chao</a></li>
						<li><a href="">Chao</a></li>
						<li><a href="">Chao</a></li>
						<li><a href="">Chao</a></li>
					</ul>
				</div>
				<button><a href="menu/add">Thêm mới</a></button>
			</div>
		</div>

		<table>
			<thead>
				<tr>
					<th width="5%">TT</th>
					<th>Tên</th>
					<th colspan="2" width="10%">Chức năng</th>
				</tr>
			</thead>
	 		<tbody>
	 			<?php 
	 			foreach ($data as $key => $value) {
	 			?>
				<tr>
		            <td class="giua">1</td>
		            <td class=""><?=$value->ten?></a></td>
		            <td class="giua"><a href="menu/edit?id=1&page=1"><i class="fas fa-pencil"></i></a></td>
		            <td class="giua"><a onClick="return confirm('Bạn có chắc chắn muốn xóa ?')" href="menu/del?id=1&page=1"><i class="fal fa-trash-alt"></i></a></td>
		        </tr>
		    <?php } ?>
	 		</tbody>
	    </table>
	</section>
</main>