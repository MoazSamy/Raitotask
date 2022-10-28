<?php

use App\Models\Product;
use App\Models\User;
use App\Models\Bill;
use App\Http\Controllers\BillController;
use App\Http\Controllers\ProductController;
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
    return view('home');
});
Route::get('/users', function () {
    return view('users',[
        'users' => User::all(),
    ]);
});
Route::get('/billsList', function () {
    return view('billsList',[
        'bills' => Bill::all(),
    ]);
});
Route::get('/products', [ProductController::class, 'productList'])->name('products.list');
Route::get('bills', [ProductController::class, 'billList'])->name('bills.list');
Route::post('bills', [ProductController::class, 'addToBill'])->name('bill.store');
Route::post('/bills/add', [BillController::class, 'storeBill']);