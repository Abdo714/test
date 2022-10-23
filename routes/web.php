<?php

use App\Models\News;
use App\Models\Logo;
use Illuminate\Support\Facades\Route;
//use App\News;

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
    return view('welcome');
});

Route::get('view_addnews', function () {
    $x=\App\Models\Logo::all();
    return view('addnews',["x"=>$x]);
});

Route::get('view_news', function () {
    return view('viewnews');
});

Route::get('search', function () {
    $date=request("date");
    $x=\App\Models\News::where("date",$date)->get();
//    $y=[];
//    $i=0;
//    foreach ($x  as $action) {
//        $y[$i] = \App\Models\Logo::where("newsname", $action->newsname)->get();
//        $i++;
//    }
    return view('viewnews',['x'=>$x ]);
});


Route::get('add_logo', function () {
    return view('addlogo');
});


Route::post('addnews', '\App\Http\Controllers\NewsController@addnews');
Route::post('addlogo', '\App\Http\Controllers\NewsController@addlogo');
Route::get('delete', '\App\Http\Controllers\NewsController@delete');
Route::get('view_report', '\App\Http\Controllers\NewsController@view_report');


