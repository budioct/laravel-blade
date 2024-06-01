<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SwitchTest extends TestCase
{
    /**
     * Switch Statement
     * ● Selain menggunakan @if, percabangan di Blade Template juga bisa menggunakan directive @switch
     * ● Seperti di kode PHP, dalam Blade Template, kita perlu kombinasikan dengan @case dan juga
     *  @break dan @default
     */

    public function testSwitch(){

        $this->view("switch", ["value" => "A"])
            ->assertSeeText("Nilai: A Memuaskan");

        $this->view("switch", ["value" => "B"])
            ->assertSeeText("Nilai: B Bagus");

        $this->view("switch", ["value" => "C"])
            ->assertSeeText("Nilai: C Cukup");

        $this->view("switch", ["value" => ""])
            ->assertSeeText("Tidak Lulus");

    }
}
