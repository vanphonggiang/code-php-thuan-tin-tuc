<?php 
	$dataNhom = $query->DanhSach("nhom");
?>
<main>
	<section class="blog">
		<div class="bread">
			<div class="left">
				<span>Nhóm</span>
				<span class="ngan"> | </span>
				<span>danh sách</span>
			</div>
			<div class="right">
				<button>Thêm mới</button>
			</div>
		</div>

		<table>
			<thead>
				<tr>
					<th width="5%">TT</th>
					<th class="left">Tên</th>
					<th width="10%" class="giua">Update</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$stt = 1;
				foreach ($dataNhom as $key => $value) 
				{
					?>
					<tr>
						<td class="giua"><?=$stt?></td>
						<td class="ten-<?=$value->id?>"><?=$value->ten?></td>
						<td class="giua edit-<?=$value->id?>"><i class="edit-nhom fa-regular fa-pen-to-square" data=<?=$value->id?>></i></td>
					</tr>
					<?php 
					$stt++;
				} 
				?>
			</tbody>
		</table>
	</section>

	<section class="popup"></section>
</main>
<script>
	$('.right button').click(function(){
		$(".popup").html(`
			<div class="center">
				<span class="close"><i class="fa-solid fa-circle-xmark"></i></span>
				<h2>Thêm mới</h2>
				
				<p><b>Tên</b></p>
				<input type="text" name="ten" placeholder="Tên" autocomplete="off" spellcheck="false" />

				<p></p>
				<input type="button" name="add" value="Thêm" />
			</div>
		`);
		$(".popup").css("display", "flex");
	});

	$(document).on('click', 'span.close i', function(){
		$(".popup").css("display", "none");
		$(".popup").html('');
	});

	$(document).on('click', 'input[name="add"]', function(){
		let ten = $('input[name="ten"]').val();
		if(ten != '')
		{
			$.ajax({
				method : "POST",
				data: {ten:ten},
				url: "view/nhom/add.php",
				success:function(dulieu)
				{
					let info = JSON.parse(dulieu);
					if(info.status == "fail")
					{
						Swal.fire({
							icon: 'error',
							text: 'Tên là bắt buộc'
						});
					}
					else
					{
						$("tbody").append(`
							<tr>
								<td class="giua">${info.total}</td>
								<td class="ten-${info.id}">${ten}</td>
								<td class="giua edit-${info.id}"><i class="edit-nhom fa-regular fa-pen-to-square" data=${info.id}></i></td>
							</tr>
						`);
						$(".popup").css("display", "none");
						$(".popup").html('');
					}
				}
			});
		}
		else
		{
			Swal.fire({
				icon: 'error',
				text: 'Tên là bắt buộc'
			});
		}
	});

	$(document).on("click", ".edit-nhom", function(){
		let id = parseInt($(this).attr("data"));
		$.ajax({
			method: "POST",
			data:{id:id},
			url: "view/nhom/edit.php",
			success:function(dulieu)
			{
				let info = JSON.parse(dulieu);
				if(info.status == "fail")
				{
					Swal.fire({
						icon: 'error',
						text: 'Lỗi truy cập'
					});
				}
				else
				{
					$(".popup").html(`
						<div class="center">
							<span class="close"><i class="fa-solid fa-circle-xmark"></i></span>
							<h2>Cập nhật</h2>
							
							<p><b>Tên</b></p>
							<input type="text" name="ten" placeholder="Ngày" autocomplete="off" spellcheck="false" value="${info.nhom.ten}" />

							<p></p>
							<input type="button" name="edit" value="Sửa" data=${info.nhom.id} />
						</div>
					`);
					$(".popup").css("display", "flex");
				}
			}
		});
	});

	$(document).on("click", 'input[name=edit]', function(){
		let id = parseInt($(this).attr("data"));
		let ten = $('input[name=ten]').val();
		$.ajax({
			method: "POST",
			data:{id:id, ten:ten},
			url: "view/nhom/edit-save.php",
			success:function(dulieu)
			{
				let info = JSON.parse(dulieu);
				if(info.status == "fail")
				{
					Swal.fire({
						icon: 'error',
						text: 'Lỗi truy cập'
					});
				}
				else
				{
					$(".ten-"+info.id).html(info.ten);
					$(".popup").css("display", "none");
					$(".popup").html('');
				}
			}
		});
	});
</script>