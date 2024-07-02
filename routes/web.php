<?php

use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Artisan;

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

// Route::get('/', function () {
//     return redirect('/home');
// });

Route::get('/dashboard', function () {
    return view('backend.pages.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function(){
    Route::get('/blog-news', [AdminPagesController::class, 'showBlogNews'])->name('showBlogNews');
    Route::post('/addBlog', [BlogController::class, 'addBlog'])->name('addBlog');
    Route::get('/editBlog/{slug}', [BlogController::class, 'editBlog'])->name(('blog.edit'));
    Route::put('/updateblog/{blog}', [BlogController::class, 'update'])->name('blog.update');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/run-migration', function(){
    Artisan::call('optimize:clear');
    Artisan::call('migrate:fresh --seed');

    return "Migration executed successfully";
});

//---------------------------------------------------  FRONTEND  ---------------------------------------------------------//

Route::get('/', [HomeController::class,'index'])->name('welcome');
Route::get('/blogdetails/{slug}', [HomeController::class,'blog'])->name('blogdetails');

require __DIR__.'/auth.php';
