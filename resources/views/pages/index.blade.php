@extends('master-layout')
@section('title')
Trang chủ
@endsection



@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection
@section('content')

<main>
	<div class="home1">
    <div class="container">
        <div class="row pt-4">
            <div class="col-md-9 mb-3">
                <div id="demo" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/banner-1.png" alt="Los Angeles" style="width:100%">
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner-1.png" alt="Los Angeles" style="width:100%">
                    </div>
                    <div class="carousel-item">
                        <img src="images/banner-1.png" alt="Los Angeles" style="width:100%">
                    </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="#demo" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#demo" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </a>

                </div>
            </div>

            <div class="col-md-3 ">
                <img src="images/anh-1.jpg" alt="" style="width:100%">
                <img src="images/anh-2.jpg" class="mt-3" style="width:100%">
            </div>
        </div>

        <!-- giới thiệu -->
    
            <div class="row mt-4">
                <div class="col-md-7">
                <div class="mb-4 box-heading">
                        <h3  class="text-center font-bold">GIỚI THIỆU</h3>
                        <div class="sp"></div>
                    </div>
                    <span>CÔNG TY CỔ PHẦN THƯƠNG MẠI VEDEVI GROUPVEDEVI Group là công ty cổ phần chuyên cung cấp các loại mỹ phẩm từ thiên nhiên được nhập khẩu từ Hàn Quốc.   
                        Sứ mệnh của chúng tôi là mang lại làn da trắng mịn mạng, khỏe mạnh cho phụ nữ Việt thông qua các liệu trình và sản phẩm hoàn toàn từ thiên nhiên.
                        <br>
                        Trụ sở chính:Số 60 D5C khu biệt thự Vườn Đào, Phường Phú Thượng, Quận Tây Hồ, Thành phố Hà Nội, Việt Nam
                        Trung tâm CSKH:  Tầng 11, Cung Tri Thức, Số 1 Tôn Thất Thuyết, Cầu Giấy Hà Nội
                    <br>
                    Trụ sở chính:Số 60 D5C khu biệt thự Vườn Đào, Phường Phú Thượng, Quận Tây Hồ, Thành phố Hà Nội, Việt Nam
                        Trung tâm CSKH:  Tầng 11, Cung Tri Thức, Số 1 Tôn Thất Thuyết, Cầu Giấy Hà Nội
                </span>
                </div>

                <div class="col-md-5 mt-3 mb-3">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/jw0WDUSFRTA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
    
    </div>    
    </div>    
        <!-- sản phẩm -->
        <div class="  sanpham">
            <div class="container">
            <div class="mt-3 box-heading">
                <h3  class="text-center pt-4" >SẢN PHẨM</h3>
                <div class="sp"></div>
            </div>
            <div class="mt-3 res-dp-none">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Gen trị mụn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Sữa rửa mặt</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Thuốc trị nấm, tàn nhang, sẹo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab-1" data-toggle="tab" href="#contact-1" role="tab" aria-controls="contact-1" aria-selected="false">Nước súc miệng</a>
                </li>
            </ul>
            </div>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row mt-4">
                            <div class="col-md-3 mt-2">
                                <div class="card" >
                                    <div class="p-2 thumbnail">
                                        <img class="card-img-top " src="images/gen-1.jpg" alt="Card image" style="width:100%">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href=""><h4 class="card-title">Gen trị mụn</h4></a>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus " aria-hidden="true"></i> Mua</a> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mt-2">
                                <div class="card" >
                                    <div class="p-2 thumbnail">
                                        <img class="card-img-top " src="images/gen-2.jpg" alt="Card image" style="width:100%">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href=""><h4 class="card-title">Gen trị mụn</h4></a>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus " aria-hidden="true"></i> Mua</a> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mt-2">
                                <div class="card" >
                                    <div class="p-2 thumbnail">
                                        <img class="card-img-top " src="images/gen-1.jpg" alt="Card image" style="width:100%">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href=""><h4 class="card-title">Gen trị mụn</h4></a>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus " aria-hidden="true"></i> Mua</a> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mt-2">
                                <div class="card" >
                                    <div class="p-2 thumbnail">
                                        <img class="card-img-top " src="images/gen-1.jpg" alt="Card image" style="width:100%">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href=""><h4 class="card-title">Gen trị mụn</h4></a>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus " aria-hidden="true"></i> Mua</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row mt-4">
                            <div class="col-md-3 mt-2">
                                <div class="card" >
                                    <div class="p-2 thumbnail">
                                        <img class="card-img-top " src="images/gen-1.jpg" alt="Card image" style="width:100%">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href=""><h4 class="card-title">Gen trị mụn</h4></a>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus " aria-hidden="true"></i> Mua</a> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mt-2">
                                <div class="card" >
                                    <div class="p-2 thumbnail">
                                        <img class="card-img-top " src="images/gen-2.jpg" alt="Card image" style="width:100%">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href=""><h4 class="card-title">Gen trị mụn</h4></a>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus " aria-hidden="true"></i> Mua</a> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mt-2">
                                <div class="card" >
                                    <div class="p-2 thumbnail">
                                        <img class="card-img-top " src="images/gen-1.jpg" alt="Card image" style="width:100%">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href=""><h4 class="card-title">Gen trị mụn</h4></a>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus " aria-hidden="true"></i> Mua</a> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mt-2">
                                <div class="card" >
                                    <div class="p-2 thumbnail">
                                        <img class="card-img-top " src="images/gen-1.jpg" alt="Card image" style="width:100%">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href=""><h4 class="card-title">Gen trị mụn</h4></a>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus " aria-hidden="true"></i> Mua</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <div class="row mt-4">
                            <div class="col-md-3 mt-2">
                                <div class="card" >
                                    <div class="p-2 thumbnail">
                                        <img class="card-img-top " src="images/gen-1.jpg" alt="Card image" style="width:100%">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href=""><h4 class="card-title">Gen trị mụn</h4></a>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus " aria-hidden="true"></i> Mua</a> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mt-2">
                                <div class="card" >
                                    <div class="p-2 thumbnail">
                                        <img class="card-img-top " src="images/gen-2.jpg" alt="Card image" style="width:100%">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href=""><h4 class="card-title">Gen trị mụn</h4></a>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus " aria-hidden="true"></i> Mua</a> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mt-2">
                                <div class="card" >
                                    <div class="p-2 thumbnail">
                                        <img class="card-img-top " src="images/gen-1.jpg" alt="Card image" style="width:100%">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href=""><h4 class="card-title">Gen trị mụn</h4></a>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus " aria-hidden="true"></i> Mua</a> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mt-2">
                                <div class="card" >
                                    <div class="p-2 thumbnail">
                                        <img class="card-img-top " src="images/gen-1.jpg" alt="Card image" style="width:100%">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href=""><h4 class="card-title">Gen trị mụn</h4></a>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus " aria-hidden="true"></i> Mua</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="tab-pane fade" id="contact-1" role="tabpanel" aria-labelledby="contact-tab-1">
                <div class="row mt-4">
                            <div class="col-md-3 mt-2">
                                <div class="card" >
                                    <div class="p-2 thumbnail">
                                        <img class="card-img-top " src="images/gen-1.jpg" alt="Card image" style="width:100%">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href=""><h4 class="card-title">Gen trị mụn</h4></a>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus " aria-hidden="true"></i> Mua</a> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mt-2">
                                <div class="card" >
                                    <div class="p-2 thumbnail">
                                        <img class="card-img-top " src="images/gen-2.jpg" alt="Card image" style="width:100%">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href=""><h4 class="card-title">Gen trị mụn</h4></a>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus " aria-hidden="true"></i> Mua</a> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mt-2">
                                <div class="card" >
                                    <div class="p-2 thumbnail">
                                        <img class="card-img-top " src="images/gen-1.jpg" alt="Card image" style="width:100%">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href=""><h4 class="card-title">Gen trị mụn</h4></a>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus " aria-hidden="true"></i> Mua</a> 
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 mt-2">
                                <div class="card" >
                                    <div class="p-2 thumbnail">
                                        <img class="card-img-top " src="images/gen-1.jpg" alt="Card image" style="width:100%">
                                    </div>
                                    <div class="card-body text-center">
                                        <a href=""><h4 class="card-title">Gen trị mụn</h4></a>
                                        <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
                                        <a href="#" class="btn btn-primary"><i class="fas fa-cart-plus " aria-hidden="true"></i> Mua</a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            
            </div>
        </div>
        


        <!-- phản hồi khách hàng -->
        <div class="phanhoi">
            <div class="container">
                <div class="mt-3 box-heading">
                    <h3  class="text-center pt-4" >PHẢN HỒI KHÁCH HÀNG</h3>
                    <div class="sp"></div>
                </div>

                    <div class="owl-carousel cmt owl-theme mt-4">
                        <div class="item">
                            <div class="card" >
                                <div class="p-2 text-center">
                                    <img class="card-img-top img-fluid rounded-circle w-60" src="images/person_3.jpg" alt="Card image" style="width:90%">
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text">
                                        <strong>Nguyễn Thu Thủy, 32 tuổi</strong>
                                        <br>
                                        Tôi đã dùng sản phẩm này rất hiệu quả sau 1 tuần sử dụng, sản phẩm thật tuyệt vời.phẩm
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" >
                                <div class="p-2 text-center">
                                    <img class="card-img-top img-fluid rounded-circle w-60" src="images/person_2.jpg" alt="Card image" style="width:90%">
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text">
                                        <strong>Nguyễn Thu Thủy, 32 tuổi</strong>
                                        <br>
                                        Tôi đã dùng sản phẩm này rất hiệu quả sau 1 tuần sử dụng, sản phẩm thật tuyệt vời.phẩm
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" >
                                <div class="p-2 text-center">
                                    <img class="card-img-top img-fluid rounded-circle w-60" src="images/person_3.jpg" alt="Card image" style="width:90%">
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text">
                                        <strong>Nguyễn Thu Thủy, 32 tuổi</strong>
                                        <br>
                                        Tôi đã dùng sản phẩm này rất hiệu quả sau 1 tuần sử dụng, sản phẩm thật tuyệt vời.phẩm
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card" >
                                <div class="p-2 text-center">
                                    <img class="card-img-top img-fluid rounded-circle w-60" src="images/person_2.jpg" alt="Card image" style="width:90%">
                                </div>
                                <div class="card-body text-center">
                                    <p class="card-text">
                                        <strong>Nguyễn Thu Thủy, 32 tuổi</strong>
                                        <br>
                                        Tôi đã dùng sản phẩm này rất hiệu quả sau 1 tuần sử dụng, sản phẩm thật tuyệt vời.phẩm
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                    
                    </div>

                    
            </div>
            
        </div>

    <!-- phản hồi chuyên gia -->
    <div class="mt-4 chuyengia " style="background-color: #FF0066; " >
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                        <img src="images/bs.png" alt="" style="width:67%">
                    </div>

                    <div class="col-md-7">
                        <div class="mb-4 mt-5 box-heading" style="color: white">
                            <h3  class=" font-bold ">Ý KIẾN CHUYÊN GIA</h3>
                            <div class="sp m-0" ></div>
                            <div class="pt-3">
                            <span >Sản phẩm VEDEVI với cơ chế ngăn ngừa mụn hiệu quả rõ rệt. Sự thẩm thấu sâu vào da và đẩy bật những mầm mụn ẩn sâu dưới da hoàn toàn ra ngoài theo "cơ chế" chữa lành hiệu quả triệt tiêu hoàn toàn các mầm mụn trên cơ thể chúng ta. Là một chuyên gia lâu năm về Da liễu tôi thấy hoàn toàn tin tưởng vào công dụng và tác dụng của sản phẩm VEDEVI. 
                                <br>
                                <br>
                                Hy vọng VEDEVI sẽ lan tỏa và giúp ích được nhiều người đang gặp phải vấn đề về Mụn
                                <br>
                                <br>
                                <strong>Bác sỹ Da liễu: Nguyễn Thúy Quỳnh - Bệnh viện Da liễu Hà Nội</strong>
                            </span></div>
                        </div>
                    </div>
                </div>
                </div>
        </div>  
    <!-- tin tức -->

    <div class="phanhoi tintuc mb-5">
            <div class="container">
                <div class="mt-3 box-heading">
                    <h3  class="text-center pt-4" >TIN TỨC</h3>
                    <div class="sp"></div>
                </div>

                    <div class="owl-carousel news owl-theme mt-4">
                        <div class="item p-2">
                            <a href=""><img src="https://kenh14cdn.com/thumb_w/620/2019/8/19/photo-1-1566225848504465888232.jpg" alt=""></a>
                            <div class="mt-2">
                                <h5><a href="">5 thủ phạm không ngờ lý giải sao bạn chăm da kỹ lưỡng mà vẫn lên mụn mãi không dứt</a></h5>
                                <span>Trong cuộc sống có những thói quen tưởng chừng như vô hại nhưng lại chính là thủ phạm khiến làn da của bạn trở nên xấu xí và dễ nổi mụn hơn...</span>
                            </div>
                        </div>
                        <div class="item p-2">
                            <a href=""><img src="https://kenh14cdn.com/thumb_w/620/2019/8/19/photo-1-1566225848504465888232.jpg" alt=""></a>
                            <div class="mt-2">
                                <h5><a href="">5 thủ phạm không ngờ lý giải sao bạn chăm da kỹ lưỡng mà vẫn lên mụn mãi không dứt</a></h5>
                                <span>Trong cuộc sống có những thói quen tưởng chừng như vô hại nhưng lại chính là thủ phạm khiến làn da của bạn trở nên xấu xí và dễ nổi mụn hơn...</span>
                            </div>
                        </div>
                        <div class="item p-2">
                            <a href=""><img src="https://kenh14cdn.com/thumb_w/620/2019/8/19/photo-1-1566225848504465888232.jpg" alt=""></a>
                            <div class="mt-2">
                                <h5><a href="">5 thủ phạm không ngờ lý giải sao bạn chăm da kỹ lưỡng mà vẫn lên mụn mãi không dứt</a></h5>
                                <span>Trong cuộc sống có những thói quen tưởng chừng như vô hại nhưng lại chính là thủ phạm khiến làn da của bạn trở nên xấu xí và dễ nổi mụn hơn...</span>
                            </div>
                        </div>
                        <div class="item p-2">
                            <a href=""><img src="https://kenh14cdn.com/thumb_w/620/2019/8/19/photo-1-1566225848504465888232.jpg" alt=""></a>
                            <div class="mt-2">
                                <h5><a href="">5 thủ phạm không ngờ lý giải sao bạn chăm da kỹ lưỡng mà vẫn lên mụn mãi không dứt</a></h5>
                                <span>Trong cuộc sống có những thói quen tưởng chừng như vô hại nhưng lại chính là thủ phạm khiến làn da của bạn trở nên xấu xí và dễ nổi mụn hơn...</span>
                            </div>
                        </div>
                    
                    </div>
            </div>
            
        </div>


</main>
 @endsection

@section('js')
<script src="js/index.js"></script>
@endsection