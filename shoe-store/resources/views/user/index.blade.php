<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="{{asset('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU">
    <link rel="stylesheet" href={{asset('./css/font-awesome.min.css')}}>
    <title>Document</title>
    <link rel="stylesheet" title="style" href={{asset('./css/style.css')}}>
</head>
<body>

    <div class="header">
        <div class="container">
            <div class="d-flex flex-row ">
                <div class="col-6">
                        <div id="logo" ><img src=https://i0.wp.com/bountysneakers.com/wp-content/uploads/2018/04/cropped-logo-name.png width="200px" alt=""></div>
                </div>
                <div class="col-6 row mt-3 justify-content-end">
                    <div>
                            <form role="search" method="get" id="searchform" action="/">
                                <input type="text" placeholder="Tìm kiếm sản phẩm..." />
                                <button type="submit" id="searchsubmit"><i class="fas fa-search"></i></button>
                            
                            </form>
                    </div>
                    <div>
                        <form action="/">
                                <div class=" margin-right">
                                        <div><i class="fas fa-shopping-cart"></i></i></i> Giỏ hàng <i class="fas fa-angle-down"></i></div>
                                        <span>0 Item</span>
                                </div> 
                        </form>
                            
                    </div>

                </div>
            </div>
        </div>

    </div>


<div class="container-fluid">
    <div class="d-flex flex-row ">
            <div class="col-12 main-menu ">
                <div id="myHeader">
                        <div class="list-unstyled d-flex justify-content-between mt-4">
                                <div>
                                    <a href="#">
                                      <i class="fas fa-angle-left text-light"></i>
                                    </a>
                                </div>
                               <div class="dropdown">  
                                    <a class="text-align font-weight-bold text-color active" href="javascript:void(0)">GIÀY CHÍNH HÃNG<i class="fas fa-angle-down mx-2"></i></a>
                                    <div class="dropdown-content">
                                        <a href="{{url('men_shoe')}}">Giày Cho Nam</a>
                                        <a href="{{url('women_shoe')}}">Giày Cho Nữ</a>
                                    </div>
                              </div>
                              <div>
                                    <a class="font-weight-bold text-color" href="{{url('adidas_shoe')}}">GIÀY ADIDAS CHÍNH HÃNG</a>
                              </div>
                              <div>
                                    <a class="font-weight-bold text-color"  href="{{url('nike_shoe')}}">GIÀY NIKE CHÍNH HÃNG</a>
                              </div>
                                <div class="dropdown">
                                    <a class="font-weight-bold text-color" href="">BOG<i class="fas fa-angle-down mx-2"></i></a>
                                        <div class="dropdown-content">
                                                <a href="">Hướng Dẫn</a>
                                                <a href="">Giày Adidas</a>
                                                <a href="">Giày Nike</a>
                                        </div>
                                </div>
                              <div>
                                <a class="font-weight-bold text-color" href="{{url('size_guide')}}">HƯỚNG DẪN CHỌN SIZE GIÀY</a>
                              </div>       
                              <div>
                                        <a href="#">
                                                <i class="fas fa-angle-right text-light"></i>
                                              </a>
                                
                                </div>
                        </div>
                </div>
                   
         </div>   
    </div>
</div>
    
                    
@yield('login')
@yield('signup')
@yield('adidas_shoe')
@yield('nike_shoe')
@yield('genuine_shoe')
@yield('content')
@yield('size_guide')
@yield('men_shoe')
@yield('women_shoe')
@yield('shoppingcart')
@yield('product_detail')


            <div id="footer">
                    <div class="container"> 
                        <div class=" d-flex flex-row mx-2">
                            
                                <div class="col-6">
                                    <h4 class="widget-title">HỖ TRỢ KHÁCH HÀNG</h4>
                                    <div>
                                        <ul>
                                            <li><a ><i class="fas fa-angle-down"></i> Tài Khoản</a></li>
                                            <li><a><i class="fas fa-angle-down"></i> Hướng Dẫn Đặt Hàng</a></li>
                                            <li><a ><i class="fas fa-angle-down"></i> Cam Kết Bảo Hàng</a></li>
                                            <li><a ><i class="fas fa-angle-down"></i></i> Theo Dõi Đơn Hàng</a></li>
                                            <li><a ><i class="fas fa-angle-down"></i></i> Cửa Hàng</a></li>
                                            <li><a><i class="fas fa-angle-down"></i></i> Giới Thiệu</a></li>
                                        </ul>
                                    </div>
                               
                            </div>
                            <div class="col-6">
                             
                                <div>
                                    <h4 class="widget-title">CẦN GIẢI ĐÁP ?<br> LIÊN HỆ 24/7!</h4>
                                    <div>
                                        <div class="contact-info">
                                            <i class="fas fa-map-marker-alt "></i>
                                            <p>Tôn Đức Thắng - Liên Chiểu - Đà Nẵng</p>
                                            <p>0164123456</p>
                                        </div>
                                    </div>
                               
                              </div>
                            </div>
                        </div>
                    </div> 
</body>
<script src="{{asset('js/admin/javascript.js')}}"></script>
</html>