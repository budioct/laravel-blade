<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ForeachLoopTest extends TestCase
{
    /**
     * Foreach Loop
     * ● Kadang ada kalanya kita ingin melakukan iterasi terhadap semua data yang terdapat di array
     * ● Di Blade Template, kita bisa lebih mudah menggunakan directive @foreach dibandingkan
     *   menggunakan @for
     */

    public function testForeachLooping()
    {
        $this->view("foreach", ["hobbies" =>
            ["coding", "eating", "running"]
        ])
            ->assertSeeText("coding")
            ->assertSeeText("eating")
            ->assertSeeText("running");
    }
}
