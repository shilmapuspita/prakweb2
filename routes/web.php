<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;
use Illuminate\Support\Facades\Route;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/salam', function () {
    return "Selamat Siang Pa Rojul";
});

Route::get('/about', function () {
    return view('about',[
        "nama" => "Shilma Puspita",
        "umur" => 21,
        "email" => "yyy"
    ]);
});

Route::get('/nf', function () {
    return view('nf',[
        "nama_kampus" => "stt nf",
        "lokasi" => "depok",
        "email" => "anwwa"
    ]);
});

Route::get('/periksa', function () {
    return view('periksa');
});


Route::get('/week9', [FormController::class, 'index' ]); 
Route::post('/week9', [FormController::class, 'hasil' ]);

// ini route untuk backend atau admin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::get('/produk/kategoriProduk', [KategoriProdukController::class, 'index']);
    Route::get('/produk/pesanan', [PesananController::class, 'index']);
});


// ini route untuk frontend atau user
Route::prefix('frontend')->group(function () {
    Route::get('/home', [HomeController::class, 'index']);
    Route::get('/about', [AboutController::class, 'index']);
});