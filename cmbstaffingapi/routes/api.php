<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/sample', [SampleController::class, 'sample']);
Route::get('/branding', [BrandingController::class, 'branding']);
Route::post('/update-branding-name', [BrandingController::class, 'changeBrandingName']);
Route::post('/update-header-title', [HeaderController::class, 'updateHeader']);
Route::post('/insert-service', [ServiceController::class, 'createService']);
Route::get('/list-of-all-services', [ServiceController::class, 'getServices']);