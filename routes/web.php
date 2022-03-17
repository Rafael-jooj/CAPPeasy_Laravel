<?php

use App\Http\Controllers\{
    PostController,
    HomeController,
    ProjetosController
};

use Illuminate\Support\Facades\Route;

Route::middleware(['auth'])->group(function(){
    Route::any('/posts/search', [PostController::class, 'search'])->name('posts.search');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::get('/posts/edit/{id}', [PostController::class, 'edit'])->name('posts.edit');
    Route::delete('/posts/{id}', [PostController::class, 'delete'])->name('posts.delete');
    Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
});

Route::middleware(['auth'])->group(function(){
    // Route::get('/home', [HomeController::class, 'home'])->name('site.home');
    Route::get('/projeto/{id}', [ProjetosController::class, 'detalhes'])->name('site.detalhes');
    Route::get('/cadastrar', [HomeController::class, 'cadastrar'])->name('site.cadastrar');
    Route::get('/sobre', [HomeController::class, 'sobre'])->name('site.sobre');
    Route::get('/conta', [HomeController::class, 'conta'])->name('site.conta');
    Route::post('/projetos', [ProjetosController::class, 'store'])->name('projetos.store');
    Route::get('/projetos', [ProjetosController::class, 'index'])->name('site.projetos');
});

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', function () {
    return view('site.home');
})->middleware(['auth'])->name('site.home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
