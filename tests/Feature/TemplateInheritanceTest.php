<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TemplateInheritanceTest extends TestCase
{
   /**
    * Template Inheritance
    * ● Sebelumnya, kita menggunakan @include untuk menggunakan template lain
    * ● Blade mendukung Template Inheritance, caranya terbalik dengan @include
    * ● Dalam @include, parent.blade.php akan melakukan include ke template child nya
    * ● Dalam Template Inheritance, child yang akan melakukan extends ke parent.blade.php template, dan child
    *   yang akan menentukan isi dari parent.blade.php nya
    *
    * Parent Layout
    * ● Di parent.blade.php layout, kita bisa menggunakan @yield(name, default) untuk lokasi template yang harus
    *   dibuat nanti di child layout
    *
    * Child Layout
    * ● Untuk membuat child layout, kita bisa menggunakan directive @extends(parentlayout)
    * ● Di dalam child layout, kita bisa membuat @section(name) yang nanti akan dieksekusi di posisi
    *   @yield(name) di parent.blade.php nya
    */

   public function testParent(){

       $this->view("child", [])
           ->assertSeeText("Nama Aplikasi - Halaman Utama")
           ->assertSeeText("Deskripsi Header")
           ->assertSeeText("Ini adalah halaman utama");

   }

   /**
    * Show Directive
    * ● Pada beberapa kasus, kadang kita ingin membuat default @section(name) di parent layout, namun
    *   tetap bisa di override di child layout
    * ● Kita bisa menggunakan @section(name) di parent layout, namun ditutup dengan @show, bukan
    *   @endsection
    * ● Jika di child layout kita membuat @section(name), secara otomatis @section(name) di parent akan
    *   di override, namun jika kita tetap ingin memanggil @section(name) di parent, kita bisa gunakan
    *   directive @parent di child layout nya
    */

    public function testParent2(){

        $this->view("child", [])
            ->assertSeeText("Nama Aplikasi - Halaman Utama")
            ->assertSeeText("Default Header")
            ->assertSeeText("Deskripsi Header")
            ->assertSeeText("Default Content")
            ->assertSeeText("Ini adalah halaman utama");

    }

}
