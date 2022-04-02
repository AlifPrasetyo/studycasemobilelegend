<?php

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

Route::get('/api.dazelpro.com/mobile-legends/hero', [\App\Http\Controllers\WrapperController::class, 'mobilelegendshero'])->middleware('npm')->name('mobilelegendshero');
Route::get('/api.dazelpro.com/mobile-legends/specially', [\App\Http\Controllers\WrapperController::class, 'mobilelegendsspecially'])->middleware('npm')->name('mobilelegendsspecially');
Route::get('/api.dazelpro.com/mobile-legends/role', [\App\Http\Controllers\WrapperController::class, 'mobilelegendsrole'])->middleware('npm')->name('mobilelegendsrole');
Route::get('/api.dazelpro.com/mobile-legends/role?roleName=Marksman', [\App\Http\Controllers\WrapperController::class, 'mobilelegendsherorolename'])->middleware('npm')->name('mobilelegendsherorolename');
Route::get('/api.dazelpro.com/mobile-legends/specially?speciallyName=Damage', [\App\Http\Controllers\WrapperController::class, 'mobilelegendsspeciallydamage'])->middleware('npm')->name('mobilelegendsspeciallydamage');
Route::get('/user/identitas', function (){
    return [
        'code' => '0',
        'data' => [
            'npm'=>'197006022',
            'nama'=>'Muhammad Alif Prasetyo',
            'email'=>'197006022@student.unsil.ac.id'
        ]
     ];
})-> middleware('npm');