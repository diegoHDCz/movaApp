<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Contact;

class ContactTest extends TestCase
{
    /** @test */
    public function check_if_columns_is_correct()
    {
        $user = new Contact;

        $expected = [
            'name',
            'email',
            'message',
            'phone'
        ];

        $arrayCompared = array_diff($expected, $user->getFillable());

        $this->assertEquals(0, count($arrayCompared));
    }
}
