<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartChatController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('start_chat/{recipient_id}', [StartChatController::class, 'showChat'])->name('start_chat');
Route::post('send_message', [StartChatController::class, 'SendMessage'])->name('send_message');
Route::get('delete_message/{message_id}/{user_id}/', [StartChatController::class, 'DeleteMessage'])->name('delete_message');

