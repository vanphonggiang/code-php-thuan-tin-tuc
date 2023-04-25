<?php
	$data = $menu->DanhSach($query);
	$pageGet = $lib->pageAddress();
	$processPage = $lib->ConfigPage($pageGet, $data, 3);
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
				$thutu = 1;
				foreach ($data as $key => $value) {
					if( $key >= $processPage['start_page'] && $key < $processPage['end_page'] ){
				?>
				<tr>
					<td class="giua"><?=$thutu?></td>
					<td><?=$value->ten?></a></td>
					<td class="giua"><a href="menu/edit?id=<?=$value->id?>&page=<?=$pageGet?>"><i class="fas fa-pencil"></i></a></td>
					<td class="giua"><a onClick="return confirm('Bạn có chắc chắn muốn xóa ?')" href="menu/del?id=<?=$value->id?>&page=<?=$pageGet?>"><i class="fal fa-trash-alt"></i></a></td>
				</tr>
				<?php $thutu ++;} }?>
			</tbody>
		</table>

		<?php
		if($processPage['total_row'] > $processPage['num_of_page'])
		{
			echo '<div class="page">';
				echo '<ul>';
					echo $lib->PhanTrang($p.'?', $processPage['total_page'], $processPage['page']);
				echo '</ul>';
			echo '</div>';
		}
		?>
	</section>
</main>