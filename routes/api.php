<?php

use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\ProjectTypeController;
use App\Models\Project;
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
// });


// Route::get('/projects', [ProjectController::class, 'index']);
// Route::get('/projects/{project}', [ProjectController::class, 'show']);
// Route::post('/projects', [ProjectController::class, 'store']);
// Route::delete('/projects', [ProjectController::class, 'destroy']);
// Route::put('/projects', [ProjectController::class, 'update']);
//!OPPURE
//Route::resource('/projects', ProjectController::class);
//!OPPURE
Route::apiResource('/projects', ProjectController::class);
Route::get('/projects/{slug}', [ProjectController::class, 'show']);

// rotta per il project/type controller
Route::get('/tags/{slug}/projects', ProjectTypeController::class);
