<?php

namespace Tests\Feature;

use App\Concert;
use Carbon\Carbon;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewConcertListingTest extends TestCase
{
    /** @test */
    function user_can_view_a_concert_listing()

    {
        $concert = Concert::create([
                                       'title'                  => 'The Sonics',
                                       'subtitle'               => 'with The Wailers and The Jimi Hendrix Experience',
                                       'date'                   => Carbon::parse('November 13, 2019 9:00pm'),
                                       'ticket_price'           => 3250,
                                       'venue'                  => 'The Funhouse',
                                       'venue_address'          => '123 Stewert St',
                                       'city'                   => 'Seattle',
                                       'state'                  => 'WA',
                                       'zip'                    => '98122',
                                       'additional_information' => 'For Tickets, call (666) 666-6666.',


                                   ]);

        $this->visit('/concerts/'.$concert->id);

        $this->see('The Sonics');
        $this->see('with The Wailers and the Jimi Hendrix Experience');
        $this->see('November 13, 2019');
        $this->see('9:00pm');
        $this->see('3250');
        $this->see('The Funhouse');
        $this->see('123 Stewert St');
        $this->see('Seattle, WA 98122');
        $this->see('For Tickets, call (666) 666-6666');

    }
}
