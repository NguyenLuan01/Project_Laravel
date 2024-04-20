<?php

use App\Http\Controllers\admin\HomePage;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FileController;

// use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route :: get( '/tim-kiem',function(){
//     return 'hello every one';
// });

Route :: get('/', [Homecontroller:: class, 'index']);
Route :: get('/articles', [Homecontroller:: class, 'articles']);
Route :: get('/home', [Homecontroller:: class, 'index']);
Route :: get('/create', [Homecontroller:: class, 'themdl']);
//Route :: get('/show', [Homecontroller:: class, 'showif']);
//Route :: get('/index ', [Homecontroller:: class, 'index']);
Route :: get('/contact', [Homecontroller:: class, 'contact']);
/////////////////////////////////////////////////////////////////////////
//Route :: get('/register', [Homecontroller:: class, 'register']);
Route :: get('/about', [Homecontroller:: class, 'about']);
Route :: get('/singleProduct', [Homecontroller:: class, 'singleProduct']); //chi tiet san pham d
Route :: get('/singlePost', [Homecontroller:: class, 'singlePost']);
Route :: get('/shop', [Homecontroller:: class, 'shop'])->name('shop');
Route :: get('/blog', [Homecontroller:: class, 'blog']);
Route :: get('/thank-you', [Homecontroller:: class, 'thank']);
//thu nghiem route get
//Route :: get('/login', [Homecontroller:: class, 'login']);
//Route :: get('/dang-ky', [Homecontroller:: class, 'dangky']);
//Route :: post('/dang-ky', [Homecontroller:: class, 'dangky']);

Route :: get('/sign-in', function(){
    return "<h3> thông tin đăng ký</h3> <br>
    <p>tên <input type:'text' ></input> <br ></p>
    <p>makhau <input type:'password' ></input> <br></p>
    email <input type:'mail' ></input> <br>
    <button>đăng kí</button>";

});

//tro vao thu muc admin
//gom cac trang web lien quan den admin
    Route :: prefix( 'admin') ->group(function (){
        Route :: get ('/',[HomePage::class,'index']) ->name('sanpham'); // class admin/ homepage
        Route :: get('/add-product', [FileController:: class, 'index']);
        Route :: post('/add-product', [FileController:: class, 'doUpload']);
    });
//////////////////////////////////////////////////////
/// route phuc thuc dang nhap dang ky
Route::get('/register',[UserController::class,'register']);
Route::post('/register',[UserController::class,'register']);
Route::get('/login',[UserController::class,'login']);
Route::post('/login',[UserController::class,'login'])->name('login');

//trang san pham chi tiet
Route :: get('/cart-detail/id={id}', [Homecontroller:: class, 'CartDetail']);


