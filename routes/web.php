<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $todos = DB::table('todos')->get();

    return view('index')->with('todos', $todos);
});

Route::get('/create', function () {
    return view('create');
});

Route::get('/edit', function () {
    return view('edit');
});

Route::get('/store', function (Request $request) {
    // return $request->all();

    DB::table('todos')->insert([
        'date' => $request->date,
        'name' => $request->name,
        'food' => $request->food
    ]);

    return redirect('/');
});

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
