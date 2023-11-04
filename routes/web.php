<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\SslCommerzPaymentController;
use App\Http\Controllers\frontend\HomeController as FrontendHomeController;

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

//Frontend

//SSlCommerz
Route::post('/pay/{id}', [SslCommerzPaymentController::class, 'index'])->name('pay.now');

Route::get('/example1', [SslCommerzPaymentController::class, 'exampleEasyCheckout']);
Route::get('/example2', [SslCommerzPaymentController::class, 'exampleHostedCheckout']);
Route::post('/success', [SslCommerzPaymentController::class, 'success']);
Route::post('/fail', [SslCommerzPaymentController::class, 'fail']);
Route::post('/cancel', [SslCommerzPaymentController::class, 'cancel']);



//Pages
Route::get('/',[FrontendHomeController::class,'index'])->name('home');
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/category',[CategoryController::class,'index'])->name('category');
Route::get('/category/device/{id}',[CategoryController::class,'CategoryWise'])->name('category.wise.device');
Route::get('/device-page',[DeviceController::class,'index'])->name('device.page');
Route::get('/device-details/{id}',[DeviceController::class,'details'])->name('details');
Route::get('/device-latest',[DeviceController::class,'latest'])->name('latest');
Route::get('/user-profile',[TestController::class,'Profile'])->name('user.profile');

//Auth
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::post('/store',[AuthController::class,'store'])->name('store');

//Register
Route::get('/registration',[RegistrationController::class,'index'])->name('registration');
Route::post('/registration/store',[RegistrationController::class,'store'])->name('registration.store');

//AddToCard
Route::get('add-to-cart/{id}',[AddToCartController::class,'addToCart'])->name('add.to.cart');
Route::get('/view-cart',[AddToCartController::class,'viewCart'])->name('view.cart');
Route::get('/clear-cart',[AddToCartController::class,'clearCart'])->name('cart.clear');
Route::get('/cart-item/delete/{id}',[AddToCartController::class,'cartItemDelete'])->name('cart.item.delete');

//Backend

//Middleware
Route::group(['middleware'=>'auth'],function(){


Route::get('/order/{id}',[OrderController::class,'placeOrder'])->name('order');
Route::post('/buy',[OrderController::class,'store'])->name('buy');
Route::get('/list',[OrderController::class,'list'])->name('order.list');

//Pages
Route::get('/app',[HomeController::class,'index'])->name('app');
Route::get('/logout',[TestController::class,'logout'])->name('logout');
Route::get('/form',[TestController::class,'form'])->name('form');
Route::get('/setting',[SettingController::class,'index'])->name('setting');
Route::get('/change-password',[ChangePasswordController::class,'index'])->name('change.password');
Route::post('/update-password/{id}',[ChangePasswordController::class,'update'])->name('update.password');
Route::get('/user-list',[AuthController::class,'list'])->name('user.list');
Route::get('/category-list',[CategoryController::class,'list'])->name('category.list');
Route::get('/category-form',[CategoryController::class,'form'])->name('category.form');

Route::get('/category-edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
Route::post('/category-update/{id}',[CategoryController::class,'update'])->name('category.update');

Route::get('/device-list',[DeviceController::class,'list'])->name('device.list');
Route::get('/device-form',[DeviceController::class,'form'])->name('device.form');

Route::get('/device-edit/{id}',[DeviceController::class,'edit'])->name('device.edit');
Route::post('/device-update{id}',[DeviceController::class,'update'])->name('device.update');
//profile
Route::get('/profile',[ProfileController::class,'index'])->name('profile');
//post
Route::post('/registration/update{id}',[RegistrationController::class,'update'])->name('registration.update');
Route::post('/category-store',[CategoryController::class,'store'])->name('category.store');
Route::post('/device-store',[DeviceController::class,'store'])->name('device.store');

Route::get('/report',[ReportController::class,'report'])->name('report');
Route::get('/report/search',[ReportController::class,'reportSearch'])->name('order.report.search');

});
