<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OptimizingTemplateTest extends TestCase
{

    /**
     * Optimizing Template
     * ● Secara default, Blade Template di compile menjadi kode PHP ketika ketika ada request, Laravel
     *   akan mengecek apakah hasil compile Blade Template ada atau tidak, jika ada maka akan
     *   menggunakannya, jika tidak ada maka akan coba melakukan compile.
     * ● Termasuk Laravel juga akan mendeteksi ketika ada perubahan Blade Template.
     * ● Kompilasi ketika request masuk akan ada efek buruknya, yaitu performanya jadi lambat karena
     *   harus melakukan kompilasi. Oleh karena itu ketika nanti menjalankan aplikasi Laravel di
     *   production, ada baiknya melakukan proses kompilasi seluruh blade template terlebih dahulu, agar
     *   tidak perlu melakukan kompilasi lagi ketika request masuk
     *
     * Compiling Template
     * ● Untuk melakukan compile view atau blade template, kita bisa gunakan perintah :
     *   php artisan view:cache
     * ● Semua hasil compile view akan disimpan di folder storage/framework/views
     * ● Jika kita ingin menghapus seluruh hasil compile, kita bisa gunakan perintah
     *   php artisan view:clear
     */
}
