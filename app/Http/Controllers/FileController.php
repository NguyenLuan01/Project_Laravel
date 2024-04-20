<?php

namespace App\Http\Controllers;
use App\CRUSH\_product;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FileController extends Controller
{

    public  function  __construct(_product $product){
        $this->product = $product;
    }

    public function index()
    {
        return view('addproduct');
    }

    public function doUpload(Request $request)
    {

        if($request->isMethod("POST")){
            $request->validate([
                'bookname'=>'required|string|max:255',
                'author'=>'required|string|max:255',
                'price'=>'required|integer|min:1',
                'photo'=>'required|image',
            ],[
                'bookname.required'=>'Tên sách không để trống',
                'bookname.max'=>'Tên sách dưới 255 kí tự',
                'author.required'=>'Tên tác giả không để trống',
                'author.max'=>'Tên sách dưới 255 kí tự',
                'price.required'=>'Giá sách không để trống',
                'price.integer'=>'Giá sách phải là số',
                'price.min'=>'Giá sách không thể âm',
                'photo.required'=>'Chưa chọn hình ảnh',
                'photo.image'=>'Hãy chọn file hình ảnh',
            ]);
            //Kiểm tra file
            if ($request->hasFile('photo')) {  //kiểm tra xem đã có file photo hay chưa
//            $request->file('photo')->store('profile');
                $morong= $request->file('photo')->extension();  // lấy phần đuôi của file
                $path =  $request ->file('photo')->storeAs('public/images','product'.strlen($request->input('bookname')).'.'.$morong); //đẩy file vào trong thư mục app/profile đồng tời lấy đường dẫn đến file
                echo $path;
                echo  'product'.strlen($request->input('bookname')).'.'.$morong;
                $photo = 'product'.strlen($request->input('bookname')).'.'.$morong;
            }
            $data = [
                'name'=>$request->bookname,
                'author'=>$request->author,
                'slug'=>Str::slug($request->bookname),
                'img'=>$photo,
                'price'=>$request->price,
                'ttdb1'=>"null",
                'ttdb2'=>"null",
                'mausac'=>"null",
                'detail'=>"null",
                'stt'=>0,
                'status'=>0,

            ];
            $this->product->create($data);
            echo "<script> alert('Thêm thành công' )</script>";

        } // end kiem tra
        return redirect()->route('shop');

    } // end funtion
}
