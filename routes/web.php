<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/', function () {
    return view('home');
});


Route::get('/',[HomeController::class,'index']);


    // redirects
Route::get('/redirects',[HomeController::class,'redirects'])->middleware('guard');



Route::group(['middleware' => ['auth', 'web']], function() {

    Route::post('/',[HomeController::class,'store']);




        // chefs
        Route::get('/insertchefs',[AdminController::class,'viewchefs'])->middleware('guard');
        Route::post('/insertchefs',[AdminController::class,'insertchefs'])->middleware('guard');
    //user
        Route::get('/users',[AdminController::class,'users'])->middleware('guard');
        Route::get('/deleteuser/{id}',[AdminController::class,'deleteuser'])->middleware('guard');

        //banner
        Route::get('/banner_insert',[AdminController::class,'banner_insert'])->middleware('guard');
        Route::post('/banner_insert',[AdminController::class,'banner_store'])->middleware('guard');

        //reservation
        Route::get('/reservation_view',[AdminController::class,'reservation_view'])->middleware('guard');
        Route::get('/delete_reservation/{id}',[AdminController::class,'delete_reservation'])->middleware('guard');

        //food
        Route::get('/foodmenu',[AdminController::class,'foodmenu'])->middleware('guard');
        Route::post('/foodmenu',[AdminController::class,'upload'])->middleware('guard');
        Route::get('/deletemenu/{id}',[AdminController::class,'deletemenu'])->middleware('guard');
        Route::get('/editfood/{id}',[AdminController::class,'editfood'])->middleware('guard');
        // Route::get('/updatefood/{id}',[AdminController::class,'updatefood'])->middleware('guard');
        Route::post('/updatefood/{id}',[AdminController::class,'updatefood'])->middleware('guard');
  });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/no-access',function(){
    return redirect('/');
});
