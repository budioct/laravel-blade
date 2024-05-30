<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class DisableRenderingTest extends TestCase
{

    /**
     * Disabled Blade
     * ● Blade menggunakan tanda kurung kurawal untuk menampilkan variable
     * ● Saat kita membuat web, kadang kita ingin menampilkan tulisan seperti perintah-perintah yang ada
     *   di Blade
     * ● Hal ini akan menimbulkan perintah-perintah tersebut akan dieksekusi oleh Blade
     *
     * Tanda @
     * ● Pada bagian yang kita ingin Blade Template tidak dieksekusi, kita bisa menambahkan @ diawal
     *   perintah Blade Template nya
     * ● Misalnya @{{ $eko }}, maka akan ditampilkan apa adanya tanpa @
     * ● Misalnya @@if, maka hasilnya akan ditampilkan apa adanya tanpa @ pertama
     * ● Namun jika misal terdapat banyak baris yang kita harapkan tidak menggunakan Blade Template,
     *   kita bisa menggunakan perintah @verbatim dan diakhiri dengan @endverbatim
     */

    public function testDisable()
    {
        $this->view("disabled", [
            "name" => "budhi"
        ])
            ->assertDontSeeText("budhi")
            ->assertSeeText('Hello {{ $name }}');
    }

}
