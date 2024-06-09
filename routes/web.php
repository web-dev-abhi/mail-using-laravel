<?php

use App\Http\Controllers\Mail\MailUsingMailableController;
use App\Http\Controllers\Mail\MailUsingNotificationController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mail-using-notification', MailUsingNotificationController::class);
Route::get('/mail-using-mailable', MailUsingMailableController::class);
