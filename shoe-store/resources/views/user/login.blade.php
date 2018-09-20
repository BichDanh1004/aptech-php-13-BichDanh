@extends('user.index')
@section('login')
<div class="inner-header login">
    <div class="container">
        <div class="pull-right">
            <div>
                <a>Home</a> / <span>Đăng nhập</span>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <div id="content">
        
        <form action="#" method="post">
            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <h4>Đăng nhập</h4>
                    <div>&nbsp;</div>

                    
                    <div class="form-block">
                        <label for="email">Email</label>
                        <input type="email" id="email" >
                    </div>
                    <div class="form-block">
                        <label for="phone">Mật khẩu</label>
                        <input type="text" id="phone">
                    </div>
                    <div class="form-block">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </form>
    </div>
</div>
@endsection