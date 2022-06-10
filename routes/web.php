<?php

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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

Route::get('/', [TodoController::class, 'index']);

Route::get('/create', [TodoController::class, 'create']);

Route::get('/edit/{todo}', [TodoController::class, 'edit']);

Route::get('/update/{todo}', [TodoController::class, 'update']);

Route::get('/delete/{todo}', [TodoController::class, 'delete']);

Route::get('/store', [TodoController::class, 'store']);


Route::get('/status-update', [TodoController::class, 'statusUpdate']);


//home work section

Route::get('/homework', function () {
    $tudus = DB::table('insert')->get();

    return view('homework')->with('tudus', $tudus);
});

Route::get('/insert', function () {
    return view('insert');
});


Route::get('/save', function (Request $request) {
    //return $request->all();

    DB::table('insert')->insert([
        'email' => $request->email,
        'password' => $request->password,
        'website' => $request->website
    ]);

    return redirect('homework');
});
