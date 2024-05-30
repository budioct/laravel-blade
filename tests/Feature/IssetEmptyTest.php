<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IssetEmptyTest extends TestCase
{

    /**
     * Isset dan Empty
     * ● Blade template juga memiliki directive @isset dan @empty
     * ● @isset digunakan untuk mengecek apakah sebuah variable ada dan tidak bernilai null
     * ● @empty digunakan untuk mengecek apakah sebuah variable merupakan array kosong
     */

    public function testIssetEmpty()
    {
        $this->view("issetempty", [])
            ->assertDontSeeText("Hello");

        $this->view("issetempty", ["name" => "budhi"])
            ->assertSeeText("Hello, my name is budhi")
            ->assertSeeText("I don't have hobbies.", false); // karna method assertSeeText() tanda kutip di encode, kita perlu non aktifkan escape dengan assertSeeText(value, false)

        $this->view("issetempty", ["name" => "budhi", "hobbies" => ["football"]])
            ->assertSeeText("Hello, my name is budhi")
            ->assertDontSeeText("I don't have hobbies.", false);

    }


}
