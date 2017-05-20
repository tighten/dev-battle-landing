<?php

use App\Vote;
use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
});

Route::post('vote', function () {
    return 'Voting is closed.';

    if (request()->cookie('voted')) {
        return back();
    }

    Vote::for(request('framework'));

    return back()->cookie(
        'voted', 'true', 20160
    );
});
