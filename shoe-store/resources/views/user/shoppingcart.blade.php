@extends('user.index')
@section('shoppingcart')

<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h4>Shopping Cart</h4>
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
    <div class="d-flex flex-row">
            <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th>Sản phẩm</th>
                        <th>Giá</th>
                        <th>Số lượng</th>
                        <th>Tổng cộng</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          
                          <td>
                            <div class=" d-flex justify-content-center"><img width="107" height="107"  src="{{asset('./images/slide2.jpg')}}"> Adidas EQN</div>	
                          <td>
                                <span>1,650,000&nbsp;<span>₫</span></span>
                          </td>
                          <td>
                            <div class=" d-flex justify-content-center">
                                <input type="number"step="1" min="0" max=""  value="1">
                            </div>
                          </td>
                          <td>
                              <span class="d-flex justify-content-center">1,650,000&nbsp;<span >₫</span></span>
                          </td>
                          <td class="mx-3 mt-4">
                            <a href="#"><i class="fas fa-trash-alt"></i></a>
                          </td>
                          <td><i class="fas fa-pen-square"></i></td>
                      </tr>
                          

                      <tr>
                          
                          <td>
                            <div class=" d-flex justify-content-center"><img width="107" height="107"  src="{{asset('./images/slide2.jpg')}}"> Adidas EQN</div>	
                          <td>
                                <span>1,650,000&nbsp;<span>₫</span></span>
                          </td>
                          <td>
                            <div class=" d-flex justify-content-center">
                                <input type="number"step="1" min="0" max=""  value="1">
                            </div>
                          </td>
                          <td>
                              <span class="d-flex justify-content-center">1,650,000&nbsp;<span >₫</span></span>
                          </td>
                          <td class="mx-3 mt-4"><i class="fas fa-trash-alt"></i></td>
                          <td><i class="fas fa-pen-square"></i></td>
                      </tr>
                    </tbody>
                  </table>    

    </div>
</div>
<div class="container">
  <div class="d-flex flex-row mt-4 mb-5">
    <div class="col-10">
        <h3 class="pull-left " >Tổng tiền:</h3>
    </div>
    <div class="col-2">
        <button class="pull-right ">Đặt hàng</button>
    </div>
    
    
  </div>
</div>


	
@endsection