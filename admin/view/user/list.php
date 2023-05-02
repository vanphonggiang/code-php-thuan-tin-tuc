<?php 
	$dataThanhVien = $query->DanhSach("thanhvien");
	$dataNhom = $query->DanhSach("nhom");
?>
<main>
	<section class="blog">
		<div class="bread">
			<div class="left">
				<span>Thành viên</span>
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
					<th class="left">User</th>
					<th class="left">Fullname</th>
					<th width="10%" class="giua">Update</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$stt = 1;
				foreach ($dataThanhVien as $key => $value) 
				{
					?>
					<tr>
						<td class="giua"><?=$stt?></td>
						<td class="user-<?=$value->id?>"><?=$value->user?></td>
						<td class="fullname-<?=$value->id?>"><?=$value->fullname?></td>
						<td class="giua edit-<?=$value->id?>"><i class="edit-user fa-regular fa-pen-to-square" data=<?=$value->id?>></i></td>
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
				
				<p><b>User</b></p>
				<input type="text" name="user" placeholder="Username" autocomplete="off" spellcheck="false" />

				<p><b>Pass</b></p>
				<input type="password" name="pass" placeholder="Password" autocomplete="off" spellcheck="false" />

				<p><b>Fullname</b></p>
				<input type="text" name="fullname" placeholder="Fullname" autocomplete="off" spellcheck="false" />

				<p><b>Nhóm</b></p>
				<select>
					<option value="0">Chọn</option>
					<?php 
					foreach($dataNhom as $key => $value)
					{
						echo '<option value="'.$value->id.'">'.$value->ten.'</option>';
					}
					?>
				</select>

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
		let user = $('input[name="user"]').val();
		let pass = $('input[name="pass"]').val();
		let fullname = $('input[name="fullname"]').val();
		let nhom = parseInt($('select').val());
		if(user != '')
		{
			if(pass == '')
			{
				Swal.fire({
					icon: 'error',
					text: 'Password không được để trống'
				});
			}
			else
			{
				if(fullname == '')
				{
					Swal.fire({
						icon: 'error',
						text: 'Tên không được để trống'
					});
				}
				else
				{
					if(nhom == 0)
					{
						Swal.fire({
							icon: 'error',
							text: 'Nhóm thành viên là bắt buộc'
						});
					}
					else
					{
						$.ajax({
							method : "POST",
							data: {user:user, pass:pass, fullname:fullname, nhom:nhom},
							url: "view/user/add.php",
							success:function(dulieu)
							{
								let info = JSON.parse(dulieu);
								if(info.status == "fail")
								{
									Swal.fire({
										icon: 'error',
										text: info.mess
									});
								}
								else
								{
									$("tbody").append(`
										<tr>
											<td class="giua">${info.total}</td>
											<td class="user-${info.id}">${user}</td>
											<td class="fullname-${info.id}">${fullname}</td>
											<td class="giua edit-${info.id}"><i class="edit-user fa-regular fa-pen-to-square" data=${info.id}></i></td>
										</tr>
									`);
									$(".popup").css("display", "none");
									$(".popup").html('');
								}
							}
						});
					}
				}
			}
		}
		else
		{
			Swal.fire({
				icon: 'error',
				text: 'User là bắt buộc'
			});
		}
	});

	$(document).on("click", ".edit-user", function(){
		let id = parseInt($(this).attr("data"));
		$.ajax({
			method: "POST",
			data:{id:id},
			url: "view/user/edit.php",
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
					$(".popup").html(info.thanhvien);
					$(".popup").css("display", "flex");
				}
			}
		});
	});

	$(document).on("click", 'input[name=edit]', function(){
		let id = parseInt($(this).attr("data"));
		let fullname = $('input[name="fullname"]').val();
		let nhom = parseInt($('select').val());
		$.ajax({
			method: "POST",
			data:{id:id, fullname:fullname, nhom:nhom},
			url: "view/user/edit-save.php",
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
					$(".fullname-"+info.id).html(info.fullname);
					$(".popup").css("display", "none");
					$(".popup").html('');
				}
			}
		});
	});
</script>