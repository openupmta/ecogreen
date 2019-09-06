@extends('master-layout')
@section('title')
Sản phẩm
@endsection



@section('css')
<link rel="stylesheet" href="{{asset('css/sanpham.css')}}">
@endsection
@section('content')


<main>
	<div class="container">
		<div class="title-header">
			<div style="width: 100%;height: 1px;background-color: #ccc"></div>
	    	<h3 class="h3">Sản phẩm sinh lý nữ </h3>
		</div>
	    <div class="row">
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid6">
	                <div class="product-image6">
	                    <a href="{{route('chi-tiet-san-pham')}}">
	                        <img class="pic-1" src="{{asset('images/sp-01.jpg')}}">
	                    </a>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="{{route('chi-tiet-san-pham')}}">Qik Hair</a></h3>
	                    <div class="price">250.000 đ
	                        <span>200.000 đ</span>
	                    </div>
	                </div>
	                <ul class="social">
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Xem nhiều hơn"><i class="fa fa-search"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
	                </ul>
	            </div>
	        </div>
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid6">
	                <div class="product-image6">
	                    <a href="{{route('chi-tiet-san-pham')}}">
	                        <img class="pic-1" src="{{asset('images/sp-01.jpg')}}">
	                    </a>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="{{route('chi-tiet-san-pham')}}">Qik Hair</a></h3>
	                    <div class="price">250.000 đ
	                        <span>200.000 đ</span>
	                    </div>
	                </div>
	                <ul class="social">
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Xem nhiều hơn"><i class="fa fa-search"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
	                </ul>
	            </div>
	        </div>
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid6">
	                <div class="product-image6">
	                    <a href="{{route('chi-tiet-san-pham')}}">
	                        <img class="pic-1" src="{{asset('images/sp-01.jpg')}}">
	                    </a>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="{{route('chi-tiet-san-pham')}}">Qik Hair</a></h3>
	                    <div class="price">250.000 đ
	                        <span>200.000</span>
	                    </div>
	                </div>
	                <ul class="social">
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Xem nhiều hơn"><i class="fa fa-search"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
	                </ul>
	            </div>
	        </div>
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid6">
	                <div class="product-image6">
	                    <a href="{{route('chi-tiet-san-pham')}}">
	                        <img class="pic-1" src="{{asset('images/sp-01.jpg')}}">
	                    </a>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="{{route('chi-tiet-san-pham')}}">Qik Hair</a></h3>
	                    <div class="price">250.000 đ
	                        <span>200.000 đ</span>
	                    </div>
	                </div>
	                <ul class="social">
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Xem nhiều hơn"><i class="fa fa-search"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
	                </ul>
	            </div>
	        </div>
	    </div>
	    <div class="title-header">
			<div style="width: 100%;height: 1px;background-color: #ccc"></div>
	    	<h3 class="h3">Sản phẩm sinh lý nữ </h3>
		</div>
	    <div class="row">
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid6">
	                <div class="product-image6">
	                    <a href="{{route('chi-tiet-san-pham')}}">
	                        <img class="pic-1" src="{{asset('images/sp-01.jpg')}}">
	                    </a>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="{{route('chi-tiet-san-pham')}}">Qik Hair</a></h3>
	                    <div class="price">250.000 đ
	                        <span>200.000 đ</span>
	                    </div>
	                </div>
	                <ul class="social">
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Xem nhiều hơn"><i class="fa fa-search"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
	                </ul>
	            </div>
	        </div>
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid6">
	                <div class="product-image6">
	                    <a href="{{route('chi-tiet-san-pham')}}">
	                        <img class="pic-1" src="{{asset('images/sp-01.jpg')}}">
	                    </a>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="{{route('chi-tiet-san-pham')}}">Qik Hair</a></h3>
	                    <div class="price">250.000 đ
	                        <span>200.000 đ</span>
	                    </div>
	                </div>
	                <ul class="social">
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Xem nhiều hơn"><i class="fa fa-search"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
	                </ul>
	            </div>
	        </div>
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid6">
	                <div class="product-image6">
	                    <a href="{{route('chi-tiet-san-pham')}}">
	                        <img class="pic-1" src="{{asset('images/sp-01.jpg')}}">
	                    </a>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="{{route('chi-tiet-san-pham')}}">Qik Hair</a></h3>
	                    <div class="price">250.000 đ
	                        <span>200.000</span>
	                    </div>
	                </div>
	                <ul class="social">
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Xem nhiều hơn"><i class="fa fa-search"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
	                </ul>
	            </div>
	        </div>
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid6">
	                <div class="product-image6">
	                    <a href="{{route('chi-tiet-san-pham')}}">
	                        <img class="pic-1" src="{{asset('images/sp-01.jpg')}}">
	                    </a>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="{{route('chi-tiet-san-pham')}}">Qik Hair</a></h3>
	                    <div class="price">250.000 đ
	                        <span>200.000 đ</span>
	                    </div>
	                </div>
	                <ul class="social">
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Xem nhiều hơn"><i class="fa fa-search"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
	                </ul>
	            </div>
	        </div>
	    </div>
	    <div class="title-header">
			<div style="width: 100%;height: 1px;background-color: #ccc"></div>
	    	<h3 class="h3">Sức khỏe</h3>
		</div>
	    <div class="row">
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid6">
	                <div class="product-image6">
	                    <a href="{{route('chi-tiet-san-pham')}}">
	                        <img class="pic-1" src="{{asset('images/sp-01.jpg')}}">
	                    </a>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="{{route('chi-tiet-san-pham')}}">Qik Hair</a></h3>
	                    <div class="price">250.000 đ
	                        <span>200.000 đ</span>
	                    </div>
	                </div>
	                <ul class="social">
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Xem nhiều hơn"><i class="fa fa-search"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
	                </ul>
	            </div>
	        </div>
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid6">
	                <div class="product-image6">
	                    <a href="{{route('chi-tiet-san-pham')}}">
	                        <img class="pic-1" src="{{asset('images/sp-01.jpg')}}">
	                    </a>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="{{route('chi-tiet-san-pham')}}">Qik Hair</a></h3>
	                    <div class="price">250.000 đ
	                        <span>200.000 đ</span>
	                    </div>
	                </div>
	                <ul class="social">
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Xem nhiều hơn"><i class="fa fa-search"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
	                </ul>
	            </div>
	        </div>
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid6">
	                <div class="product-image6">
	                    <a href="{{route('chi-tiet-san-pham')}}">
	                        <img class="pic-1" src="{{asset('images/sp-01.jpg')}}">
	                    </a>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="{{route('chi-tiet-san-pham')}}">Qik Hair</a></h3>
	                    <div class="price">250.000 đ
	                        <span>200.000</span>
	                    </div>
	                </div>
	                <ul class="social">
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Xem nhiều hơn"><i class="fa fa-search"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
	                </ul>
	            </div>
	        </div>
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid6">
	                <div class="product-image6">
	                    <a href="{{route('chi-tiet-san-pham')}}">
	                        <img class="pic-1" src="{{asset('images/sp-01.jpg')}}">
	                    </a>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="{{route('chi-tiet-san-pham')}}">Qik Hair</a></h3>
	                    <div class="price">250.000 đ
	                        <span>200.000 đ</span>
	                    </div>
	                </div>
	                <ul class="social">
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Xem nhiều hơn"><i class="fa fa-search"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
	                </ul>
	            </div>
	        </div>
	    </div>
	    <div class="title-header">
			<div style="width: 100%;height: 1px;background-color: #ccc"></div>
	    	<h3 class="h3">Làm đẹp</h3>
		</div>
	    <div class="row">
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid6">
	                <div class="product-image6">
	                    <a href="{{route('chi-tiet-san-pham')}}">
	                        <img class="pic-1" src="{{asset('images/sp-01.jpg')}}">
	                    </a>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="{{route('chi-tiet-san-pham')}}">Qik Hair</a></h3>
	                    <div class="price">250.000 đ
	                        <span>200.000 đ</span>
	                    </div>
	                </div>
	                <ul class="social">
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Xem nhiều hơn"><i class="fa fa-search"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
	                </ul>
	            </div>
	        </div>
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid6">
	                <div class="product-image6">
	                    <a href="{{route('chi-tiet-san-pham')}}">
	                        <img class="pic-1" src="{{asset('images/sp-01.jpg')}}">
	                    </a>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="{{route('chi-tiet-san-pham')}}">Qik Hair</a></h3>
	                    <div class="price">250.000 đ
	                        <span>200.000 đ</span>
	                    </div>
	                </div>
	                <ul class="social">
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Xem nhiều hơn"><i class="fa fa-search"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
	                </ul>
	            </div>
	        </div>
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid6">
	                <div class="product-image6">
	                    <a href="{{route('chi-tiet-san-pham')}}">
	                        <img class="pic-1" src="{{asset('images/sp-01.jpg')}}">
	                    </a>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="{{route('chi-tiet-san-pham')}}">Qik Hair</a></h3>
	                    <div class="price">250.000 đ
	                        <span>200.000</span>
	                    </div>
	                </div>
	                <ul class="social">
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Xem nhiều hơn"><i class="fa fa-search"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
	                </ul>
	            </div>
	        </div>
	        <div class="col-md-3 col-sm-6">
	            <div class="product-grid6">
	                <div class="product-image6">
	                    <a href="{{route('chi-tiet-san-pham')}}">
	                        <img class="pic-1" src="{{asset('images/sp-01.jpg')}}">
	                    </a>
	                </div>
	                <div class="product-content">
	                    <h3 class="title"><a href="{{route('chi-tiet-san-pham')}}">Qik Hair</a></h3>
	                    <div class="price">250.000 đ
	                        <span>200.000 đ</span>
	                    </div>
	                </div>
	                <ul class="social">
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Xem nhiều hơn"><i class="fa fa-search"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Yêu thích"><i class="fa fa-shopping-bag"></i></a></li>
	                    <li><a href="{{route('chi-tiet-san-pham')}}" data-tip="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
	                </ul>
	            </div>
	        </div>
	    </div>

	</div>
</main>


@endsection

@section('js')
	
@endsection
