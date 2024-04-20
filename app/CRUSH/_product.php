<?php
namespace App\CRUSH;
use App\Models\product;
use Exception;
use Illuminate\Support\Str;


class _product {
    function getAll(){
        try {
           return product::all();
        } catch (\Exception $e
        ){
            $e;
        }
    }
    function  getOneProduct($field,$value){
        try {
            $data= product::where($field,$value)->get();
            return $data;
        } catch (\PHPUnit\Exception $e)
        {
            return $e;
        }

    }
    function getMenuWhere($field,$value){
        try {
            $data= product::where($field,'like','%'.$value.'%')->orderBy('order','DESC')-> get();
            return $data;
        } catch (\PHPUnit\Exception $e)
        {
            return $e;
        }

    }
    function updateData($data,$field,$value){
        try {
           product::where($field,$value)->update([
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
            product::where($field,$value)->delete();
            return 'thanh cong';
        } catch (\PHPUnit\Exception $e){
            return $e;
        }
    }
    function createdbs(){
        try {
            product::create([
                'name'=>"Simple way of piece life",
                'author'=>'Armor Ramsey',
                'slug'=>Str::slug('Simple way of piece life'),
                'img'=>'tab-item8.jpg',
                'price'=>39.00,
                'ttdb1'=>"null",
                'ttdb2'=>"null",
                'mausac'=>"null",
                'detail'=>"null",
                'stt'=>8,
                'status'=>0,
            ]);
            return 'thanh cong';
        } catch (\Exception $e){
            return $e;
        }
        return  false;

    }
        function  create($data)
    {
        try {
            product::create([
                'name'=>$data['name'],
                'author'=>$data['author'],
                'slug'=>Str::slug($data['name']),
                'img'=>$data['img'],
                'price'=>$data['price'],
                'ttdb1'=>"null",
                'ttdb2'=>"null",
                'mausac'=>"null",
                'detail'=>"null",
                'stt'=>0,
                'status'=>0,

            ]);
            return 'thành công';
        } catch (\PHPUnit\Exception $e){
            return  $e;
        }
    }
}
