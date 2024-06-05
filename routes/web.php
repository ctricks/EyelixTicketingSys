<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TicketController;

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
    return view('index');
});

Route::get('createTicket', function () {
    return view('pages.createTicket');
});
// Route::get('/createTicket', [PagesController::class, 'ticketList'],function (){
//      return view('pages.createTicket');
// });


Route::post('addTicket',[PostController::class,'addTicket']);

Route::get('accountA', function () {
    return view('pages.accountA');
});

Route::resource('ticket', TicketController::class);
