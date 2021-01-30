<?php

namespace Tests\Feature;

use App\Vote;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class VoteTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    function invalid_frameworks_throw_exceptions()
    {
        $count = Vote::count();
        $response = $this->post('/api/vote', ['framework' => 'iojasdoifrreact']);

        $this->assertEquals(422, $response->getStatusCode());
        $this->assertEquals(Vote::count(), $count);
    }

    /** @test */
    function valid_posts_create_votes()
    {
        $count = Vote::count();
        $this->post('/api/vote', ['framework' => 'react']);
        $this->assertEquals(Vote::count(), $count + 1);
    }

    /** @test */
    function repeat_votes_limit_to_five_per_ip()
    {
        $count = Vote::count();

        for ($i = 1; $i <= 15; $i++) {
            $this->post('/api/vote', ['framework' => 'vue']);
        }

        $this->assertEquals(Vote::count(), $count + 5);
    }
}
