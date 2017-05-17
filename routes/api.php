<?php

use App\Vote;
use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
});

Route::post('vote', function () {
    Vote::for(request('framework'));
    return back();
});
