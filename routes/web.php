<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendedorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get( '/', function () {
    return view( 'welcome' );
} );

Route::middleware( ['auth'] )->group( function () {

    Route::resource( 'vendedores', VendedorController::class )->parameters( [
        'vendedore' => 'vendedor', // nombre del parametro que se usa en las rutas ej. /vacantes/{vacante} (vacante es el parametro)
    ] );
} );

require __DIR__ . '/auth.php';
