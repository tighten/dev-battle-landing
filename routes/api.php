<?php

use App\Exceptions\InvalidFrameworkException;
use App\Vote;
use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
});

Route::post('vote', function () {
    if (app()->environment() !== 'testing') {
        return 'Voting is closed.';
    }

    if (request()->cookie('voted')) {
        return back();
    }

    try {
        Vote::for(request('framework'));
    } catch (InvalidFrameworkException $e) {
        abort(422, $e->getMessage());
    }

    return back()->cookie(
        'voted', 'true', 20160
    );
});
