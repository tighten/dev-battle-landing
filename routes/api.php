<?php

use App\Vote;
use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
});

Route::get('vote/{framework}', function ($framework) {
    Vote::for($framework);
    return back();
});
