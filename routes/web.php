<?php

use App\Livewire\Admin\Carros\Carros;
use App\Livewire\Admin\Carros\CarrosForm;
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

Route::redirect('/', '/carros');
Route::get('/carros', Carros::class);
Route::get('/carros/criar', CarrosForm::class);
