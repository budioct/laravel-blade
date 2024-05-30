<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class EnvironmentTest extends TestCase
{
    /**
     * Env
     * ● Laravel mendukung multi environment, kita bisa menggunakan Facade Env untuk mendapatkan
     *   environment yang digunakan saat ini
     * ● Dalam Blade Template, kita bisa menggunakan directive @env(name) atau @env([name1, name2])
     *   untuk mengecek apakah sedang menggunakan environment tersebut atau tidak
     */

    public function testEnvironment()
    {
        $this->view("env", [])
            ->assertSeeText("This is test environment");
    }

}
