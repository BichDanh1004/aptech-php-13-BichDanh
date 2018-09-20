@extends('user.index')
@section('signup')

<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h4 >THÔNG TIN THANH TOÁN</h4>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{url('adidas_shoe')}}">Home</a> / <span>Pay</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

<div class="container">
	<div class="row carousel-holder">
		<div class="col-md-2">
		</div>
		<div class="col-md-8 mb-5">
			<div class="panel panel-default">
				  <h4 class="panel-heading mt-5 mb-4">Đăng ký tài khoản</h4>
				  <div class="panel-body">
						@if(count($errors)>0)
						<div class="alert alert-danger">
							@foreach ($errors->all() as $err)
							{{$err}}<br>
							@endforeach
						</div>
						@endif
						@if(session('thanhcong'))
						<div class="alert alert-success">{{session('thanhcong')}}</div>
						@endif
					<form action="signup" method="post">
						<input type="hidden" name="_token" value="{{csrf_token()}}"/>
						<div>
							<label>Họ tên</label>
							  <input type="text" class="form-control" placeholder="Username" name="name" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label>Số điện thoại</label>
							  <input type="tel" class="form-control" placeholder="Phone" name="phone_number" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label>Email</label>
							  <input type="email" class="form-control" placeholder="Email" name="email" aria-describedby="basic-addon1">
						</div>
						<br>	
						<div>
							<label>Password</label>
							  <input type="password" class="form-control" name="password" aria-describedby="basic-addon1">
						</div>
						<br>
						<div>
							<label>Địa chỉ</label>
							  <input type="text" class="form-control" name="address" aria-describedby="basic-addon1">
						</div>
						<br>
						<div> 
							<label >Images</label>
							<input type="file" name="img_path" class="form-control" aria-describedby="basic-addon1" >
						 </div>
						<button type="submit" class="btn btn-default">Đăng ký
						</button>

					</form>
				  </div>
			</div>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<!-- end slide -->
</div>
@endsection