<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\TenController;
use App\Http\controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
/*Route::get('product', [
    productcontroller:: class,
    'index'
]);*/

Route::get('/home2', function () {
    return view('home');
});

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', [ProductController::class,'index']);


Route::get('/name', function () {
    return 'Trần Tiến Anh'; 
});
//mảng 
Route::get('/foods', function () {
    return ['Lẩu gà', 'Lẩu Bò ', 'lẩu cua'];
});
Route::get('/TT', function () {
    return response() ->json([
        'name' => 'Trần Tiến Anh',
        'email' => 'tỉenanhtran755@gmail.com'
    ]);//response
});
Route::get('/back', function () {
    return redirect('/'); //trở lại trang nào đó
});

Route::redirect('/here','/three');// chuyển từ mục này sang mục khác 

Route::get('/three', function () {
    return response() ->json([
        'name' => 'Trần Tiến Anh',
        'email' => 'tỉenanhtran755@gmail.com'
    ]);//response
});

Route::get('/somethink', function () {
    return response() -> json([
        'Ngày Sinh' => '20/12/2005',
        'Đia chỉ' => 'Nơi nào đó tự nhập',
        'chức vụ' => 'Tự Nhập',
        'Thường chú' => 'Tự Nhập'
    ]);
});

Route::get('/test2/{id}', function ($id) {
    return '<h1>Codemaster ' .$id;
});

Route::get('/Posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return "<h1> Post: $postId ; Comments:$commentId";
});
//controller 
Route::get('/account',[TenController::class,'index'])->name('account.index');

Route::get('/create-account', [TenController::class,'create'])->name('create.account');

Route::get('/create-show', [TenController::class,'showData'])->name('create.show');

//lad3
Route::get('/tta_account-list',[TenController::class,'list'])->name('account.list');
Route::get('/tta-account-getall',[TenController::class,'getAllaccount'])->name('account.getall');

//lad4 
//lad1
Route::get('/tta-view1', function() 
{ return view('tta-view1',['name'=>'Codemaster Academy']);});
//lad2
Route::get('/tta-view2',function(){
    return view('tta-view2',[
                            'name'=>'Codemaster',
                            'arr'=> [1,4,7,2,9],
                            ]);
});

//lad3
Route::get('/tta-view3', function ()
{
    return view('tta-view3', ['name'=>["Codemaster","Academy","Tien","Anh"],
                                'arr'=>[10,15,12,1,22,33],
                                'users'=>[],                       
]);
});

#Template Blade Layout
Route::get('/home',function(){
    return view('_layouts.index');
    });
    Route::get('/about-us',function(){
    return view('_layouts.about');
    });
    Route::get('/contact',function(){
    return view('_layouts.contact');
    });

    Route::get('/menu',function(){
        return view('_layouts.header');
        });
        Route::get('/about-is',function(){
        return view('_layouts.navbar');
        });
        Route::get('/open-contact',function(){
        return view('_layouts.footer');
        });
//phần viewlad4
Route::get('/view1', function (){
    return view('tta-view01');
});