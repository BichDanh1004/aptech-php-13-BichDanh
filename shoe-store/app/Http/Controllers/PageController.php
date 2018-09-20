<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getSignup()
    {
        return view('user/signup');
    }

    public function postSignup(Request $request)
    {
        $validator = $this->validate($request,
            [
                'email'=>'required|email|unique:users,email',
                'password'=>'required|min:4|max:20',
                'name'=>'required',
                'phone_number'=>'required',
                'address'=>'required',
                'img_path' =>'nullable'
            ],
            [
                'email.required'=>'Vui lòng nhập lại email',
                'email.email'=>'Không đúng định dạng email',
                'email.unique'=>'Email đã có người sử dụng',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu ít nhất 4 kí tự',
                'password.max'=>'Mật khẩu vượt quá 20 kí tự',
                'name.required'=>'Vui lòng nhập tên',
                'phone_number.required'=>'Vui lòng nhập số điện thoại',
                'address.required'=>'Vui lòng nhập địa chỉ'
                
            ]);
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = bcrypt($request->password);
            $user->phone_number =$request->phone;
            $user->address =$request->address;
            $user->save();
            return redirect('user/signup')->back()->with('thanhcong','Tạo tài khoản thành công ');
            $getimg_path = '';
            if($request->hasFile('img_path')){
                $this->validate($request, 
                    [
                       
                        'img_path' => 'mimes:jpg,jpeg,png,gif|max:2048',
                    ],			
                    [
                   
                        'img_path.mimes' => 'Chỉ chấp nhận hình thẻ với đuôi .jpg .jpeg .png .gif',
                        'img_path.max' => 'Hình thẻ giới hạn dung lượng không quá 2M',
                    ]
                );
                
                //Lưu hình ảnh vào thư mục public/upload/hinhthe
                $hinhthe = $request->file('hinhthe');
                $gethinhthe = time().'_'.$hinhthe->getClientOriginalName();
                $destinationPath = public_path('upload/hinhthe');
                $hinhthe->move($destinationPath, $gethinhthe);
            }
        }
}
