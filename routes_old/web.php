<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;

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


// for backsoon or mainteance pages

// Route::get('/', function () {
//     return view('client.home.maintenance');
// });


// public or client

//  Route::get('/demo',[HomeController::class,'index'])->name('home');
//  Route::get('/demo/news/{slug}', 'App\Http\Controllers\Client\NewsController@detail');
//  Route::get('/demo/news', 'App\Http\Controllers\Client\NewsController@index');
//  Route::get('/demo/career','App\Http\Controllers\Client\CareerController@index');
 
 Route::get('/',[HomeController::class,'index'])->name('home');
 Route::get('/news/{slug}', 'App\Http\Controllers\Client\NewsController@detail');
 Route::get('/news', 'App\Http\Controllers\Client\NewsController@index');
 Route::get('/career','App\Http\Controllers\Client\CareerController@index');

Route::post('/contact-form', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact-form.store'); 
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/privacy', function(){
    return view('client.privacy.index');
});


Route::get('/search/', [HomeController::class,'search'])->name('search');

//Route::get('/', [App\Http\Controllers\Web\HomeController::class]);

// Route::get('/', function () {
//     return view('frontend.home.details');
// });


// Route::get('/news-detail',function(){
//     return view('news.newsdetail');
// });

//Route::get('demo/news/business-visit-at-washington-d-c', function(){
//    return view('client.news.newsdetail1');
//});
//
//Route::get('demo/news/groundbreaking-ceremony-plant-2', function(){
//    return view('client.news.newsdetail2');
//});

// Route::get('/career', function(){
//     return view('frontend.career.index');
// });

// Route::get('/news', function(){
//     return view('frontend.news.newslist');
// });

Route::post('/demo/contact-form', [HomeController::class, 'storeContactForm']);




// admin for cms

Auth::routes();
Route::group(['prefix'=>'dashboard', 'middleware'=> ['web','auth']], function() {
    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard.index');
    //Slider
    Route::resource('/sliders', \App\Http\Controllers\SliderController::class);
    //categories
    Route::get('/categories/select', [\App\Http\Controllers\CategoryController::class, 'select'])->name('categories.select');
    Route::get('/categoriesproducts/select', [\App\Http\Controllers\CategoryProductsController::class, 'select'])->name('categoriesproducts.select');
    //categoories
    Route::resource('/categories', \App\Http\Controllers\CategoryController::class);
  Route::get('/posts/details/{id}', [\App\Http\Controllers\PostController::class, 'details'])->name('posts.details');
    Route::resource('/posts', \App\Http\Controllers\PostController::class);
    
    Route::resource('/categoriesproducts', \App\Http\Controllers\CategoryProductsController::class);
    Route::resource('/products', \App\Http\Controllers\ProductsController::class);
    Route::resource('/postimages', \App\Http\Controllers\PostImagesController::class);
    Route::resource('/categoriesproductsimages', \App\Http\Controllers\CategoryProductsImagesController::class);
    Route::resource('/productimages', \App\Http\Controllers\ProductImagesController::class);
    Route::resource('/careers', \App\Http\Controllers\CareerController::class);
    Route::get('/contact/export', [\App\Http\Controllers\ContactController::class, 'export'])->name('contact.export');
    Route::resource('/contact', \App\Http\Controllers\ContactController::class);
    // file manager
    Route::group(['prefix' => 'filemanager'], function () {
        \UniSharp\LaravelFilemanager\Lfm::routes();
    });
});

