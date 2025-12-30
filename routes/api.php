<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CuponesController;
use App\Http\Controllers\Api\ProductsController;
use App\Http\Controllers\Api\RolesController;
use App\Http\Controllers\Api\StoresController;
use App\Http\Controllers\Api\TypeCuponesController;
use App\Http\Controllers\Api\TypeStoreController;
use App\Http\Controllers\Api\UsersController;
use App\Http\Controllers\Api\UserStoreController;

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

/**Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::get('cupones',                  [CuponesController::class, 'index']);
Route::post('cupones/detalle',         [CuponesController::class, 'Body']);
Route::post('cupones/created',         [CuponesController::class, 'createdcupons']);
Route::post('cupones/createdMasive',   [CuponesController::class, 'createdcuponsmasive']);
Route::get('cupones/{cupon}',          [CuponesController::class, 'show']);

Route::get('products',                 [ProductsController::class, 'index']);
Route::get('products/{product}',       [ProductsController::class, 'show']);
Route::post('products/detalle',        [ProductsController::class, 'Body']);
Route::post('products/barcode',        [ProductsController::class, 'barcode']);

Route::get('roles',                    [RolesController::class, 'index']);
Route::get('roles/{rol}',              [RolesController::class, 'show']);

Route::get('stores',                   [StoresController::class, 'index']);
Route::get('stores/participa',         [StoresController::class, 'getparticipa']);
Route::get('stores/canjea',            [StoresController::class, 'getcanjea']);
Route::get('stores/{store}',           [StoresController::class, 'show']);
Route::post('stores/detalle',          [StoresController::class, 'body']);

Route::get('typeCupons',               [TypeCuponesController::class, 'index']);
Route::get('typeCupons/{type_cupon}',  [TypeCuponesController::class, 'show']);

Route::get('typeStores',               [TypeStoreController::class, 'index']);
Route::get('typeStores/{type_store}',  [TypeStoreController::class, 'show']);
Route::post('typeStores/detalle',      [TypeStoreController::class, 'body']);

Route::get('users',                    [UsersController::class, 'index']);
Route::get('users/{user}',             [UsersController::class, 'show']);

route::get('userStores',               [UserStoreController::class, 'index']);
route::get('userStores/{user_store}',  [UserStoreController::class, 'show']);

Route::get('stores/participa',         [StoresController::class, 'getparticipa']);


