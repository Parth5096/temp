<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\FrontController::class, 'index'])->name('home');
Route::get('/register', [App\Http\Controllers\FrontController::class, 'register'])->name('register');
Route::post('/registration', [App\Http\Controllers\FrontController::class, 'postRegistration'])->name('register.post');

Route::get('admin/login', [App\Http\Controllers\admin\AuthController::class, 'index'])->name('login');
Route::post('post-login', [App\Http\Controllers\admin\AuthController::class, 'postLogin'])->name('login.post'); 

route::group(['prefix'=>'admin', 'middleware'=>'auth'],function(){ 

    Route::get('dashboard', [App\Http\Controllers\admin\AuthController::class, 'dashboard'])->name('dashboard'); 
    Route::get('logout', [App\Http\Controllers\admin\AuthController::class, 'logout'])->name('logout');

    Route::get('change-password', [App\Http\Controllers\admin\ProfileController::class, 'password'])->name('change.password');
    Route::post('change-password', [App\Http\Controllers\admin\ProfileController::class, 'changepassword'])->name('changePasswordPost');

    Route::get('profile', [App\Http\Controllers\admin\ProfileController::class, 'profile'])->name('profile');
    Route::patch('update-profile/{id}', [App\Http\Controllers\admin\ProfileController::class, 'updateprofile'])->name('updateprofile');
    
    //Order Controller
    Route::get('/user',[App\Http\Controllers\admin\UserController::class,'index'])->name('user');
    Route::get('/user-create',[App\Http\Controllers\admin\UserController::class,'create'])->name('user.create');
    Route::post('/user-store',[App\Http\Controllers\admin\UserController::class,'store'])->name('user.store');
    Route::get('/user-delete/{id}',[App\Http\Controllers\admin\UserController::class,'delete'])->name('user.delete');
    Route::get('/user-edit/{id}',[App\Http\Controllers\admin\UserController::class,'edit'])->name('user.edit');
    Route::patch('/user-update/{id}',[App\Http\Controllers\admin\UserController::class,'update'])->name('user.update');
    Route::get('/user-status/{id}',[App\Http\Controllers\admin\UserController::class,'status'])->name('user.status');

    
    //Product Controller
    Route::get('/product',[App\Http\Controllers\admin\ProductController::class,'index'])->name('product');
    Route::get('/product-create',[App\Http\Controllers\admin\ProductController::class,'create'])->name('product.create');
    Route::post('/product-store',[App\Http\Controllers\admin\ProductController::class,'store'])->name('product.store');
    Route::get('/product-delete/{id}',[App\Http\Controllers\admin\ProductController::class,'delete'])->name('product.delete');
    Route::get('/product-edit/{id}',[App\Http\Controllers\admin\ProductController::class,'edit'])->name('product.edit');
    Route::patch('/product-update/{id}',[App\Http\Controllers\admin\ProductController::class,'update'])->name('product.update');
    Route::get('/product-status/{id}',[App\Http\Controllers\admin\ProductController::class,'status'])->name('product.status');

    //Cart Controller
    Route::get('/cart',[App\Http\Controllers\admin\CartController::class,'index'])->name('cart');
    Route::get('/cart-delete/{id}',[App\Http\Controllers\admin\CartController::class,'delete'])->name('cart.delete');
    Route::get('/cart-status/{id}',[App\Http\Controllers\admin\CartController::class,'status'])->name('cart.status');


    
    //payment Controller
    Route::get('/payment',[App\Http\Controllers\admin\PaymentController::class,'index'])->name('payment');
    Route::get('/payment-delete/{id}',[App\Http\Controllers\admin\PaymentController::class,'delete'])->name('payment.delete');
    Route::get('/payment-status/{id}',[App\Http\Controllers\admin\PaymentController::class,'status'])->name('payment.status');

    //coupon Controller
    Route::get('/category',[App\Http\Controllers\admin\CategoryController::class,'index'])->name('category');
    Route::get('/category-create',[App\Http\Controllers\admin\CategoryController::class,'create'])->name('category.create');
    Route::post('/category-store',[App\Http\Controllers\admin\CategoryController::class,'store'])->name('category.store');
    Route::get('/category-delete/{id}',[App\Http\Controllers\admin\CategoryController::class,'delete'])->name('category.delete');
    Route::get('/category-edit/{id}',[App\Http\Controllers\admin\CategoryController::class,'edit'])->name('category.edit');
    Route::patch('/category-update/{id}',[App\Http\Controllers\admin\CategoryController::class,'update'])->name('category.update');
    Route::get('/category-status/{id}',[App\Http\Controllers\admin\CategoryController::class,'status'])->name('category.status');
    
    
    //coupon Controller
    Route::get('/coupon',[App\Http\Controllers\admin\CouponController::class,'index'])->name('coupon');
    Route::get('/coupon-create',[App\Http\Controllers\admin\CouponController::class,'create'])->name('coupon.create');
    Route::post('/coupon-store',[App\Http\Controllers\admin\CouponController::class,'store'])->name('coupon.store');
    Route::get('/coupon-delete/{id}',[App\Http\Controllers\admin\CouponController::class,'delete'])->name('coupon.delete');
    Route::get('/coupon-edit/{id}',[App\Http\Controllers\admin\CouponController::class,'edit'])->name('coupon.edit');
    Route::patch('/coupon-update/{id}',[App\Http\Controllers\admin\CouponController::class,'update'])->name('coupon.update');
    Route::get('/coupon-status/{id}',[App\Http\Controllers\admin\CouponController::class,'status'])->name('coupon.status');
    
    //certificate Controller
    Route::get('/certificate',[App\Http\Controllers\admin\CertificateController::class,'index'])->name('certificate');
    Route::get('/certificate-create',[App\Http\Controllers\admin\CertificateController::class,'create'])->name('certificate.create');
    Route::post('/certificate-store',[App\Http\Controllers\admin\CertificateController::class,'store'])->name('certificate.store');
    Route::get('/certificate-delete/{id}',[App\Http\Controllers\admin\CertificateController::class,'delete'])->name('certificate.delete');
    Route::get('/certificate-edit/{id}',[App\Http\Controllers\admin\CertificateController::class,'edit'])->name('certificate.edit');
    Route::patch('/certificate-update/{id}',[App\Http\Controllers\admin\CertificateController::class,'update'])->name('certificate.update');
    Route::get('/certificate-status/{id}',[App\Http\Controllers\admin\CertificateController::class,'status'])->name('certificate.status');

    //TestimonialController
    Route::get('/testimonial',[App\Http\Controllers\admin\TestimonialController::class,'index'])->name('testimonial');
    Route::get('/testimonial-create',[App\Http\Controllers\admin\TestimonialController::class,'create'])->name('testimonial.create');
    Route::post('/testimonial-store',[App\Http\Controllers\admin\TestimonialController::class,'store'])->name('testimonial.store');
    Route::get('/testimonial-delete/{id}',[App\Http\Controllers\admin\TestimonialController::class,'delete'])->name('testimonial.delete');
    Route::get('/testimonial-edit/{id}',[App\Http\Controllers\admin\TestimonialController::class,'edit'])->name('testimonial.edit');
    Route::patch('/testimonial-update/{id}',[App\Http\Controllers\admin\TestimonialController::class,'update'])->name('testimonial.update');
    Route::get('/testimonial-status/{id}',[App\Http\Controllers\admin\TestimonialController::class,'status'])->name('testimonial.status');


    //NewsController
    Route::get('/news',[App\Http\Controllers\admin\NewsController::class,'index'])->name('news');
    Route::get('/news-create',[App\Http\Controllers\admin\NewsController::class,'create'])->name('news.create');
    Route::post('/news-store',[App\Http\Controllers\admin\NewsController::class,'store'])->name('news.store');
    Route::get('/news-delete/{id}',[App\Http\Controllers\admin\NewsController::class,'delete'])->name('news.delete');
    Route::get('/news-edit/{id}',[App\Http\Controllers\admin\NewsController::class,'edit'])->name('news.edit');
    Route::patch('/news-update/{id}',[App\Http\Controllers\admin\NewsController::class,'update'])->name('news.update');
    Route::get('/news-status/{id}',[App\Http\Controllers\admin\NewsController::class,'status'])->name('news.status');
    
    //Contact Controller
    Route::get('/contact-us',[App\Http\Controllers\admin\ContactController::class,'index'])->name('contact');
    Route::get('/contact-us-delete/{id}',[App\Http\Controllers\admin\ContactController::class,'delete'])->name('contact.delete');
    Route::get('/contact-us-status/{id}',[App\Http\Controllers\admin\ContactController::class,'status'])->name('contact.status');

});