<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');

Route::get('/about', function (){
    return Inertia::render('About');
})->name('about.index');
Route::get('/blog', function (){
    return Inertia::render('Blog');
})->name('blog.index');
Route::get('/blog-post', function (){
    return Inertia::render('BlogPost');
})->name('blog-post.index');
Route::get('/testimonials', function (){
    return Inertia::render('Testimonials');
})->name('testimonials.index');
Route::get('/help', function (){
    return Inertia::render('Help');
})->name('help.index');
Route::get('/contact', function (){
    return Inertia::render('Contact');
})->name('contact.index');
Route::get('/404', function (){
    return Inertia::render('PageNotFound');
})->name('error404');



Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
