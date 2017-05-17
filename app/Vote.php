<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Exception;

class Vote extends Model
{
    protected $guarded = [];

    private static $frameworks = ['react', 'vue'];

    public static function for($framework)
    {
        if (! in_array($framework, self::$frameworks)) {
            throw new Exception('Invalid framework');
        }

        self::createForRequest(request(), ['framework' => $framework]);
    }

    public static function createForRequest($request, $parameters)
    {
        VoteLimiter::check($request);

        return self::create(array_merge([
            'ip_address' => $request->ip(),
        ], $parameters));
    }
}
