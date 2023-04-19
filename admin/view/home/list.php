<main>
	<section class="blog">
		<div class="bread">
			<div class="left">
				<span>News</span>
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
				<button><a href="news/add">Thêm mới</a></button>
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
	 			for ($i=0; $i < 10; $i++) 
	 			{ 
	 			?>
				<tr>
		            <td class="giua">1</td>
		            <td class="">Tieu de cua tin tuc</a></td>
		            <td class="giua"><a href="news/edit?id=1&page=1"><i class="fas fa-pencil"></i></a></td>
		            <td class="giua"><a onClick="return confirm('Bạn có chắc chắn muốn xóa ?')" href="news/del?id=1&page=1"><i class="fal fa-trash-alt"></i></a></td>
		        </tr>
		    <?php } ?>
	 		</tbody>
	    </table>

	    <div class="page">
	    	<ul>
	    		<a href=""><li>1</li></a>
	    		<a href=""><li>2</li></a>
	    		<li class="actived">3</li>
	    		<a href=""><li>4</li></a>
	    		<a href=""><li>5</li></a>
	    	</ul>
	    </div>

	    <ul class="tab">
	        <li><a href="#tab-main">Thông tin</a></li>
	        <li><a href="#tab-san-pham">Sản phẩm</a></li>
	        <li><a href="#tab-seo">SEO</a></li>
	        <li><a href="#tab-noi-dung">Bài viết</a></li>
	    </ul>

	    <form method="post" enctype="multipart/form-data">
	    	<div class="tab-content">
	    	
		    	<!-- Thông tin -->
		        <div class="tab-item" id="tab-main">
		        	<p class="tit">Loại</p>
					<select name="loai" required>
						<option value="0">Chọn</option>
						<option value="1">A</option>
						<option value="1">A</option>
						<option value="1">A</option>
						<option value="1">A</option>
						<option value="1">A</option>
						<option value="1">A</option>
					</select>

					<p class="tit">mot <span class="slug">Tên không dấu</span></p>
					<input class="mot chon-ngay" type="text" name="ten" placeholder="Tên" autocomplete="off" required />

					<p class="tit">hai</p>
					<input class="hai" type="text" name="ten" placeholder="Tên" autocomplete="off" required />

					<p class="tit">ba</p>
					<input class="ba" type="text" name="ten" placeholder="Tên" autocomplete="off" required />

					<p class="tit">bon</p>
					<input class="bon" type="text" name="ten" placeholder="Tên" autocomplete="off" required />

					<p class="tit">nam</p>
					<input class="nam" type="text" name="ten" placeholder="Tên" autocomplete="off" required />

					<p class="tit">sau</p>
					<input class="sau" type="text" name="ten" placeholder="Tên" autocomplete="off" required />

					<p class="tit">bay</p>
					<input class="bay" type="text" name="ten" placeholder="Tên" autocomplete="off" required />

					<p class="tit">tam</p>
					<input class="tam" type="text" name="ten" placeholder="Tên" autocomplete="off" required />

					<p class="tit">chin</p>
					<input class="chin" type="text" name="ten" placeholder="Tên" autocomplete="off" required />

					<p class="tit">full</p>
					<input class="full" type="text" name="ten" placeholder="Tên" autocomplete="off" required />

		        	<p class="tit">Tên</p>
					<input type="text" name="ten" placeholder="Tên" autocomplete="off" required />

					<p class="tit">Slug <span class="using-name">Sử dụng tên</span></p>
					<input type="text" name="slug" placeholder="Tên không dấu" autocomplete="off" required />
					
					<p class="tit">Like</p>
					<label><input type="checkbox" name="like" value="1" /> Bong da</label>
					<label><input type="checkbox" name="like" value="1" /> Bong da</label>
					<label><input type="checkbox" name="like" value="1" /> Bong da</label>

					<p class="tit">Ẩn / Hiện</p>
					<label>Ẩn <input type="radio" name="anhien" value="0" /></label>
					<label>Hiện <input type="radio" name="anhien" value="1" checked /></label>
					
					<p class="tit">Quan tâm</p>
					<label>Không <input type="radio" name="quantam" value="0" checked /></label>
					<label>Có <input type="radio" name="quantam" value="1" /></label>

					<p class="tit">Form liên hệ</p>
					<label>Không <input type="radio" name="form" value="0" checked /></label>
					<label>Có <input type="radio" name="form" value="1" /></label>

					<p class="tit">Hình</p>
					<input type="file" name="file" id="file" required/> 400 x 245

					<p class="tit">Link file</p>
					<input type="text" name="tep" placeholder="Link file" autocomplete="off" />
		        </div>

		        <!-- Sản phẩm -->
		        <div class="tab-item" id="tab-san-pham">
		        	<p class="tit">Mã sản phẩm</p>
					<input type="text" name="ma" placeholder="Mã sản phẩm" autocomplete="off" /> 

					<p class="tit">Giá sản phẩm</p>
					<input type="number" name="gia" placeholder="Giá sản phẩm" autocomplete="off" />
		        </div>

		        <!-- SEO -->
		        <div class="tab-item" id="tab-seo">
		            <p class="tit">Des</p>
		            <textarea rows="10" name="intro" placeholder="Intro" placeholder="Description"></textarea>

		            <p class="tit">Keyword</p>
		            <input type="text" name="keyword" placeholder="Keyword" autocomplete="off" /> 
		        </div>

		        <!-- Nội dung -->
		        <div class="tab-item" id="tab-noi-dung">
		            <textarea name="noidung" placeholder="Nội dung" class="ckeditor" placeholder="Nội dung"></textarea>
		        </div>
	    	</div>

	    	<p class="tit"></p>
			<input type="submit" name="update" value="Add" />
		</form>

		<?php require_once "view/layout/footer.php"; ?>
	</div>
</main>