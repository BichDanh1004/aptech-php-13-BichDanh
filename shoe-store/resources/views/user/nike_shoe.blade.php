@extends('user.index')
@section('nike_shoe')

<div class="container-fluid">
    <div class="d-flex flex-row ">
        <div class="col-12 ">

                <div class="col-md-3 mt-5 genuine_shoes_left">


                       
                                <ul class="list-group" id="menu">
                                    <li href="#" class="list-group-item menu1 active">
                                        DANH MỤC SẢN PHẨM
                                    </li>
                
                                    <li href="#" class="list-group-item menu1">
                                        <a href="#">Adidas</a>
                                    </li>
                                    <ul style="display: none;">
                                        <li class="list-group-item">
                                            <a href="#">Adidas Energy</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">Adidas EQT</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">Adidas Galaxy</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">Adidas Harden</a>
                                        </li>
                                    </ul>
                
                                    <li href="#" class="list-group-item menu1">
                                        <a href="#">Nike</a>
                                    </li>
                                    <ul style="display: none;">
                                        <li class="list-group-item">
                                            <a href="#">Nike Air Force</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">Nike Air Max </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">Nike Flyknit</a>
                                        </li>
                                        
                                    </ul>
                
                
                                    <li href="#" class="list-group-item menu1">
                                        <a href="#">Giày Chính Hãng</a>
                                    </li>
                
                                    <ul style="display: none;">
                                        <li class="list-group-item">
                                            <a href="#">Giày cho Nam</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">Giày cho Nữ</a>
                                        </li>
                                        <li class="list-group-item">
                                            <a href="#">Level2</a>
                                        </li>
                                      
                                    </ul>
                
                
                                  
                                </ul>
                            

                        

                        <div id="menu">
                            <h5 class="mt-5 mx-4">Cỡ Giày Nam</h5>
                                <ul class="ul_list">
                                    <li><input type="checkbox"> 40</li>
                                    <li><input type="checkbox"> 40.5</li>
                                    <li><input type="checkbox"> 41</li>
                                    <li><input type="checkbox"> 41.5</li>
                                    <li><input type="checkbox"> 42</li>
                                    <li><input type="checkbox"> 42.5</li>
                                </ul>
                        </div>


                        <div id="menu">
                            <h5 class="mt-5 mx-4">Cỡ Giày Nữ</h5>
                                <ul>
                                    <li><input type="checkbox"> 36</li>
                                    <li><input type="checkbox"> 36.7</li>
                                    <li><input type="checkbox"> 37</li>
                                    <li><input type="checkbox"> 37.5</li>
                                    <li><input type="checkbox"> 38</li>
                                    <li><input type="checkbox"> 38.5</li>
                                </ul>
                </div>
            </div>


            <div class="col-9 genuine_shoes_right mt-5">
                <div class="col-12">
                        <h3 class="mb-4">NIKE</h3>
                        <div class="d-flex flex-column flex-md-row">

                                <div class="col-3">
                                    <div class="card mb-3 "> 
                                        <div class="card">
                                            <div class="img-thumbnail image-hover">
                                                <img class="card-img-top" src={{asset('./images/image1.jpg')}} >
                                            </div>
                                                                            
                                            <div class="card-body">
                                                <div>
                                                    <p>Sample Woman Top</p>
                                                </div>
                                                <div>
                                                    <a class="add-to-cart btn btn-primary"  role="button"><i class="fas fa-shopping-cart"></i></a>
                                                    <a>Details <i class="fas fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>

                                <div class="col-3">
                                        <div class="card mb-3 "> 
                                            <div class="card">
                                                <div class="img-thumbnail image-hover">
                                                    <img class="card-img-top" src={{asset('./images/image1.jpg')}} >
                                                </div>
                                                                                
                                                <div class="card-body">
                                                    <div>
                                                        <p>Sample Woman Top</p>
                                                    </div>
                                                    <div>
                                                        <a class="add-to-cart btn btn-primary"  role="button"><i class="fas fa-shopping-cart"></i></a>
                                                        <a>Details <i class="fas fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                </div>
                                    
                                <div class="col-3">
                                            <div class="card mb-3 "> 
                                                <div class="card">
                                                    <div class="img-thumbnail image-hover">
                                                        <img class="card-img-top" src={{asset('./images/image1.jpg')}} >
                                                    </div>
                                                                                    
                                                    <div class="card-body">
                                                        <div>
                                                            <p>Sample Woman Top</p>
                                                        </div>
                                                        <div>
                                                            <a class="add-to-cart btn btn-primary"  role="button"><i class="fas fa-shopping-cart"></i></a>
                                                            <a>Details <i class="fas fa-angle-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                </div>
                                    

                                <div class="col-3">
                                                <div class="card mb-3 "> 
                                                    <div class="card">
                                                        <div class="img-thumbnail image-hover">
                                                            <img class="card-img-top" src={{asset('./images/image1.jpg')}} >
                                                        </div>
                                                                                        
                                                        <div class="card-body">
                                                            <div>
                                                                <p>Sample Woman Top</p>
                                                            </div>
                                                            <div>
                                                                <a class="add-to-cart btn btn-primary"  role="button"><i class="fas fa-shopping-cart"></i></a>
                                                                <a>Details <i class="fas fa-angle-right"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>  
                                </div>
                    
                </div>
                </div>


                <div class="col-12 mt-5">
                        <div class="d-flex flex-column flex-md-row">

                                <div class="col-3">
                                    <div class="card mb-3 "> 
                                        <div class="card">
                                            <div class="img-thumbnail image-hover">
                                                <img class="card-img-top" src={{asset('./images/image1.jpg')}} >
                                            </div>
                                                                            
                                            <div class="card-body">
                                                <div>
                                                    <p>Sample Woman Top</p>
                                                </div>
                                                <div>
                                                    <a class="add-to-cart btn btn-primary"  role="button"><i class="fas fa-shopping-cart"></i></a>
                                                    <a>Details <i class="fas fa-angle-right"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>  
                                </div>

                                <div class="col-3">
                                        <div class="card mb-3 "> 
                                            <div class="card">
                                                <div class="img-thumbnail image-hover">
                                                    <img class="card-img-top" src={{asset('./images/image1.jpg')}} >
                                                </div>
                                                                                
                                                <div class="card-body">
                                                    <div>
                                                        <p>Sample Woman Top</p>
                                                    </div>
                                                    <div>
                                                        <a class="add-to-cart btn btn-primary"  role="button"><i class="fas fa-shopping-cart"></i></a>
                                                        <a>Details <i class="fas fa-angle-right"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>  
                                </div>
                                    
                                <div class="col-3">
                                            <div class="card mb-3 "> 
                                                <div class="card">
                                                    <div class="img-thumbnail image-hover">
                                                        <img class="card-img-top" src={{asset('./images/image1.jpg')}} >
                                                    </div>
                                                                                    
                                                    <div class="card-body">
                                                        <div>
                                                            <p>Sample Woman Top</p>
                                                        </div>
                                                        <div>
                                                            <a class="add-to-cart btn btn-primary"  role="button"><i class="fas fa-shopping-cart"></i></a>
                                                            <a>Details <i class="fas fa-angle-right"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>  
                                </div>
                                    

                                <div class="col-3">
                                                <div class="card mb-3 "> 
                                                    <div class="card">
                                                        <div class="img-thumbnail image-hover">
                                                            <img class="card-img-top" src={{asset('./images/image1.jpg')}} >
                                                        </div>
                                                                                        
                                                        <div class="card-body">
                                                            <div>
                                                                <p>Sample Woman Top</p>
                                                            </div>
                                                            <div>
                                                                <a class="add-to-cart btn btn-primary"  role="button"><i class="fas fa-shopping-cart"></i></a>
                                                                <a>Details <i class="fas fa-angle-right"></i></a>
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

                        

