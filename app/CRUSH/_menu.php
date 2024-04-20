<?php
namespace App\CRUSH;
use App\Models\menu;
use Illuminate\Support\Str;
use mysql_xdevapi\Exception;


class _menu {
//    function  create($data)
//    {
//        try {
//            menu::create([
//                'name'=>$data['name'],
//                'slug'=>Str::slug($data['name']),
//                'description'=>$data['description'],
//                'link'=>$data['link'],
//                'status'=>$data['status'],
//                'order'=>$data['order'],
//
//            ]);
//            return 'thành công';
//        } catch (\PHPUnit\Exception $e){
//            return  $e;
//        }
//    }

    function getAllmenu(){
        try {
           return menu::all();
        } catch (\Exception $e
        ){
            $e;
        }
    }
    function  getOneMenu($field,$value){
        try {
            $data= menu::where($field,$value)->get();
            return $data;
        } catch (\PHPUnit\Exception $e)
        {
            $e;
        }

    }
    function getMenuWhere($field,$value){
        try {
            $data= menu::where($field,'like','%'.$value.'%')->orderBy('order','DESC')-> get();
            return $data;
        } catch (\PHPUnit\Exception $e)
        {
            return $e;
        }

    }
    function updateData($data,$field,$value){
        try {
           menu::where($field,$value)->update([
                'name'=>$data['name'],
                'description'=>$data['description'],
                'order'=>$data['order'],
            ]);
            return 'cap nhat thanh cong';
        } catch (\PHPUnit\Exception $e)
        {
            return $e;
        }


    }
    function  deleteMenu($field,$value){
        try {
            menu::where($field,$value)->delete();
            return 'thanh cong';
        } catch (\PHPUnit\Exception $e){
            return $e;
        }
    }
    function createdbs(){
        try {
            menu::create([
                'name'=>'THANK YOU', //home/about/styles/blog/post single/our store/product single/contact/thank you
                'slug'=>Str::slug('THANK YOU'),
                'description'=>'trang cảm ơn',
                'link'=>'',
                'status'=>true,
                'order'=>0,
            ]);
            return "thanh cong";
        } catch (\Exception $e){
            return $e;
        }

    }
}
