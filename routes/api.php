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
// routes/api.php

Route::get('/member/get-all-professions', 'App\Http\Controllers\ApiController@getProfessions');
Route::get('/member/get-all-clubs', 'App\Http\Controllers\ApiController@getClubs');
Route::get('/member/get-active-events', 'App\Http\Controllers\ApiController@getEvents');
Route::post('/member/get-members-for-sync', 'App\Http\Controllers\ApiController@getMembers');
Route::post('/member/get-member-locations-for-sync', 'App\Http\Controllers\ApiController@getMembersLocation');
Route::post('/member/verify-member-by-id', 'App\Http\Controllers\ApiController@verifyMember');
Route::post('/member/add-photo', 'App\Http\Controllers\ApiController@uploadImage');
Route::post('/member/get-photo', 'App\Http\Controllers\ApiController@getImage');
Route::post('/member/update-location', 'App\Http\Controllers\ApiController@updateLocation');
Route::post('/member/set-app-install-status', 'App\Http\Controllers\ApiController@updateAppStatus');
Route::put('/member/update-member', 'App\Http\Controllers\ApiController@updateMember');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
