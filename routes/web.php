<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\escalaController;
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

/*Route::get('/', function () {
    return redirect()->route('tarefa.index');;
})->name('web.index');
*/
Route::resource('/tarefa', TarefaController::class);
Route::resource('/escala', escalaController::class);

Route::resource('/', LoginController::class);

Route::get('/sessao', [LoginController::class, 'logoff'])->name('sessao.destroy');

//Auth::routes();

