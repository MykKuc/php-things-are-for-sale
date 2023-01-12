<?php

use Illuminate\Support\Facades\Route;

use app\Http\Controllers\PostController;
use App\Models\Advertisement;
use Illuminate\Support\Facades\Request;

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

Route::view('/','index');

Route::get('/newadvertisement', function() {
    return view('newadvertisement');
});

Route::post('/newadvertisement', function() {
    $advertisement = new Advertisement;
    $advertisement->name = request('name');
    $advertisement->description = request('description');
    $advertisement->save();
});