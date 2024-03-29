<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\CreateCustomer;
use App\Livewire\IndexCustomer;
use App\Livewire\ViewCustomer;
use App\Livewire\EditCustomer;


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
    return view('welcome');
})->name('welcome');

Route::get('/customer/create', CreateCustomer::class);
Route::get('/customer/index', IndexCustomer::class)->name('index-customer');
Route::get('/customer/{customer}', ViewCustomer::class)->name('view-customer');
Route::get('/customer/{customer}/edit', EditCustomer::class)->name('edit-customer');

