<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategorijaController;
use App\Http\Controllers\PrijavaController;
use App\Http\Controllers\ObukaController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\AuthMiddleware;
use App\Http\Middleware\CheckUserLoggedIn;
use App\Http\Middleware\UserMiddleware;
use Illuminate\Support\Facades\Route;

Route::get("/", [ObukaController::class, "index"])-> name("public.pocetna");

Route::get("/ponuda", [ObukaController::class, "ponuda"])-> name("public.ponuda");

Route::get("/kontakt", [ObukaController::class, "kontakt"])-> name("public.kontakt");

Route::get('/single-obuka/{id}', [ObukaController::class, 'single'])->name("public.single");

Route::get('/profil', [UserController::class, 'profil'])->name("public.profil");

Route::get("/admin-index", [ObukaController::class, "adminindex"])-> name("admin.index");

Route::get("/admin-obuke", [ObukaController::class, "obuke"])-> name("admin.listobuke");

Route::get('/admin-add', [ObukaController::class, 'addObuka'])->name("admin.addobuka");
Route::post('/admin-add', [ObukaController::class, 'storeObuka'])->name("admin.storeobuka");

Route::get('/admin-edit/{id}', [ObukaController::class, 'editObuka'])->name("admin.editobuka");
Route::post('/admin-edit/{id}', [ObukaController::class, 'updateObuka'])->name("admin.updateobuka");

Route::get('/admin-delete/{id}', [ObukaController::class, "deleteObuka"])->name("admin.deleteobuka");
Route::post('/admin-delete/{id}', [ObukaController::class, "destroyObuka"])->name("admin.destroyobuka");

Route::middleware(CheckUserLoggedIn::class)->group(function() {
    Route::get('/login', [AuthController::class, "login"])->name("login");
    Route::post('/login', [AuthController::class, "storeLogin"])->name("storeLogin");
});

Route::get('/logout', [AuthController::class, "logout"])->name("logout");

Route::get("/not-auth", [AuthController::class, "notAuth"])->name("not-auth");

Route::middleware(AuthMiddleware::class)->group(function() {

    Route::get("/admin-index", [ObukaController::class, "adminindex"])-> name("admin.index");

    Route::get("/admin-obuke", [ObukaController::class, "obuke"])-> name("admin.listobuke");

    Route::get('/admin-add', [ObukaController::class, 'addObuka'])->name("admin.addobuka");
    Route::post('/admin-add', [ObukaController::class, 'storeObuka'])->name("admin.storeobuka");

    Route::get('/admin-delete/{id}', [ObukaController::class, "deleteObuka"])->name("admin.deleteobuka");
    Route::post('/admin-delete/{id}', [ObukaController::class, "destroyObuka"])->name("admin.destroyobuka");

    Route::get('/admin-edit/{id}', [ObukaController::class, 'editObuka'])->name("admin.editobuka");
    Route::post('/admin-edit/{id}', [ObukaController::class, 'updateObuka'])->name("admin.updateobuka");


    Route::get('/admin-kategorije', [KategorijaController::class, 'kategorije'])->name("admin.listkategorije");

    Route::get('/admin-addkategorija', [KategorijaController::class, 'addKategorija'])->name("admin.addkategorija");
    Route::post('/admin-addkategorija', [KategorijaController::class, 'storeKategorija'])->name("admin.storekategorija");

    Route::get('/admin-deletekategorija/{id}', [KategorijaController::class, "deleteKategorija"])->name("admin.deletekategorija");
    Route::post('/admin-deletekategorija/{id}', [KategorijaController::class, "destroyKategorija"])->name("admin.deletekategorija");

    Route::get('/admin-editkategorija/{id}', [KategorijaController::class, 'editKategorija'])->name("admin.editkategorija");
    Route::post('/admin-editkategorija/{id}', [KategorijaController::class, 'updateKategorija'])->name("admin.editkategorija");

    Route::get("/admin-users", [UserController::class, 'users'])->name("admin.listusers");

    Route::get('/register', [AuthController::class, "register"])->name("register");
    Route::post('/register', [AuthController::class, "storeRegister"])->name("storeregister");

    Route::get('/admin-deleteuser/{id}', [UserController::class, "deleteUser"])->name("admin.deleteuser");
    Route::post('/admin-deleteuser/{id}', [UserController::class, "destroyUser"])->name("admin.deleteuser");

    Route::get('/admin-edituser/{id}', [UserController::class, 'editUser'])->name("admin.edituser");
    Route::post('/admin-edituser/{id}', [UserController::class, 'updateUser'])->name("admin.edituser");
    
});

Route::middleware(UserMiddleware::class)->group(function() {
    
    Route::get('/profil', [UserController::class, 'profil'])->name("public.profil");

    Route::get('/prijava', [PrijavaController::class, 'createPublic'])->name('public.prijava');
    Route::post('/prijava', [PrijavaController::class, 'storePublic'])->name('public.prijava');

    Route::post('prijave-odjave{id}', [PrijavaController::class, 'destroy'])->name('public.odjava');
});


