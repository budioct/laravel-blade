<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ErrorTest extends TestCase
{
    /**
     * Error
     * ● Laravel memiliki fitur yang bernama Validation, dimana kita bisa dengan mudah melakukan validasi
     * ● Laravel Validation akan dibahas di materi tersendiri
     * ● Ketika terjadi validation error, kita bisa menangkap error dengan directive @error(field) dan
     *   menangkap message nya dengan variable $message di dalam directive @error nya
     */

    public function testValidationErrors()
    {

        $errors = [
            "name" => "Name is required",
            "password" => "Password is required",
        ];

        $this->withViewErrors($errors)
            ->view("error", [])
            ->assertSeeText("Name is required")
            ->assertSeeText("Password is required");

    }

}
