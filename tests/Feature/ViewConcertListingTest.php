<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewConcertListingTest extends TestCase
{
    /** @test */
    function user_can_view_a_concert_listing()

    {
        $concert = Concert::create([
            'title' => 'The Sonics',
            'subtitle' => 'with',
            'date' => Carbon::parse('November 13, 2019 9:00pm'),
            



        ]);
    }
}
