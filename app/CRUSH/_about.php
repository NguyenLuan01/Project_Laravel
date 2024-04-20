<?php
namespace App\CRUSH;
use App\Models\about;
use Illuminate\Support\Str;


class _about {
    function getAll(){
        try {
           return about::all();
        } catch (\Exception $e
        ){
           return $e;
        }
    }
    function  getOneMenu($field,$value){
        try {
            $data= about::where($field,$value)->get();
            return $data;
        } catch (\PHPUnit\Exception $e)
        {
            $e;
        }

    }
    function getMenuWhere($field,$value){
        try {
            $data= about::where($field,'like','%'.$value.'%')->orderBy('order','DESC')-> get();
            return $data;
        } catch (\PHPUnit\Exception $e)
        {
            return $e;
        }

    }
    function updateData($data,$field,$value){
        try {
           about::where($field,$value)->update([
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
            about::where($field,$value)->delete();
            return 'thanh cong';
        } catch (\PHPUnit\Exception $e){
            return $e;
        }
    }
    function createdbs(){
        try {
            about::create([
                'name'=>"Naul Company",
                'numphone'=>"012345678",
                'mail'=>"Naul@gmail.com",
                'diachi'=>"12 trịnh đình thảo",
                'content'=>"null",
            ]);
            return 'thanh cong';
        } catch (\Exception $e){
            return $e;
        }
        return  false;

    }
}
