<?php

namespace Tests\Unit;

use Tests\TestCase;

class ProjectTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function testExample()
    {
        $response = $this->get('/');
        $this->assertEquals(200, $response->status());
    }
}
