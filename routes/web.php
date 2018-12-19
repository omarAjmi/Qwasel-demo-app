<?php

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
})->name('welcome');

Auth::routes();

Route::get('/workshops', function () {
    return view('workshops.all');
})->name('workshops');


Route::get('/workshops/single', function () {
    $playlist = collect(
        [
            collect([
                'title' => 'episode one',
                'sources' => [
                    "src" => 'http://media.w3.org/2010/05/sintel/trailer.mp4',
                    'type' => 'video/mp4'
                ],
                'poster' => 'http://media.w3.org/2010/05/sintel/poster.png'
            ]),
            collect([
                'title' => 'episode two',
                'sources' => [
                    "src" => 'http://media.w3.org/2010/05/bunny/trailer.mp4',
                    'type' => 'video/mp4'
                ],
                'poster' => 'http://media.w3.org/2010/05/bunny/poster.png'
            ]),
            collect([
                'title' => 'episode three',
                'sources' => [
                    "src" => 'http://vjs.zencdn.net/v/oceans.mp4',
                    'type' => 'video/mp4'
                ],
                'poster' => 'http://vjs.zencdn.net/v/oceans.png'
            ])
        ]);
    return view('workshops.single')->with(['playlist' => $playlist]);
})->name('workshops.single');

Route::get('/trainers', function () {
    return view('trainers');
})->name('trainers');
