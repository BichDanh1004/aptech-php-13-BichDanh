@extends('user.index')
@section('content')

<div class="container-fluid">
        <div class="d-flex flex-row ">
          <div class="col-12 mt-4 mb-5 ">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner slide">
                <div class="carousel-item active">
                  <img class="slide" src={{asset('./images/slide3.jpg')}} alt="First slide">
                  
                </div>
                <div class="carousel-item">
                  <img class="d-block slide" src={{asset('./images/slide2.jpg')}} alt="Second slide">
                  
                </div>
                <div class="carousel-item">
                  <img class="d-block slide" src={{asset('./images/slide1.jpeg')}} alt="Third slide">
                  
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
    </div>
  
<div class="container ">
    <div class="d-flex flex-row mt-5 mb-5">
        <div class="col-12 row ">
            <div class="col-3">
                    <i class="fas fa-truck fa-7x mb-3"></i>
                    <h3>Giao hàng toàn quốc</h3>
                    <h6>Nhận đưa hàng trong phạm vi toàn quốc</h6>
            </div>
            <div class="col-3">
                    <i class="far fa-thumbs-up fa-7x mb-3"></i>
                    <h4>Giao hàng toàn quốc</h4>
                    <h6>Giày nhập từ nguồn hàng uy tín, chất lượng</h6>
            </div>
            <div class="col-3">
                    <i class="fas fa-credit-card fa-7x mb-3"></i>
                    <h4>Thanh toán nhanh chóng</h4>
                    <h6>Chuyển tiền qua cổng thanh toán Techcombank, Vietcombank</h6>
            </div>
            <div class="col-3">
                    <i class="fas fa-phone fa-7x mb-3"></i>
                    <h4>Đặt hàng trực tuyến</h4>
                    <h6>Đặt hàng ngay tại trang web hoặc gọi: 0966342792</h6>
            </div>
        </div>

    </div>
</div>

<div class="container mt-5">
<div>
<h3 class="mb-3">SẢN PHẨM MỚI</h3>
    <div class="d-flex flex-column flex-md-row">
            <div class="d-flex flex-md-row">
                  <div class="col-3">
                          <div class="card mb-3 "> 
                                <div class="card">
                                    <div class="img-thumbnail image-hover">
                                    <img class="card-img-top" src='https://product.hstatic.net/1000289015/product/tb2b8zvxq7mykjjszfgxxct9xxa___3161970426.jpg' >
                                    </div>
                                
                                    <div class="card-body">
                                            <div>
                                                    <p>Sample Woman Top</p>
                                                    <p>
                                                        <span>$34.55</span>
                                                    </p>
                                                </div>
                                    <div>
                                        <div>
                                            <a class="add-to-cart btn btn-primary"  role="button"><i class="fas fa-shopping-cart btn-cart"></i></a>
                                            <a>Details <i class="fas fa-angle-right"></i></i></a>
                                        </div>
                                    </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="col-3">
                              <div class="card mb-3 "> 
                                    <div class="card">
                                        <div class="img-thumbnail image-hover">
                                        <img class="card-img-top" src={{asset('./images/images2.png')}} >
                                        </div>
                                    
                                        <div class="card-body">
                                                <div>
                                                        <p>Sample Woman Top</p>
                                                        <p>
                                                            <span>$34.55</span>
                                                        </p>
                                                    </div>
                                        <div>
                                            <div>
                                                <a class="add-to-cart btn btn-primary" role="button"><i class="fas fa-shopping-cart"></i></a>
                                                <a>Details <i class="fas fa-angle-right"></i></i></a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                    <div class="col-3">
                          <div class="card mb-3 "> 
                                <div class="card">
                                    <div class="img-thumbnail image-hover">
                                    <img class="card-img-top" src={{asset('./images/images3.png')}} >
                                    </div>
                                
                                    <div class="card-body">
                                            <div>
                                                    <p>Sample Woman Top</p>
                                                    <p>
                                                        <span>$34.55</span>
                                                    </p>
                                                </div>
                                    <div>
                                        <div>
                                            <a class="add-to-cart btn btn-primary" role="button"><i class="fas fa-shopping-cart"></i></a>
                                            <a>Details <i class="fas fa-angle-right"></i></i></a>
                                        </div>
                                    </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="col-3">
                              <div class="card mb-3 "> 
                                    <div class="card">
                                        <div class="img-thumbnail image-hover">
                                        <img class="card-img-top" src={{asset('./images/images4.jpg')}} >
                                        </div>
                                    
                                        <div class="card-body">
                                                <div>
                                                        <p>Sample Woman Top</p>
                                                        <p>
                                                            <span>$34.55</span>
                                                        </p>
                                                    </div>
                                        <div>
                                            <div>
                                                <a class="add-to-cart btn btn-primary" role="button"><i class="fas fa-shopping-cart"></i></a>
                                                <a>Details <i class="fas fa-angle-right"></i></i></a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>  
                                </div>
                           
            </div>
    </div>
 </div>
