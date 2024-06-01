<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FormDirectiveTest extends TestCase
{

    /**
     * Form Directive
     * ● Blade Template memiliki beberapa directive untuk membantu kita mempermudah ketika kita
     *   membuat form
     * ● Ada @checked(kondisi) @selected(kondisi) @disabled(kondisi) @readonly(kondisi) dan
     *   @required(kondisi)
     * ● Kondisi pada form directive merupakan boolean, jika true, maka secara otomatis directive tersebut
     *   akan dijalankan
     * ● Penggunaan form directive ini lebih mudah dibanding kita menggunakan directive @if secara
     *   manual
     *
     * Directive    Jika kondisi true
     * @checked     Maka input checkbox akan memiliki attribute checked
     * @selected    Maka input option akan memiliki attribute selected
     * @disabled    Maka input akan memiliki attribute disabled
     * @readonly    Maka input akan memiliki attribute readonly
     * @required    Maka input akan memiliki attributed required
     */

    public function testFormDirective(){

        $this->view("formdirective", [
            "user" => [
                "premium" => true,
                "name" => "budhi",
                "admin" => true
            ]
        ])
            ->assertSee("checked")
            ->assertSee("budhi")
            ->assertDontSee("readonly");

    }

}
