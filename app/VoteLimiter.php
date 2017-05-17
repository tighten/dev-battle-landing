<?php

namespace App;

use Carbon\Carbon;
use Exception;

class VoteLimiter
{
    public static function check($request)
    {
        self::checkCache($request);
        self::checkDb($request);
    }

    private static function checkCache($request)
    {
        if (cache(self::cacheKey($request))) {
            throw new Exception('Too many votes for this IP address.');
        }
    }

    private static function checkDb($request)
    {
        if (Vote::where('ip_address', $request->ip())->count() >= 5) {
            cache([self::cacheKey($request) => true], Carbon::now()->addDays(5));

            throw new Exception('Too many votes for this IP address.');
        }
    }

    private static function cacheKey($request)
    {
        return 'battle-1-vote-limit-' . md5($request->ip());
    }
}
