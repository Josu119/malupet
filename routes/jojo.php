<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();

    // use Illuminate\Support\Facades\Route;

Route::match(['put','patch','post'], '/atal ang alaw', function () {
    return 'super ewan!';
    });
 
Route::get('/greeting', function (){
    return "Hello madlang people, mabuhay!";
});

Route::post('/postMethod', function (Request $request) {
    return "This is created using POST method";
});

Route::put('/putMethod', function (Request $request) {
    return "This is created using PUT method";
});

Route::patch('/patchMethod', function (Request $request) {
    return "This is created using PATCH method";
});

Route::delete('/deleteMethod', function (Request $request) {
    return "This is created using DELETE method";
});

Route::options('/optionsMethod', function (Request $request) {
    return "This is created using OPTIONS method";
});