<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('');
});


Route::get('/users/register',[UserController::class,"showRegister"]);
Route::get('users/login',[UserController::class,"showLogin"]);
Route::post('/users/register',[UserController::class,"register"]);

Route::post('users/login',[UserController::class,"login"])->name("login");

Route::get('/', [ListingController::class,"index"]);


Route::get('/listings/create', [ListingController::class,"create"])->middleware("auth");

Route::get('/listings/{listing}/edit', [ListingController::class,"edit"])->middleware("auth");

Route::post('/listings', [ListingController::class,"store"])->middleware("auth");

Route::put('/listings/{listing}', [ListingController::class,"update"])->middleware("auth");

Route::delete('/listings/{listing}', [ListingController::class,"delete"])->middleware("auth");


Route::get('/listings/{listing}', [ListingController::class,"show"]);


Route::get("/posts/{id}", function ($id) {

    return "This is the id $id";
})->where("id", '^[0-9]+$');

Route::get("/search", function (Request $req) {
    dd($req->name);
});
