<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BloodBankController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//route for donor
Route::get('/donors',[BloodBankController::class,'donorindex']);//show all donors
Route::post('/donor',[BloodBankController::class,'storedonors']);//store donors
Route::get('/donors/{id}',[BloodBankController::class,'showdonor']);//show donor by id
Route::put('/donors/{id}',[BloodBankController::class,'updatedonor']);//update donors by id
Route::delete('/donors/{id}',[BloodBankController::class,'destroydonor']);//delete donors by id

//route for nurse
Route::get('/nurses',[BloodBankController::class,'nurseindex']);//show all nurse
Route::post('/nurse',[BloodBankController::class,'storenurses']);//store nurse
Route::get('/nurses/{id}',[BloodBankController::class,'shownurse']);//show nurse by id
Route::put('/nurses/{id}',[BloodBankController::class,'updatenurse']);//update nurse by id
Route::delete('/nurses/{id}',[BloodBankController::class,'destroynurse']);//delete nurse by id

//route for blood
Route::get('/bloods',[BloodBankController::class,'bloodindex']);//show all available bloods
Route::post('/blood',[BloodBankController::class,'storebloods']);//store bloods
Route::get('/bloods/{code}',[BloodBankController::class,'showbloods']);//show blood by code
Route::put('/bloods/{code}',[BloodBankController::class,'updateblood']);//update blood by code
Route::delete('/bloods/{code}',[BloodBankController::class,'destroyblood']);//delete blood by code

//route for labtechinical
Route::get('/labtechs',[BloodBankController::class,'labtechindex']);//show all labtechnicial
Route::post('/labtech',[BloodBankController::class,'storelabtechnicial']);//store labtechinical
Route::get('/labtechs/{id}',[BloodBankController::class,'showlabtech']);//show labtechinical by id
Route::put('/labtechs/{id}',[BloodBankController::class,'updatelabtech']);//update labtechinical by id
Route::delete('/labtechs/{id}',[BloodBankController::class,'destroylabtech']);//delete labtechinical by id

