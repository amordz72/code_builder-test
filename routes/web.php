<?php

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('/mahal/category/index', App\Http\Livewire\Mahal\Category\Index::class)->name('mahal.category.index');
Route::get('/mahal/category/create', App\Http\Livewire\Mahal\Category\Create::class)->name('mahal.category.create');
Route::get('/mahal/category/edit/{id?}', App\Http\Livewire\Mahal\Category\Edit::class)->name('mahal.category.edit');
Route::get('/mahal/category/show/{id?}', App\Http\Livewire\Mahal\Category\Show::class)->name('mahal.category.show');

Route::get('/mahal/post/index', App\Http\Livewire\Mahal\Post\Index::class)->name('mahal.post.index');
// Route::get('/mahal/post/create', App\Http\Livewire\Mahal\Post\Create::class)->name('mahal.post.create');
Route::get('/mahal/post/edit/{id?}', App\Http\Livewire\Mahal\Post\Edit::class)->name('mahal.post.edit');
Route::get('/mahal/post/show/{id?}', App\Http\Livewire\Mahal\Post\Show::class)->name('mahal.post.show');
/**/
