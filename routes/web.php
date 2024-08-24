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
}); 


Route::get('/', function () {
    return view('welcome');
});
