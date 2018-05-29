<?php

use App\Vote;

Route::get('/', function () {
    return redirect('2');
});

Route::get('2', function () {
    return view('2');
});

Route::get('1', function () {
    return view('1')
        ->with('tally', (object) [
            'react' => Vote::tally('react')->count(),
            'vue' => Vote::tally('vue')->count()
        ]);
});
