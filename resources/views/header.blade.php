<header>
	<div class="header-1 container">
		<div class="">
			<div class="row">
				<div class="col-md-3">
					<img src="images/logo.png" alt="" style="width:60%">
				</div>

				<div class="col-md-5 mb-3 mt-4 search">
					<div class="input-group " style="width:80%">
						<input type="text" class="form-control" placeholder="Tìm kiếm sản phẩm">
						<div class="input-group-append">
							<button class="btn btn-success" type="submit" style="z-index: -1"><i class="fas fa-search"></i></button> 
						</div>
					</div>
					<div id="myNav" class="overlay" style="z-index: 99">
						<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
						<div class="overlay-content">
							<a href="#">Trang Chủ</a>
							<a href="{{route('gioi-thieu')}}">Giới Thiệu</a>
							<a class="blog" href="javascript:void(0)">Sản Phẩm
								<div class="blog-item text-center">
									<ul class="abc">
										<li><a href="">Kinh Doanh</a></li>
										<li><a href="">Kinh Doanh</a></li>
										<li><a href="">Kinh Doanh</a></li>
									</ul>
								</div>
							</a>
							<a href="{{route('khuyen-mai')}}">Khuyến Mãi</a>
							<a class="blog" href="javascript:void(0)">Tư Vấn
								<div class="blog-item text-center">
									<ul>
										<li><a href="{{route('tu-van-suc-khoe')}}">Kinh Doanh</a></li>
										<li><a href="{{route('tu-van-suc-khoe')}}">Kinh Doanh</a></li>
										<li><a href="{{route('tu-van-suc-khoe')}}">Kinh Doanh</a></li>											
									</ul>
								</div>
							</a>
							<a class="blog" href="{{route('chu-de-suc-khoe')}}">Chủ Đề Sức Khỏe
								<div class="blog-item text-center">
									<ul>
										<li><a href="">Kinh Doanh</a></li>
										<li><a href="">Kinh Doanh</a></li>
										<li><a href="">Kinh Doanh</a></li>											
									</ul>
								</div>
							</a>
						</div>
					</div>


					<span class="menu-box" style="font-size:30px;cursor:pointer; display: none;" onclick="openNav()">&#9776;</span>
				</div>

				<div class="col-md-4 p-2 dangnhap">
					<div class="mb-3 mt-4 float-left pr-4"><i class="fas fa-user-check icon-user"></i> Đăng nhập</div>
					<div class="mb-3 mt-4 float-left pr-4"><i class="fas fa-user-edit icon-user"></i> Đăng kí</div>
					<div class="mb-3 mt-4"><i class="fas fa-cart-plus  icon-user" aria-hidden="true"></i> Đăng kí</div>

					
				</div>
			</div>
		</div>
	</div>

	<div class="header-2" id="bg-light" style="z-index: 1000;">
		<div class="container">
			<ul class="nav main-menu">
				<li class="nav-item">
					<a class="nav-link" href="">Trang chủ</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('gioi-thieu')}}">Giới thiệu</a>
				</li>
				<li class="nav-item ">
					<a class="nav-link" href="{{route('san-pham')}}">Sản phẩm <i class="fa fa-angle-down" aria-hidden="true" style="font-size: 14px"></i></a>
					<ul class="sub-menu ">
						<li><a href="{{route('san-pham')}}"style="font-size: 18px" >Gen trị mụn</a>
						</li>

						<li><a href="{{route('san-pham')}}"style="font-size: 18px">Sữa rửa mặt</a></li>

						<li><a href="{{route('san-pham')}}style="font-size: 18px">Thuốc trị nấm, tàn nhang, sẹo</a></li>

					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="{{route('khuyen-mai')}}">Khuyến mãi</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="{{route('tu-van-suc-khoe')}}">Tư vấn <i class="fa fa-angle-down" aria-hidden="true" style="font-size: 14px"></i></a>
					<ul class="sub-menu ">
						<li><a href="{{route('tu-van-suc-khoe')}}"style="font-size: 18px" >Gen trị mụn</a>
						</li>

						<li><a href="{{route('tu-van-suc-khoe')}}"style="font-size: 18px">Sữa rửa mặt</a></li>

						<li><a href="{{route('tu-van-suc-khoe')}}"style="font-size: 18px">Thuốc trị nấm, tàn nhang, sẹo</a></li>

					</ul>
				</li>
				<li class="nav-item">
					<a class="nav-link " href="{{route('chu-de-suc-khoe')}}">Chủ đề sức khỏe <i class="fa fa-angle-down" aria-hidden="true" style="font-size: 14px"></i></a>
					<ul class="sub-menu ">
						<li><a href="{{route('chu-de-suc-khoe')}}"style="font-size: 18px" >Gen trị mụn</a>
						</li>

						<li><a href="{{route('chu-de-suc-khoe')}}"style="font-size: 18px">Sữa rửa mặt</a></li>

						<li><a href="{{route('chu-de-suc-khoe')}}"style="font-size: 18px">Thuốc trị nấm, tàn nhang, sẹo</a></li>

					</ul>
				</li>
				<li class="nav-item pl-3">
					<a class="nav-link" href="#" ><i class="fas fa-phone-alt"></i> Hotline: 0838114333</a>
				</li>


			</ul>
		</div>
	</div>
</header>