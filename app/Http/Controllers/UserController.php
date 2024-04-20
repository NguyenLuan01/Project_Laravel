<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use mysql_xdevapi\Exception;

class UserController extends Controller{


    function login(Request $request)
    {
        if ($request->isMethod("POST")) {
            $arr = $request->validate([
                'email' => 'required|email',
                'password' => 'required',
            ]);

            if (Auth::attempt($arr))
            {
                //session chua thong tin tai khoan
                $request->session()->regenerate();
                echo "<script> alert ('đăng nhập thành công!!!')</script>";
                $request->session()->flash('success', 'Đăng nhập  thành công!');
                return redirect()->route('shop');

            } else {
                $request->session()->flash('error', ' that bai roi!');
            }
        }

        return view('login');
    }


    function register( Request $request){
        if($request->isMethod("POST"))
        {
            $request->validate([
                'name'=>'required',
                'email'=>'required|email|unique:users',
                'pass'=>'required|confirmed|min:6',
            ],[
                'name.required'=>'Ten la bat buoc',
                'email.required'=>'Email la bat buoc',
                'email.email'=>'Email khong dung dinh dang',
                'email.unique'=>'Email đã tồn tại',
                'pass.required'=>'mật khẩu la bat buoc',
                'pass.confirmed'=>'xác nhận mật khẩu không thành công',
                'pass.min'=>'mật khẩu ít nhất 6 kí tụ',
            ]);
            try {
                //cu phap them tai khoan vao databasse User
               $result =  User::create([
                   'name'=> $request->input('name'),
                   'email'=> $request->input('email'),
                   /////////hash => mã hoá mật khẩu
                   'password'=> Hash::make($request->input('pass')),

               ]);

               // kieemr tra tai khoan da duojc them hay chuaw
               if($result->id > 0){
                   $request->session()->flash('success', 'Them Thanh cong!');
                   ///////chueyern tiếp đén 1 trang khác // trước đó hãy đặt tên cho đường dẫn bên web.php//san pham la ten đã đặt
                   return redirect()->route('login');
               } else{
                   $request->session()->flash('error', 'them tai khoan that bai!');
               }

            } catch (Exception $e)
            {
                $request->session()->flash('error', $e);
            }
//           dd($request->input());
        }
        return view('register');
    }
}
