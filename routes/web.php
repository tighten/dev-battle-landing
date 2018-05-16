<?php

use App\Vote;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'archives'], function () {
    Route::get('1', function () {
        return view('archives.1')
            ->with('tally', (object) [
                'react' => Vote::tally('react')->count(),
                'vue' => Vote::tally('vue')->count()
            ]);
    });
});

Auth::routes();
