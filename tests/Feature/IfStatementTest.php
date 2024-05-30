<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IfStatementTest extends TestCase
{

    /**
     * If Statement
     * ● Blade Template mendukung percabangan if menggunakan perintah/directive @if, @elseif, @else
     *   dan @endif
     * ● Perintah ini hampir mirip dengan kode PHP
     */

    public function testIfStatement(){

        $this->view("if",
            ["hobbies" => []
            ])->assertSeeText("I don't have any hobbies!", false);

        $this->view("if",
            ["hobbies" => ["football"]
            ])->assertSeeText("I have one hobby!");

        $this->view("if",
            ["hobbies" => ["football", "coding"]
            ])->assertSeeText("I have multiple hobbies!");

    }
}