<div class="container">
    <div class="d-flex flex-row">
        <div class="col-12 mb-5">
                <h2 class="text-align-center mt-5 mb-3">Nike: ông lớn trong lĩnh vực giày và các sản phẩm thể thao trên thế giới</h2>
                <p class="text_a mt-3">
                        <b>Nhẹ như lông hồng với những đôi giày sneaker Nike</b>
                        Nếu như trong những năm thập niên 90 thì người ta thường đi giày đế cao su thậm chí đế da và không ai để ý đến những đôi giày. Vào những năm gần đây khi mà Adidas có công nghệ Boost và cho ra những phiên bản Adidas Originals phục vụ nhu cầu thời trang mà vẫn giữ được xu hướng thời trang trẻ trung. Ông lớn Nike cũng không kém cạnh khi mà liên tục cho ra mắt những sản phẩm Nike Air với đế chân không nhìn xuyên thấu của Tinker Hatfield.
            
                        Công nghệ Nike Air đã được phát triển từ lâu và được mọi người ưa chuộng vì cảm giác cực kì casual mà khi mang lên chân thì là một cảm giác đang được “đi trên chân không”. Cùng Điểm qua những đôi giày Nike hot nhất hiện nay:
            
                        *Nike Air Max 1 (1987) – Trước khi có thiết kế visual Air (nhìn xuyên), Nike đã có thiết kế với đế mỏng hơn và đưa thật nhiều Air (maximum Air – Air Max) vào đế, và những đôi Nike Air Max 1 đầu tiên đã được ra mắt với nhiều phối màu.
            
                        *Nike Air Max 95 (1995) – Nike áp dụng công nghệ nén khí mới giúp tăng cảm giác thoải mái cũng như định hình lại đế Air theo ý muốn khi chịu các tác động vật lí. Air Max 95 là thiết kế đầu tiên có thể nhìn xuyên thấu được.
                        *Nike Air Max 97(1997) – Bằng những thay đổi nhỏ trong phần đế và upper, phiên bản Air Max 97 đã ra đời và đến nay những Sneaker-head vẫn mê man và săn lùng trên mọi nơi với thiết kế và phối màu hấp hồn.<br>
            
                        *Nike Air Max 2017 – Là phiên bản mà Nike tự hào và hài lòng nhất về thiết kế vải Mesh co giãn lẫn công nghệ đế Air Max. Air max 2017 được coi là đưa con cưng của Nike trong những thiết kế Air Max và là điểm dừng chân tạm thời của Nike để tìm kiếm công nghệ mới.<br>
                        <b>Tại sao mua giày Nike chính hãng tại Bounty Sneakers?</b>
                        Nếu bạn còn lăn tăn mua giày Nike chính hãng tại đâu thì hãy qua Bounty Sneakers để được trải nghiệm những mẫu giày Nike sneaker êm và hot nhất hiện nay. Nếu phải bỏ ra 2 triệu đến 3 triệu để mua đôi giày chạy Nike đế cao su Air Zoom, ambassdador, Flex, Free… thì hãy thử một lần trải nghiệm đứa con cưng Air Max của Nike tại Bounty Sneakers với mức giá ưu đãi cũng từ 2 triệu đến 3 triệu.
            
                        <br>
                        
                </p>
            </div>
        </div>

    </div>
    
</body>
</html>
  
@endsection