<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PhotoController;

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




Route::get('/hello', [WelcomeController::class, 'hello']);
//MEMBUAT CONTTROLLER SOAL F
Route::get('/',[PageController::class, 'index']);

Route::get('/about',[PageController::class, 'about']);

Route::get('/articles/{id}',[PageController::class, 'articles']);

//MEMBUAT CONTROLLER SOAL G
Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/articles{id}', [ArticleController::class, 'index']);

// RESOURCE CONTROLLER - SOAL B

Route::resource('photos', PhotoController::class);

//RESOURCE CONTROLLER - SOAL D

//Route::resource('photos', PhotoController::class)->only([
   // 'index', 'show'
   // ]);

// MEMBUAT VIEW-SOAL B
//Route::get('/greeting', function () {
//	return view('hello', ['name' => 'Andi']);
 // });

//VIEW DALAM DIREKTORI - soal C
//Route::get('/greeting', function () {
	// return view('blog.hello', ['name' => 'Della']);
// });

//MENAMPILKAN VIEW DARI CONTROLLER - SOAL B
Route::get('/greeting', [WelcomeController::class, 'greeting']);



 Route::get('/world', function () {
    return 'World';
 });

 Route::get('/', function () {
    return 'Selamat Datang';
 });


 Route::get('/about/{name?}', function ($name='Della') {
    return '2341760124 - ARDHELIA PUTRI MAHARANI';
    });

    Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
        return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
    });

    Route::get('/articles/{id}', function ($id) {
        return "Halaman Artikel dengan ID $id";
    });

    Route::get('/user/{name?}', function ($name=null) {
        return 'Nama saya '.$name;
        });



//Route::get('/', function () {
//    return view('welcome');
// });
