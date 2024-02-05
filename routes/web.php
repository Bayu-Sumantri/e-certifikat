<?php

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CetakSertifController;
use App\Models\TemaSertif;
use App\Models\User;

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

Route::match(['get', 'post'], '/', function (Request $request) {
    $Siswa = Siswa::simplePaginate(50);
    $query = $request->input('search');

    if ($query) {
        $results = DB::table('siswas')
            ->where('nama', 'LIKE', '%' . $query . '%')
            ->get();

        return view('welcome', ['results' => $results]);
    }

    return view('welcome', compact('Siswa'));
});

Route::get('/dashboard', function () {
    // Mengambil data Siswa dengan simplePaginate
    $Siswa = Siswa::simplePaginate(50);

    // Menghitung jumlah total data
    $totalSiswa = Siswa::count();
    $totaltema  = TemaSertif::count();
    $totaladmin = User::count();

    return view('admin.index', compact('Siswa', 'totalSiswa', 'totaltema',  'totaladmin'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// resources
Route::resource('Siswa', 'App\Http\Controllers\SiswaController')->middleware(['auth']);
Route::resource('Setting', 'App\Http\Controllers\SettingController')->middleware(['auth']);
Route::resource('Tema', 'App\Http\Controllers\TemaSertifController')->middleware(['auth']);
Route::resource('Cetak', 'App\Http\Controllers\CetakSertifController')->middleware(['auth']);



Route::get('cetakPDF/{id_sertifikat}/{id}', [CetakSertifController::class, "cetakPDF"])->name('cetakPDF');

Route::get('cetakPDF1/{id}', [CetakSertifController::class, "cetakPDF1"])->name('cetakPDF1');
Route::get('cetakPDF2/{id}', [CetakSertifController::class, "cetakPDF2"])->name('cetakPDF2');
Route::get('cetakPDF3/{id}', [CetakSertifController::class, "cetakPDF3"])->name('cetakPDF3');

Route::get('/list_admin', function () {
    $User = User::simplePaginate(50);

    // return $episode;
    return view('admin_list.list', compact('User'));
})->name('list_admin');





require __DIR__ . '/auth.php';
