<?php

use App\Http\Controllers\ProfileController;
use App\Models\Siswa;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


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
    $query = $request->input('search');

    if ($query) {
        $results = DB::table('siswas')
            ->where('nama', 'LIKE', '%' . $query . '%')
            ->get();

        return view('welcome', ['results' => $results]);
    }

    return view('welcome');
});

Route::get('/dashboard', function () {
    $Siswa = Siswa::simplePaginate(50);
    return view('create_siswa.list', compact('Siswa'));
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


require __DIR__.'/auth.php';
