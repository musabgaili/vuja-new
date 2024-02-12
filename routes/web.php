<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Auth;
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

// Auth::routes();

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('portfolio/{portfolio}', [PortfolioController::class ,'details'])->name('portfolio.details');


Auth::routes();

Route::post('/contact', [ContactController::class ,'store'])->name('contact');


Route::get('/journey', [HomeController::class , 'journey'])->name('journey');




// Route::get('language/{locale}', function ($locale = null) {
//     app()->setLocale($locale);
//     session()->put('locale', $locale);

//     return redirect()->back();
// })->name('locale');


Route::get('/locale/{locale}', function () {
        return 'ok';
})->name('locale');



