<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('section', 'SectionController');

Route::prefix('admin')->group(function () {

    Route::get('/', 'AdminController@index');

    Route::get('/test', 'AdminController@test');

	Route::get('/section/{section}', 'SectionController@showUI');

	Route::get('/list', function() {
	    $dir = '/';
	    $recursive = false; // Get subdirectories also?
	    $contents = collect(Storage::cloud()->listContents($dir, $recursive));

	    //return $contents->where('type', '=', 'dir'); // directories
	    return $contents->where('type', '=', 'file'); // files
	});

});

	