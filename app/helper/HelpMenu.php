<?php
namespace App\helper;
use App\Models\menu;
use Illuminate\View\View;


class HelpMenu{
    function compose(View $view){
        $menu = Menu::select('*')->get();
        $view->with('data',$menu);
    }
}
