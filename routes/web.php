<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

// All listings
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

// Single listing
Route::get('/listings/{id}', function($id) {
    return view('listing', [
        'listing' => Listing::find($id)
    ]);
});

// Route::get('/hello', function () {
//     return response('<h1>Hello Dud</h1>', 200)
//         -> header('Content-Type', 'text/plain');
// });

// Route::get('/posts/{id}', function ($id) {
//     // ddd($id);
//     return  response('post ' . $id);
// }) -> where('id', '[0-9]+');

// Route::get('/search' , function(Request $request) {
//    return  $request->name . ' ' . $request->city;
// });