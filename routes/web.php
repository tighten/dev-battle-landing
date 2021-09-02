<?php

use App\Models\Vote;

Route::get('/', function () {
    return redirect()->route('battle.2');
});

Route::get('2-react-native-vs-vue-nativescript', function () {
    return view('2');
})->name('battle.2');

Route::get('1-react-vs-vue', function () {
    return view('1')
        ->with('tally', (object) [
            'react' => Vote::tally('react')->count(),
            'vue' => Vote::tally('vue')->count(),
        ]);
})->name('battle.1');
