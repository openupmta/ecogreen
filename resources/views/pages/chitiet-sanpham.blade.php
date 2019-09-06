@extends('master-layout')
@section('title')
Chi tiết sản phẩm
@endsection



@section('css')
<link rel="stylesheet" href="{{asset('css/chitiet-sanpham.css')}}">
@endsection
@section('content')
<main id="chitietsanpham">
	<div class="container">
		<div class="link">
			<a href="{{route('trang-chu')}}">Trang chủ</a>
			<span> > </span>
			<a href="{{route('chi-tiet-san-pham')}}">Chi tiết sản phẩm</a>
		</div>
		<div class="row mt-4">
			<div class="col-md-9">
				<div class="row">
					<div class="col-6">
						<img id="zoom_mw" src="images/sp-01.jpg" data-zoom-image="images/sp-01.jpg"/>
					</div>
					<div class="col-6">
						<h2 class="title">QIK(FOR WOMEN) 30V</h2>
						<p class="status">Tình trạng: <span>Còn Hàng</span></p>
						<ul class="cong-dung">
							<li>Giảm rụng tóc hiệu quả</li>
							<li>Kích thích tóc mọc nhanh, chắc khỏe, giúp tóc dày và bóng mượt</li>
							<li>Giúp phục hồi tóc hư tổn bên trong, ổn định độ ẩm của da đầu; hạn chế tóc khô, gãy, chẻ ngọn.</li>
							<li>Làm chậm quá trình bạc tóc.</li>
						</ul>
						<p class="price">Giá: <strong>300.000 VND</strong></p>
						<div class="so-luong-san-pham" id="numbers">
							<div class="so-luong">
								<button class="btn btn-secondary" v-on:click="giam">-</button>
								<p class="soluong"> @{{ dem }} </p>
								<button class="btn btn-secondary" v-on:click="tang" >+</button>
							</div>
							<a href="#" class="btn btn-danger ml-6"><i class="fa fa-shopping-cart"></i> Mua hàng</a>
						</div>
					</div>
				</div>
				<div class="thong-tin-sp">
					  <ul class="nav nav-pills">
					    <li class="active"><a data-toggle="pill" href="#home" style="background-color: #8BC53F;">Chi tiết sản phẩm</a></li>
					    <li><a data-toggle="pill" href="#menu1">Giao hàng - Thanh toán</a></li>
					    <li><a data-toggle="pill" href="#menu2">Cam kết từ chúng tôi</a></li>
					    <li><a data-toggle="pill" href="#menu3">Đánh giá (0)</a></li>
					  </ul>
					  
					  <div class="tab-content mt-4">
					    <div id="home" class="tab-pane fade in active">
					      <h3>Công Dụng</h3>
					      <p>Qik (For Women) với công thức chuyên biệt cho nữ giới, chứa các tinh chất thiên nhiên, giúp cân bằng hệ thần kinh nội tiết và tăng trưởng tế bào mầm tóc:</p>
					      <ul>
					      	<li>Giúp giảm rụng tóc (*), ở nữ giới.</li>
					      	<li>Giúp tóc mọc nhanh, chắc khỏe tóc dày và bóng mượt.</li>
					      	<li>Giúp phục hồi tóc hư tổn từ bên trong, ổn định độ ẩm của da đầu; hạn chế tóc khô, gãy, chẻ ngọn.</li>
					      	<li>Làm chậm quá trình bạc tóc.</li>
					      </ul>
					      <p>(*) Tinh chất Cynatine® đã được thử nghiệm lâm sàng tạiUniversity of Pavia về hiệu quả giảm rụng tóc trong vòng 4 đến 8 tuần sử dụng.
					      </p>
					      <h3>Thành phần</h3>
					      <table>
					      	<tbody>
					      		<tr>
					      			<td>
					      				<p>Cynatine®</p>
					      			</td>
					      			<td>130 mg</td>
					      		</tr>
					      		<tr>
					      			<td>
					      				<p>Aged Black Garlic Extract</p>
					      			</td>
					      			<td>120 mg</td>
					      		</tr>
					      		<tr>
					      			<td>
					      				<p>Millet Seed Extract</p>
					      			</td>
					      			<td>100 mg</td>
					      		</tr>
					      		<tr>
					      			<td>
					      				<p>Black Cohosh Extract</p>
					      			</td>
					      			<td>50 mg</td>
					      		</tr>
					      		<tr>
					      			<td>
					      				<p>Pumpkin Seed Extract</p>
					      			</td>
					      			<td>50 mg</td>
					      		</tr>
					      		<tr>
					      			<td>
					      				<p>Biotin, Vitamin B5, Vitamin B1, Vitamin D3,  Zinc, Iron,Potassium, L-Cystine, Omega-3	
										</p>
					      			</td>
					      			<td></td>
					      		</tr>
					      		<tr>
					      			<td>
					      				<p>Magnesium Stearate vừa đủ 1 viên</p>
					      			</td>
					      			<td></td>
					      		</tr>

					      	</tbody>
					      </table>
					    </div>
					    <div id="menu1" class="tab-pane fade">
					      <h3>Menu 1</h3>
					      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
					    </div>
					    <div id="menu2" class="tab-pane fade">
					      <h3>Menu 2</h3>
					      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
					    </div>
					    <div id="menu3" class="tab-pane fade">
					      <p>Không có đánh giá nào</p>
					      <h3>Viết đánh giá</h3>
					      <form action="" class="form-danh-gia">
					      	<h5>Tên bạn<span style="color: red">*</span>:</h5>
					      	<input type="text" style="padding-left: 5px">
					      	<h5>Bình chọn <span style="color: red">*</span>:</h5>
							<p><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></p>
							<h5>Đánh giá của bạn:</h5>
							<textarea name="text"></textarea>
					      </form>
					      <button class="btn btn-primary" v-on:keyup.enter="thanks">Gửi</button>

					    </div>
				  </div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="danh-muc-san-pham">
					<div class="dropdown">
					  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
					    Tìm theo thương hiệu
					  </button>
					  <div class="dropdown-menu">
					    <a class="dropdown-item" href="#">Qik</a>
					    <a class="dropdown-item" href="#">Angela Gold</a>
					    <a class="dropdown-item" href="#">Alipas</a>
					    <a class="dropdown-item" href="#">Alipas</a>
					    <a class="dropdown-item" href="#">Alipas</a>
					    <a class="dropdown-item" href="#">Alipas</a>
					    <a class="dropdown-item" href="#">Alipas</a>
					  </div>
					</div>
					<div class="dropdown">
					  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
					    Tìm theo bệnh
					  </button>
					  <div class="dropdown-menu">
					    <a class="dropdown-item" href="#">Sức khỏe phụ nữ</a>
					    <a class="dropdown-item" href="#">Tăng cường sinh lý nữ</a>
					    <a class="dropdown-item" href="#">Tăng cường sinh lý nữ</a>
					    <a class="dropdown-item" href="#">Tăng cường sinh lý nữ</a>
					    <a class="dropdown-item" href="#">Tăng cường sinh lý nữ</a>
					    <a class="dropdown-item" href="#">Tăng cường sinh lý nữ</a>
					    <a class="dropdown-item" href="#">Tăng cường sinh lý nữ</a>
					    <a class="dropdown-item" href="#">Tăng cường sinh lý nữ</a>
					    <a class="dropdown-item" href="#">Tăng cường sinh lý nữ</a>
					    <a class="dropdown-item" href="#">Chống da lão hóa</a>
					  </div>
					</div>
					<div class="dropdown">
					  <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
					    Tìm theo giá
					  </button>
					  <div class="dropdown-menu">
					    <a class="dropdown-item" href="#">150.000-250.000 đ</a>
					    <a class="dropdown-item" href="#">250.000-500.000 đ</a>
					    <a class="dropdown-item" href="#">500.000-1.000.000 đ</a>
					    <a class="dropdown-item" href="#">Trên 1.000.000 đ</a>

					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>

@endsection

@section('js')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/elevatezoom/3.0.8/jquery.elevatezoom.min.js"></script>
	<script src="js/chitiet-sanpham.js"></script>
	<script>
		$("#zoom_mw").elevateZoom({scrollZoom : true});
	</script>
@endsection
