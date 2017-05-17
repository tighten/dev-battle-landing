<?php

use App\Vote;

Route::get('/', function () {
    return view('welcome')
        ->with('tally', (object) [
            'react' => Vote::tally('react')->count(),
            'vue' => Vote::tally('vue')->count()
        ]);
});

Auth::routes();
