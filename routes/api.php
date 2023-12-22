<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
<<<<<<< HEAD

=======
use App\http\controllers\MaterialTypeController;
use App\http\controllers\SoldProductsController;
use App\http\controllers\StoneProductsController;
>>>>>>> cb34fb6 (Last)
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix ('material_type')->group(function()  {
    Route::get('/',[MaterialTypeController::class, 'index']);
<<<<<<< HEAD
    Route::get('/name', [MaterialTypeController::class, 'name']);
    Route::post('/', [MaterialTypeController::class, 'store']);
    Route::post('complete/{id}', [MaterialTypeController::class, 'complete']);
=======
    Route::get('/{id}', [MaterialTypeController::class, 'show']);
    Route::post('/', [MaterialTypeController::class, 'store']);
    Route::put('/', [MaterialTypeController::class, 'update']);
>>>>>>> cb34fb6 (Last)
    Route::delete('/{id}', [MaterialTypeController::class, 'destroy']);
}); 

Route::prefix ('stone_products')->group(function()  {
    Route::get('/',[StoneProductsController::class, 'index']);
<<<<<<< HEAD
    Route::get('/name', [StoneProductsController::class, 'name']);
    Route::get('/price', [StoneProductsController::class, 'price']);
    Route::get('/type_id', [StoneProductsController::class, 'type_id']);
=======
    Route::get('/{id}', [StoneProductsController::class, 'show']);
    Route::post('/', [StoneProductsController::class, 'store']);
    Route::put('/', [StoneProductsController::class, 'update']);
    Route::delete('/{id}', [StoneProductsController::class, 'destroy']);
>>>>>>> cb34fb6 (Last)
}); 

Route::prefix ('sold_products')->group(function()  {
    Route::get('/',[SoldProductsController::class, 'index']);
<<<<<<< HEAD
    Route::get('/sum', [SoldProductsController::class, 'sum']);
    Route::get('/amount', [SoldProductsController::class, 'amount']);
    Route::get('/stone_products_id', [SoldProductsController::class, 'stone_products_id']);
=======
    Route::get('/{id}', [SoldProductsController::class, 'show']);
    Route::post('/', [SoldProductsController::class, 'store']);
    Route::put('/', [SoldProductsController::class, 'update']);
    Route::delete('/{id}', [SoldProductsController::class, 'destroy']);
>>>>>>> cb34fb6 (Last)
}); 



