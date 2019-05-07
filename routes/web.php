<?php
use App\Codetype;

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
    return view('index');
});


Route::name('barcode.')->prefix('barcode')->group(function () {
    Route::get('generator','BarcodegeneratorController@barcode')->name('generator');
    Route::post('generator','BarcodegeneratorController@barcode')->name('generator');
});



Route::get('/test', function () {
    // return view('index');
    // Storage::disk('local')->put('file2.txt', 'Contents');
    // $contents = Storage::get('file2.txt');
    // echo $contents;
    // $contents = Storage::get('file.jpg');
    $contents = Storage::get('file.jpg');
    // echo DNS1D::getBarcodePNGPath("$barcode_val", "$bcode_type",number_format($width, 2),number_format($height, 2),[0,0,0],true);

});
