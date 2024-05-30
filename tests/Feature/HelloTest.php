<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HelloTest extends TestCase
{

    /**
     * Blade
     * ● Membuat response dari Route itu sangat mudah, tapi jika misal kita ingin membuat response yang
     *   kompleks seperti HTML, maka akan sulit jika kita lakukan di Route
     * ● Blade adalah fitur di Laravel yang digunakan untuk mempermudah dalam pembuatan tampilan
     *   halaman web HTML
     * ● Dengan Blade template, kita bisa membedakan lokasi logic aplikasi, dengan kode tampilan
     * ● Semua template disimpan di folder resources/views
     *
     * Blade Variable
     * ● Salah satu keuntungan menggunakan template dibanding kode PHP langsung adalah, kita bisa
     *   memaksa programmer untuk memisahkan logic kode program dengan tampilan (di template)
     * ● Di Blade, walaupun kita bisa membuat kode PHP, tapi tidak disarankan menggunakan itu
     * ● Cara yang direkomendasikan adalah, kita hanya membuat variable di template blade, lalu mengirim
     *   variable tersebut dari luar ketika akan menampilkan template nya
     * ● Untuk membuat menampilkan variable di blade template, kita bisa gunakan {{ $nama }}, dinama
     *   nanti variable $nama bisa diambil secara otomatis dari data yang kita kirim ketika menampilkan
     *   view blade nya
     *
     * Rendering View
     * ● Setelah kita membuat View, selanjutnya untuk me-render (menampilkan) View tersebut di dalam
     *   Router, kita bisa menggunakan function Route::view(uri, template, array) atau menggunakan
     *   view(template, array) di dalam closure function Route / Controller
     * ● Dimana template adalah nama template, tanpa menggunakan blade.php, dan array berisikan data
     *   variable yang ingin kita gunakan
     */

    public function testHello(){

        $this->get("/hello")
            ->assertSeeText("Foo Bar");
    }

    /**
     * Nested View Directory
     * ● View juga bisa disimpan di dalam directory lagi di dalam directory views
     * ● Hal ini baik ketika kita sudah banyak membuat views, dan ingin melakukan management file views
     * ● Namun ketika kita ingin mengambil views nya, kita perlu ganti menjadi titik, tidak menggunakan / (slash)
     * ● Misal jika kita buat views di folder admin/profile.blade.php, maka untuk mengaksesnya kita
     *   gunakan admin.profile
     */

    public function testHelloWorld(){

        $this->get("/world")
            ->assertSeeText("Foo Bar Guys");
    }

    /**
     * Test View Tanpa Routing
     * ● Kadang kita juga ingin membuat View tanpa routing, misal untuk mengirim email misalnya
     * ● Pada kasus ini, kita bisa melakukan test view secara langsung, tanpa harus membuat Route terlebih
     *   dahulu
     */

    public function testLangsungKeViewWithoutRouting(){

        $this->view("hello.world", [
            "name" => "Foo Bar"
        ])->assertSeeText("Foo Bar");

        // view(directory.name_file_view, array("key"=>"value")) // nested view

    }

}
