<?php

namespace Tests\Feature;

use App\Vote;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Tests\TestCase;

class VoteTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function invalid_frameworks_throw_exceptions()
    {
//        $this->post('/api/vote', ['framework' => 'react']);
        $response = $this->get('api/vote/schmeact');

        $this->assertTrue($response->getStatusCode() >= 300);
    }

    /** @test */
    function valid_posts_create_votes()
    {
        $count = Vote::count();
        $this->get('api/vote/react');
        $this->assertEquals(Vote::count(), $count + 1);
    }
}
