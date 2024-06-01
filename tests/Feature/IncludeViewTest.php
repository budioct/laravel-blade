<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IncludeViewTest extends TestCase
{
    /**
     * Include
     * ● Saat kita membuat halaman web, kadang ada beberapa bagian yang sama di beberapa halaman web
     * ● Pada kasus ini, ada baiknya kita membuat kode web tersebut di file template yang berbeda
     * ● Selanjutnya kita bisa menggunakan directive @include untuk mengambil file template tersebut
     */

    public function testLayoutInclude(){

        $this->view("include", [])
            ->assertSeeText("Anak Om Mamat")
            ->assertSeeText("Selamat datang Broo!");

        // walaupun view header yang di sisipkan di view include.
        // mengirim data lewat view include @include('header'), nanti view header akan menerima datanya dari param @isset($title)
        $this->view("include", ["title" => "budhi"])
            ->assertSeeText("budhi")
            ->assertSeeText("Selamat datang Broo!");

    }

    /**
     * Include Parameter
     * ● Secara default, semua data yang dikirim ke template utama akan dikirim ke template yang kita @include
     * ● Namun, jika kita ingin menambah parameter tambahan, kita juga bisa menambahnya ketika
     *   menggunakan directive @include(template, data)
     */

    public function testLayoutIncludeDenganData(){

        $this->view("include", [])
            ->assertSeeText("Anak Om Mamat")
            ->assertSeeText("Selamat Data di Website Kami")
            ->assertSeeText("Selamat datang Broo!");

        // walaupun view header yang di sisipkan di view include.
        // mengirim data lewat view include @include('header'), nanti view header akan menerima datanya dari param @isset($title)
        $this->view("include", ["title" => "budhi"])
            ->assertSeeText("budhi")
            ->assertSeeText("Selamat Data di Website Kami")
            ->assertSeeText("Selamat datang Broo!");

    }

}
