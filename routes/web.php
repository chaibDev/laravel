<?php


use Faker\Provider\Lorem;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;


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
//Index - Accueil
Route::get('/', [HomeController::class, 'index'])->name('accueil');
Route::get('/show', [HomeController::class, 'show'])->name('show');

Route::get('/apropos', [AboutController::class, 'apropos'])->name('apropos');
Route::get('/contact/{numero}/me/{text}', [ContactController::class, 'contact'])->name('contact');
Route::get('/users', [UserController::class, 'index'])->name('users');

//Connexion
Route::get('/dbconn', function () {
    return view('dbconn');
});

//Articles
Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
Route::get('./articles/create', [ArticleController::class, 'create'])->name('articles.create');
Route::get('./articles/edit', [ArticlesController::class, 'edit'])->name('articles.edit');
Route::get('./articles/show', [ArticlesController::class, 'show'])->name('articles.show');

Route::get('/components/index', function () {
    return view('components.index');
});
Route::get('/articles/create', function () {
    return view('articles.create');
});
Route::get('/articles/show', function () {
    return view('articles.show');
});
Route::get('/articles/edit', function () {
    return view('articles.edit');
});
Route::get('/welcome', function () {
    return view('welcome');
});
