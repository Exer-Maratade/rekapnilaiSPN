<?php

use App\Http\Controllers\AkademikController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GadikController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use App\Models\akademik;

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

// Route::get('/', function () {
//     return view('index');
// });

route::get('/', [SiswaController::class, 'search'])->name('Siswa');

route::get('/Siswa/{id}', [SiswaController::class, 'search'])->name('search');
route::get('/Siswa', [SiswaController::class, 'Storesiswa'])->name('Storesiswa');
route::get('/Pelajaran', [MapelController::class, 'LihatMapel'])->name('Pelajaran');
route::get('/Gadik', [GadikController::class, 'LihatGadik'])->name('Gadik');
route::get('/Akademik', [AkademikController::class, 'index'])->name('Akademik');

route::post('/storeGadik', [GadikController::class, 'storeGadik'])->name('storeGadik');
