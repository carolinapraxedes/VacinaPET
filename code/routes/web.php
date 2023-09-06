<?php

use App\Http\Controllers\AppointmentController;
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
use App\Http\Controllers\RGAController;
use App\Http\Controllers\VaccinationController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\VeterinarianController;

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

		//Rotas especies e raças
		Route::get('specie',[PetController::class,'getSpecie'])->name('getSpecie');
		Route::get('breed',[PetController::class,'getBreed'])->name('getBreed');


		//Rotas vacinação
		Route::get('/vaccination/index', [VaccinationController::class, 'index'])->name('vaccination.index');
		Route::get('/vaccination/search', [VaccinationController::class, 'searchRGA'])->name('vaccination.searchRGA');		
		Route::get('/vaccination/create', [VaccinationController::class, 'create'])->name('vaccination.create');		
		Route::post('/vaccination/store', [VaccinationController::class, 'store'])->name('vaccination.store');	
		Route::get('/get-veterinarian-crmv/{id}',[VaccinationController::class,'getCRMV'])->name('getCRMV');
		
		Route::get('/vaccination/{vaccination}', [VaccinationController::class, 'show'])->name('vaccination.show');		
		Route::get('/vaccination/{vaccination}/edit', [VaccinationController::class, 'edit'])->name('vaccination.edit');		
		Route::put('/vaccination/{vaccination}', [VaccinationController::class, 'update'])->name('vaccination.update');		
		Route::delete('/vaccination/{vaccination}', [VaccinationController::class, 'destroy'])->name('vaccination.destroy');

		//Registros de vacina, fabricante e veterinario
		Route::get('/register/vaccine/create', [VaccineController::class, 'create'])->name('vaccine.create');
		Route::get('/register/vaccine/store', [VaccineController::class, 'store'])->name('vaccine.store');
		Route::get('/register/manufacturer/create', [VaccineController::class, 'create'])->name('manufacturer.create');
		Route::get('/register/manufacturer/store', [VaccineController::class, 'store'])->name('manufacturer.store');
		Route::get('/register/veterinarian/create', [VeterinarianController::class, 'create'])->name('veterinarian.create');
		Route::get('/register/veterinarian/store', [VeterinarianController::class, 'store'])->name('veterinarian.store');

		//Rotas agendamento de vacinação
		Route::get('/appointment/index', [AppointmentController::class, 'index'])->name('appointment.index');		
		Route::get('/appointment/create', [AppointmentController::class, 'create'])->name('appointment.create');		
		Route::post('/appointment/store', [AppointmentController::class, 'store'])->name('appointment.store');		
		Route::get('/appointment/{appointment}', [AppointmentController::class, 'show'])->name('appointment.show');		
		Route::get('/appointment/{appointment}/edit', [AppointmentController::class, 'edit'])->name('appointment.edit');		
		Route::put('/appointment/{appointment}', [AppointmentController::class, 'update'])->name('appointment.update');		
		Route::delete('/appointment/{appointment}', [AppointmentController::class, 'destroy'])->name('appointment.destroy');

		//Rotas RGA
		Route::get('/rga/index', [RGAController::class, 'index'])->name('rga.index');		
		Route::get('/rga/create', [RGAController::class, 'create'])->name('rga.create');		
		Route::post('/rga/store', [RGAController::class, 'store'])->name('rga.store');		
		Route::get('/rga/{rga}', [RGAController::class, 'show'])->name('rga.show');		
		Route::get('/rga/{rga}/edit', [RGAController::class, 'edit'])->name('rga.edit');		
		Route::put('/rga/{rga}', [RGAController::class, 'update'])->name('rga.update');		
		Route::delete('/rga/{rga}', [RGAController::class, 'destroy'])->name('rga.destroy');



});

