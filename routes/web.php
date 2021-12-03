<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ufest;

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

Route::get('/our-team', function(){
  return view('ourteam');
});

// Route::get('/U-Care', function(){
//  return view('ucare');
// });

// Route::get('/U-Care/Form',function(){
//  return view('close2');
// });

// Route::post('/U-Care/Form/Tambah',[Ufest::class,'store']);

// Route::get('/U-Care/Form/Selesai',[Ufest::class,'final']);

// Route::get('/ulympic',function(){
//   return view('ulympic');
// });

Route::get('/unify',function(){
  return view('unify');
});

// Bracket

// Route::get('/ulympic/bracket/ML',function(){
//   return view('bracketml');
// });
// Route::get('/ulympic/bracket/Valorant',function(){
//   return view('bracketvalorant');
// });
// Route::get('/ulympic/bracket/PUBGM',function(){
//   return view('pubgsemi');
// });


// cache clear

Route::get('/clear', function() {
	Artisan::call('optimize:clear');
	Artisan::call('package:discover');
	Artisan::call('cache:clear');
	Artisan::call('config:cache');
	Artisan::call('view:clear');
 	Artisan::call('view:cache');
	Artisan::call('route:clear');
  Artisan::call('route:cache');
	Artisan::call('event:clear');
  Artisan::call('event:cache');

	return "Cleared!";
});
