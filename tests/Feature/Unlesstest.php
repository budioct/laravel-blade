<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class Unlesstest extends TestCase
{
    /**
     * Unless Statement
     * ● Blade Template mendukung directive @unless dan @endunless
     * ● Directive ini digunakan kebalikan dari if statement, dimana jika nilainya false, maka isi body akan
     *   eksekusi
     */

    public function testUnless()
    {
        $this->view("unless", ["isAdmin" => true])
            ->assertDontSeeText("You are not Admin");

        $this->view("unless", ["isAdmin" => false])
            ->assertSeeText("You are not Admin");
    }

}
