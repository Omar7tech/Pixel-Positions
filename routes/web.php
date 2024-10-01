<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\CareersController;
use App\Http\Controllers\Companies;
use App\Http\Controllers\CompaniesController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SalariesController;
use App\Http\Controllers\TagController;
use App\Models\Position;
use Illuminate\Support\Facades\Route;



/* Authentication Routes */
Route::match(['get', 'post'], "login", [AuthenticationController::class, "login"])->name("login");
Route::match(['get', 'post'], "register", [AuthenticationController::class, "register"])->name("register");
Route::post("logout", [AuthenticationController::class, "logout"])->name("logout");


Route::get("/", [PositionController::class, "index"])->middleware("auth")->name("position.index");
Route::get("/salaries", [SalariesController::class, "index"])->middleware("auth")->name("salaries.index");
Route::get("/careers", [CareersController::class, "index"])->middleware("auth")->name("careers.index");
Route::get("/companies", [CompaniesController::class, "index"])->middleware("auth")->name("companies.index");
Route::get("/companies/{employer}", [CompaniesController::class, "show"])->middleware("auth")->name("companies.show");
Route::get("/position/{position}",[PositionController::class, "show"])->name("position.show");
Route::get("/employer/{employer}",[EmployerController::class, "show"])->name("employer.show");
Route::get("/tag/{tag}",[PositionController::class, "tagged_index"])->name("tag.show");
