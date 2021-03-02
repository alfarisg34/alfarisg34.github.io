<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/products',
    [ProductsController::class,'index'])->name('products');

//pattern is integer
// Route::get('/products/{id}',
// [ProductsController::class,'show'])->where('id','[0-9]+');

//pattern is string
// Route::get('/products/{name}',
// [ProductsController::class,'show'])->where('name','[a-zA-Z]+');

//pattern is both
// Route::get('/products/{name}/{id}',
// [ProductsController::class,'show'])->where([
//     'name'=>'[a-z]+',
//     'id'=> '[0-9]'
// ]);

// Route::get('/products/about',[ProductsController::class,'about']);

// Route::get('products','App\Http\Controllers\ProductsController@index');

Route::get('/', function () {
    return view('home');
});

// Route::get('/users',function () {
//     return 'welcome to the users page';
// });

// Route::get('/users',function () {
//     return ['PHP','HTML','Laravel'];
// });

// Route::get('/users',function () {
//     return response()->json([
//         'name'=> 'Alfari',
//         'course' => 'Laravel Beginner'
//     ]);
// });


// Route::get('/users',function(){
//     return redirect('/');
// });