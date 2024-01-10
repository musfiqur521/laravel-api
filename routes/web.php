<?php

use App\Models\Category;
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

Route::get('/', function () {
    return view('welcome');
});

// //Get all Categories
// Route::get('categories', function () {
//     //
// })->name('categories.index');

// //Category Create form
// Route::get('categories/create', function () {
//     //
// })->name('categories.create');

// //Category Store
// Route::get('categories/store', function () {
//     //
// })->name('categories.store');

// //View a Single Category
// Route::get('categories/{category}', function (Category $category) {
//     //
// });
