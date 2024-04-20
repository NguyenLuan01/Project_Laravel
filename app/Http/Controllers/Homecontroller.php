<?php

namespace App\Http\Controllers;

use App\CRUSH\_menu;
use App\CRUSH\_about;
use App\CRUSH\_product;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    public function __construct(_menu $menu,_about $about,_product $product)
    {
        $this->menu = $menu;
        $this->about= $about;
        $this->product =$product;
        $this->data =$this->menu->getAllmenu();

    }


    public function  articles(){
        return view('articles');

    }
    public function themdl(){
        dd($this->about->createdbs());
    } //thêm dữ liệu cho trang
    public function index (){
//    dd($this->menu->createdbs());
//        return View('index');
        return view('index');

    }
    public function login (){
        return View('login');
    }
    public function register (){
        return View('register');
    }
    public function about(){
       $d= $this->about->getAll();
        return view('about',['about'=>$d]);
    }
    public function contact(){
        return view('contact');
    }
    public function thank(){
        return view('thankyou');
    }
    public function shop(){
//        dd($this->product->createdbs());
        $d  = $this->product->getAll();
        return view('shop',['product'=>$d]);
    }
    public function blog(){
        return view('blog');
    }
    public function singleProduct(){
        return view('singleProduct');
    } //chi tiết sản phẩm dự bị
    public function singlePost(){
        return view('singlePost');
    }
//    public function dangky($user,$pass,$mail){
//        return view('dangky',['mail'=>$mail,'user'=>$user,'pass'=>$pass]);
//    }
    public function dangky(Request $req){
        return view('dangky',['mail'=>$req->mail,'user'=>$req->user,'pass'=>$req->pass]);
    }
    public  function  menu(){
        dd($this->menu->createdbs());
    }
    public  function showif(){
        return view('layout/header');
    }
    public  function  CartDetail(Request $request,$id){
        $result="";
        if ($request->isMethod('get')) {
            $result = $this->product->getOneProduct("id",$request->id);
        }
        $result= $result[0];
        return view('cartdetail',['data'=>$result]);
//            dd($result);
    }

}
