<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
=======
>>>>>>> 105738666bad883ee3b34c38655b529e9fea28cb
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\AboutusController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VisimisiController;
use App\Http\Controllers\CartDetailController;

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


Route::get('/',[HomeController::class,'index'], function () {
    return view('beforeLogin.home');
});
Route::get('/sip', function () {
    return view('artikel.sip');
});
Route::get('/loginadmin', function () {
    return view('auth.loginadmin');
});
Route::get('/registeradmin', function () {
    return view('auth.registeradmin');
}); 





Route::middleware(['middleware'=>'PreventBackHistory'])->group(function () {
    Auth::routes();
});
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    Route::group(['prefix'=>'admin', 'middleware'=>['isAdmin','auth','PreventBackHistory']], function(){
        Route::get('dashboard',[AdminController::class,'index'])->name('admin.dashboard');
        Route::get('informasi',[AdminController::class,'informasi'])->name('informasi');
        Route::get('slider',[AdminController::class,'slider'])->name('slider');
        Route::get('aboutus',[AdminController::class,'aboutus'])->name('aboutus');
        Route::get('contactus',[AdminController::class,'contactus'])->name('contactus');
        Route::get('article',[AdminController::class,'article'])->name('article');
        Route::get('product',[AdminController::class,'product'])->name('product');
        Route::get('order',[AdminController::class,'order'])->name('order');
        Route::get('payment',[AdminController::class,'payment'])->name('payment');
        Route::get('profileadmin',[AdminController::class,'admin'])->name('profileadmin');
        Route::get('accountuser',[AdminController::class,'user'])->name('accountuser');

        // slider
        Route::get('slider',[SliderController::class, 'index'])->name('slider.index'); 
        Route::get('create_slider',[SliderController::class, 'create'])->name('slider.create');
        Route::post('store_slider',[SliderController::class, 'store'])->name('store_slider');
        Route::get('edit_slider/{id}',[SliderController::class, 'edit'])->name('slider.edit');
        Route::put('update_slider/{id}',[SliderController::class, 'update'])->name('update_slider');
        Route::delete('delete_slider/{id}',[SliderController::class, 'destroy'])->name('slider.destroy');

        // slider

        // article
        Route::get('artikel',[ArtikelController::class, 'index'])->name('artikel.index');
        Route::get('create_artikel',[ArtikelController::class, 'create'])->name('artikel.create');
        Route::post('store_artikel',[ArtikelController::class, 'store'])->name('store_artikel');
        Route::get('edit_artikel/{id}',[ArtikelController::class, 'edit'])->name('edit_artikel');
        Route::put('update_artikel/{id}',[ArtikelController::class, 'update'])->name('update_artikel');
<<<<<<< HEAD
        Route::delete('delete_artikel/{id}', [ArtikelController::class, 'destroy'])->name('artikel.destroy');
        // Route::get('search', [ArticleController::class, 'search'])->name('search');
        Route::post('/search','ArtikelController@search');
        // article
=======
        Route::delete('delete_artikel/{id}', [ArtikelController::class, 'destroy'])->name('delete_artikel');
        Route::post('/article/search',[ArtikelController::class,'search'])->name('article.search');
        // artikel
>>>>>>> 105738666bad883ee3b34c38655b529e9fea28cb

        // tentangkami
        Route::get('aboutus',[AboutusController::class, 'index'])->name('aboutus.index'); 
        Route::get('create_aboutus',[AboutusController::class, 'create'])->name('aboutus.create');
        Route::post('store_aboutus',[AboutusController::class, 'store'])->name('store_aboutus');
        Route::get('edit_aboutus/{id}',[AboutusController::class, 'edit'])->name('edit_aboutus');
        Route::put('update_aboutus/{id}',[AboutusController::class, 'update'])->name('update_aboutus');
        // tentangkami

        // visimisi
        Route::get('visi',[VisimisiController::class, 'showvisi'])->name('visi');
        Route::get('addvisi',[VisimisiController::class, 'addvisi'])->name('addvisi');
        Route::post('store_visi',[VisimisiController::class, 'storevisi'])->name('store_visi');
        Route::get('edit_visi/{id}',[VisimisiController::class, 'editvisi'])->name('edit_visi');
        Route::put('update_visi/{id}',[VisimisiController::class, 'updatevisi'])->name('update_visi');
        // visimisi

        // visimisi
        Route::get('misi',[VisimisiController::class, 'showmisi'])->name('misi');
        Route::get('addmisi',[VisimisiController::class, 'addmisi'])->name('addmisi');
        Route::post('store_misi',[VisimisiController::class, 'storemisi'])->name('store_misi');
        Route::get('edit_misi/{id}',[VisimisiController::class, 'editmisi'])->name('edit_misi');
        Route::put('update_misi/{id}',[VisimisiController::class, 'updatemisi'])->name('update_misi');
        // visimisi

        Route::resource('slider',SliderController::class);
        Route::resource('product',ProductController::class);
        Route::resource('order',OrderController::class);            // product
        Route::resource('product',ProductController::class);
        // product

        // order
        Route::resource('order',OrderController::class);
        // order


        




    });

    
    Route::group(['prefix'=>'user', 'middleware'=>['isUser','auth','PreventBackHistory']], function(){
        Route::get('detailartikel/{id}',[UserController::class,'detail'])->name('detailartikel');
        Route::get('dashboard',[UserController::class,'index'])->name('user.dashboard');
        Route::get('tentangkami',[UserController::class,'tentangkami'])->name('tentangkami');
        Route::get('profile',[UserController::class,'profile'])->name('profile');
        Route::get('alamat',[UserController::class,'alamat'])->name('alamat');
        Route::get('password',[UserController::class,'password'])->name('password');
<<<<<<< HEAD
        Route::get('cart',[UserController::class,'cart'])->name('cart');
        Route::get('checkout',[UserController::class,'checkout'])->name('checkout');
=======
        Route::get('checkout',[UserController::class,'checkout'])->name('checkout');

        // Route::get('cart',[UserController::class,'cart'])->name('cart');
>>>>>>> 105738666bad883ee3b34c38655b529e9fea28cb
        Route::get('daftarpesanan',[UserController::class,'daftarpesanan'])->name('daftarpesanan');
        
        // artiekel
        Route::get('artikel',[UserController::class,'artikel'])->name('artikel');
        Route::get('detailartikel/{id}',[UserController::class,'detail'])->name('detailartikel');
        // artiekel

        // produk
        Route::get('produk',[UserController::class,'produk'])->name('produk');
        Route::get('detailproduk/{id}',[UserController::class,'detailproduk'])->name('detailproduk');
        // produk

        // cart
        Route::resource('cart', CartController::class);
        // Route::get('cart', [CartController::class,'index'])->name('cart.index');
        // Route::post('cart', [CartController::class, 'store'])->name('cart.store');
        Route::post('clear', [CartController::class, 'clear'])->name('cart.clear');
        // cart detai

    });

