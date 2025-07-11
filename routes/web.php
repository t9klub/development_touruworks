<?php

use App\Http\Controllers\Development\LoadLivechatController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/load/{url}', function () {
//     return view('utils.load-livechat');
// }); 
Route::get('/load/{url}',[LoadLivechatController::class,'index']); 
Route::get('/dummy', function(){
    return view('utils.dummy-chat');
})->name('utils.dummy');  
Route::get('/basic-editor', function(){
    return view('utils.basic-editor');
})->name('utils.basic-editor'); 

Route::get('lang/{lang}', function($lang){
    app()->setLocale($lang);
    session()->put('locale',$lang);
    return redirect()->route('home');
});
Route::get('/', function () {
    return view('welcome');
})->name('home');
