<?php

namespace App\Models;

use App\Exceptions\InvalidFrameworkException;
use App\VoteLimiter;
use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $guarded = [];

    private static $frameworks = ['react', 'vue'];

    /* Retrieve */
    public function scopeTally($query, $framework)
    {
        return $query->where('framework', $framework);
    }

    /* Add */
    public static function for($framework)
    {
        if (! in_array($framework, self::$frameworks)) {
            throw new InvalidFrameworkException('Invalid framework');
        }

        self::forRequest(request(), ['framework' => $framework]);
    }

    public static function forRequest($request, $parameters)
    {
        VoteLimiter::check($request);

        return self::create(array_merge([
            'ip_address' => $request->ip(),
        ], $parameters));
    }
}
