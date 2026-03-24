<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\MealsController;
use App\Http\Controllers\Admin\ContactsController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\users\concatController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\users\ordercreateController;



// Homepage
Route::get('/', function () {
    return view('welcome');
});

Route:: middleware(['user','auth'])->  prefix('admin')->group(function(){
  Route::controller(UserController::class)->group(function(){

   Route::get('create','create')->name('create');
   Route::get('show','show')->name('show');
   Route::get('profile','profile')->name('profile');
    Route::get('prest/{id}','prest')->where(['id'=>'[0-9]+'])->name('prest');
    Route::get('edit/{id}','edit')->where(['id'=>'[0-9]+'])->name('edit');
     Route::get('editadmin/{id}','editadmin')->where(['id'=>'[0-9]+'])->name('editadmin');
     Route::put('update/{id}','update')->where(['id'=>'[0-9]+'])->name('update');
   Route::post('store','store')->name('store');
   Route::delete('destroy/{id}','destroy')->where(['id'=>'[0-9]+'])->name('destroy');



  });

});

Route::middleware(['user','auth'])-> prefix('admin')->group(function () {
    Route::get('/orders', [OrderController::class, 'index'])->name('admin.orders');
    Route::get('/orders/{id}', [OrderController::class, 'show'])->name('admin.orders.show');
    Route::delete('/orders/{id}', [OrderController::class, 'destroy'])->name('admin.orders.destroy');
});





// List all meals

Route:: middleware('auth') -> get('/order', [MealsController::class, 'sendorder'])->name('order');
Route:: middleware('auth') -> get('/menu', [MealsController::class, 'menu'])->name('menu');

// Show create meal form

Route::middleware(['user','auth'])->prefix('admin')->group(function(){
  Route::get('/meals', [MealsController::class, 'index'])->name('mealsList');
  Route::get('/meals/create', [MealsController::class, 'create'])->name('meals.create');

   // Store new meal
   Route::post('/meals', [MealsController::class, 'store'])->name('meals.store');

  // Show a single meal by ID
   Route::get('/meals/{id}', [MealsController::class, 'show'])->name('meals.show');

  // Edit a meal by ID
  Route::get('/meals/{id}/edit', [MealsController::class, 'edit'])->name('meals.edit');

  // Update a meal by ID
  Route::put('/meals/{id}', [MealsController::class, 'update'])->name('meals.update');

  // Delete a meal by ID
  Route::delete('/meals/{id}', [MealsController::class, 'destroy'])->name('meals.destroy');
  






});




Route::middleware(['user','auth'])->prefix('admin')->group(function(){
   Route::get('/contacts', [ContactsController::class, 'index'])->name('contactsList');
   Route::get('/contacts/{id}', [ContactsController::class, 'show'])->name('contacts.show');
   Route::get('/contacts/create', [ContactsController::class, 'create'])->name('contacts.create');
  Route::post('/contacts', [ContactsController::class, 'store'])->name('contacts.store');
   Route::delete('/contacts/{id}', [ContactsController::class, 'destroy'])->name('contacts.destroy');


});



Route::middleware('auth')-> post('/s', [ordercreateController::class,'store'])->name('orderstore');

Route::middleware('auth')-> post('/cs', [concatController::class,'contactstore'])->name('contactstore');

Route::middleware('auth')->get('/contact', function () {
    return view('users.contact us');
})->name('contact');







Route::middleware('auth')->prefix('public')->group(function(){
 Route::get('index', function () {
  return view('index');})->name('index');
 Route::get('about', function () {
  return view('about');})->name('about');
 Route::get('blog', function () {
  return view('blog');})->name('blog');
 Route::get('blogs', function () {
  return view('blog-single');})->name('blogs');
 

});
  


Route::controller(loginController::class)->group(function () {
    Route::get('/', 'showLoginForm')->name('login');
    Route::post('/login',  'login')->name('login.post');
    Route::get('/register', 'showRegisterForm')->name('register');
     Route::get('/logout', 'logout')->name('logout');
    Route::post('/register', 'register')->name('register.post');
});


// web.php
// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('admin.user');
//     })->name('dashboard');
// });



// Route::post('/logout', function (Request $request) {
//     Auth::logout();
//     $request->session()->invalidate();
//     $request->session()->regenerateToken();
//     return redirect('/login');
// })->name('logout');


// Route::middleware('auth')->group(function () {
//     Route::get('/home', function () {
//         return view('home');
//     })->name('home');

// });



