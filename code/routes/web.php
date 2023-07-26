<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\ResetPassword;
use App\Http\Controllers\ChangePassword;            

use App\Http\Controllers\PetController;
use App\Http\Controllers\VacinacaoController;

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

Auth::routes();

Route::get('/', function () {return redirect('/dashboard');})->middleware('auth');
	Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
	Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.perform');
	Route::get('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
	Route::post('/login', [LoginController::class, 'login'])->middleware('guest')->name('login.perform');
	Route::get('/reset-password', [ResetPassword::class, 'show'])->middleware('guest')->name('reset-password');
	Route::post('/reset-password', [ResetPassword::class, 'send'])->middleware('guest')->name('reset.perform');
	Route::get('/change-password', [ChangePassword::class, 'show'])->middleware('guest')->name('change-password');
	Route::post('/change-password', [ChangePassword::class, 'update'])->middleware('guest')->name('change.perform');


	Route::group(['middleware' => 'auth'], function () {
		Route::get('/dashboard', [HomeController::class, 'index'])->name('home')->middleware('auth');
		Route::get('/profile', [UserProfileController::class, 'show'])->name('profile');
		Route::post('/profile', [UserProfileController::class, 'update'])->name('profile.update');
		Route::post('logout', [LoginController::class, 'logout'])->name('logout');
	
		// Rotas PET
		Route::get('/pets/index', [PetController::class, 'index'])->name('pets.index');		
		Route::get('/pets/create', [PetController::class, 'create'])->name('pets.create');		
		Route::post('/pets/store', [PetController::class, 'store'])->name('pets.store');		
		Route::get('/pets/{pet}', [PetController::class, 'show'])->name('pets.show');		
		Route::get('/pets/{pet}/edit', [PetController::class, 'edit'])->name('pets.edit');		
		Route::put('/pets/{pet}', [PetController::class, 'update'])->name('pets.update');		
		Route::delete('/pets/{pet}', [PetController::class, 'destroy'])->name('pets.destroy');

		//Rotas vacinação
		Route::get('/vacinacao/index', [VacinacaoController::class, 'index'])->name('vacinacao.index');		
		Route::get('/vacinacao/create', [VacinacaoController::class, 'create'])->name('vacinacao.create');		
		Route::post('/vacinacao/store', [VacinacaoController::class, 'store'])->name('vacinacao.store');		
		Route::get('/vacinacao/{vacinacao}', [VacinacaoController::class, 'show'])->name('vacinacao.show');		
		Route::get('/vacinacao/{vacinacao}/edit', [VacinacaoController::class, 'edit'])->name('vacinacao.edit');		
		Route::put('/vacinacao/{vacinacao}', [VacinacaoController::class, 'update'])->name('vacinacao.update');		
		Route::delete('/vacinacao/{vacinacao}', [VacinacaoController::class, 'destroy'])->name('vacinacao.destroy');

		//Rotas agendamento de vacinação




});

