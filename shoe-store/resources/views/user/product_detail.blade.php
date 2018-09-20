@extends('user.index')
@section('product_detail')

<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h4>Product</h4>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{url('adidas_shoe')}}">Home</a> / <span>Product</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

<div class="container">
			<div class=" d-flex flex-row">
                                <div class="col-4 ">
                                        <div class="card">
                                            <div class="img-thumbnail image-hover">
                                            <img class="card-img-top" src={{asset('./images/images12.jpg')}} >
                                            </div>
                                            </div>  
          
						</div>
						<div class="col-8 mt-5">
							<div class="single-item-body">
								<p class="single-item-title">Sample Woman Top</p>
								<p class="single-item-price">
									<span>$34.55</span>
								</p>
							</div>

							<div class="clearfix"></div>
							<h6>Options:</h6>
							<div class="single-item-options">
                                    <select class="wc-select" name="size">
                                            <option>Size</option>
                                            <option value="35">35</option>
                                            <option value="35.5">35.5</option>
                                            <option value="36">36</option>
                                            <option value="36.5">36.5</option>
                                            <option value="37">37</option>
                                            <option value="36.5">37.5</option>
                                            <option value="38">38</option>
                                        </select>
                                        <select class="wc-select" name="color">
                                                <option>Quantity</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                            </select>
								
								<a class="add-to-cart" href="#"><i class="fas fa-shopping-cart"></i></a>
								<div class="clearfix"></div>
                            </div>
                           
                        </div>
                        
            </div>

        </div> 
        <div class="container">
                    <h2 class="mt-3 mb-3 d-flex justify-content-center ">Chi tiết sản phẩm</h2>
                    <p >Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
                    <p>Consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequaturuis autem vel eum iure reprehenderit qui in ea voluptate velit es quam nihil molestiae consequr, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur? </p>
         
        </div>

@endsection