<div>
<h3 class="mb-3 mt-5">SẢN PHẨM BÁN CHẠY</h3>
<div class="d-flex flex-column flex-md-row">
    <div class="d-flex flex-md-row">
          <div class="col-3">
                  <div class="card mb-3 "> 
                        <div class="card">
                            <div class="img-thumbnail image-hover">
                            <img class="card-img-top" src={{asset('./images/images5.jpg')}} >
                            </div>
                        
                            <div class="card-body">
                                    <div>
                                            <p>Sample Woman Top</p>
                                            <p>
                                                <span>$34.55</span>
                                            </p>
                                        </div>
                            <div>
                                <div>
                                    <a class="add-to-cart btn btn-primary" role="button"><i class="fas fa-shopping-cart"></i></a>
                                    <a>Details <i class="fas fa-angle-right"></i></i></a>
                                </div>
                            </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col-3">
                      <div class="card mb-3 "> 
                            <div class="card">
                                <div class="img-thumbnail image-hover">
                                <img class="card-img-top" src={{asset('./images/images6.jpg')}} >
                                </div>
                            
                                <div class="card-body">
                                        <div>
                                                <p>Sample Woman Top</p>
                                                <p>
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                <div>
                                    <div>
                                        <a class="add-to-cart btn btn-primary" role="button"><i class="fas fa-shopping-cart"></i></a>
                                        <a>Details <i class="fas fa-angle-right"></i></i></a>
                                    </div>
                                </div>
                                </div>
                            </div>  
                        </div>
                    </div>
            <div class="col-3">
                  <div class="card mb-3 "> 
                        <div class="card">
                            <div class="img-thumbnail image-hover">
                            <img class="card-img-top" src={{asset('./images/images7.jpg')}} >
                            </div>
                        
                            <div class="card-body">
                                    <div>
                                            <p>Sample Woman Top</p>
                                            <p>
                                                <span>$34.55</span>
                                            </p>
                                        </div>
                            <div>
                                <div>
                                    <a class="add-to-cart btn btn-primary" role="button"><i class="fas fa-shopping-cart"></i></a>
                                    <a>Details <i class="fas fa-angle-right"></i></i></a>
                                </div>
                            </div>
                            </div>
                        </div>  
                    </div>
                </div>
                <div class="col-3">
                      <div class="card mb-3 "> 
                            <div class="card">
                                <div class="img-thumbnail image-hover">
                                <img class="card-img-top" src={{asset('./images/images8.jpg')}} >
                                </div>
                            
                                <div class="card-body">
                                        <div>
                                                <p>Sample Woman Top</p>
                                                <p>
                                                    <span>$34.55</span>
                                                </p>
                                            </div>
                                <div>
                                    <div>
                                        <a href="javascript:void(0);" class="add-to-cart btn btn-primary" role="button"><i class="fas fa-shopping-cart"></i></a>
                                        <a>Details <i class="fas fa-angle-right"></i></i></a>
                                    </div>
                                </div>
                                </div>
                            </div>  
                        </div>
                   
    </div>
</div>
</div>


<div class="d-flex flex-column flex-md-row">
<div class="d-flex flex-md-row mt-4">
      <div class="col-3">
              <div class="card mb-3 "> 
                    <div class="card">
                        <div class="img-thumbnail image-hover">
                        <img class="card-img-top" src={{asset('./images/images9.jpg')}} >
                        </div>
                    
                        <div class="card-body">
                                <div>
                                        <p>Sample Woman Top</p>
                                        <p>
                                            <span>$34.55</span>
                                        </p>
                                    </div>
                        <div>
                            <div>
                                <a class="add-to-cart btn btn-primary" role="button"><i class="fas fa-shopping-cart"></i></a>
                                <a>Details <i class="fas fa-angle-right"></i></i></a>
                            </div>
                        </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-3">
                  <div class="card mb-3 "> 
                        <div class="card">
                            <div class="img-thumbnail image-hover">
                            <img class="card-img-top" src={{asset('./images/images10.jpg')}} >
                            </div>
                        
                            <div class="card-body">
                                    <div>
                                            <p>Sample Woman Top</p>
                                            <p>
                                                <span>$34.55</span>
                                            </p>
                                        </div>
                            <div>
                                <div>
                                    <a class="add-to-cart btn btn-primary" role="button"><i class="fas fa-shopping-cart"></i></a>
                                    <a>Details <i class="fas fa-angle-right"></i></i></a>
                                </div>
                            </div>
                            </div>
                        </div>  
                    </div>
                </div>
        <div class="col-3">
              <div class="card mb-3 "> 
                    <div class="card">
                        <div class="img-thumbnail image-hover">
                        <img class="card-img-top" src={{asset('./images/images11.jpg')}} >
                        </div>
                    
                        <div class="card-body">
                                <div>
                                        <p>Sample Woman Top</p>
                                        <p>
                                            <span>$34.55</span>
                                        </p>
                                    </div>
                        <div>
                            <div>
                                <a class="add-to-cart btn btn-primary" role="button"><i class="fas fa-shopping-cart"></i></a>
                                <a>Details <i class="fas fa-angle-right"></i></i></a>
                            </div>
                        </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-3">
                  <div class="card mb-3 "> 
                        <div class="card">
                            <div class="img-thumbnail image-hover">
                            <img class="card-img-top" src={{asset('./images/images12.jpg')}} >
                            </div>
                        
                            <div class="card-body">
                                    <div>
                                            <p>Sample Woman Top</p>
                                            <p>
                                                <span>$34.55</span>
                                            </p>
                                        </div>
                            <div>
                                <div>
                                    <a class="add-to-cart btn btn-primary" role="button"><i class="fas fa-shopping-cart"></i></a>
                                    <a>Details <i class="fas fa-angle-right"></i></i></a>
                                </div>
                            </div>
                            </div>
                        </div>  
                    </div>
               
                </div>
            </div>
        </div>             
    </div>
</div>
</div>
<script>
    $(document).on('click', '.btn-cart', function(e) {
    e.preventDefault();
    var parent = $(this).parents('.cardhttps://product.hstatic.net/1000289015/product/tb2b8zvxq7mykjjszfgxxct9xxa___3161970426.jpg');
    var src = parent.find('img').attr('src');
    
    var parTop = parent.offset().top;
    var parLeft = parent.offset().left;

    $('<img />',{
        class: 'img-product-fly',
        src:src
    }).appendTo('.card').css({
        'top' :parTop,
        'left' :parLeft
    })
});
</script>
 <script src={{asset('./js/my.js')}}></script>

@endsection