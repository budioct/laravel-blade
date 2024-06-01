<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CSRFTest extends TestCase
{

    /**
     * CSRF
     * ● Materi CSRF (Cross Site Request Forgery) sudah kita bahas di kelas Laravel Dasar
     * ● Secara default, saat kita mengirim HTTP Post ke aplikasi Laravel kita, Laravel akan mengecek token
     *   CSRF, untuk memastikan bahwa request tersebut benar berasal dari web kita
     * ● Pengecekan ini dilakukan oleh VerifyCsrfToken Middleware
     * ● Blade Template memiliki directive @csrf yang bisa digunakan untuk mempermudah kita ketika
     *   ingin menambahkan token CSRF di form kita
     */

    public function testCSRFToken(){

        $this->view("csrf", [])
            ->assertSee("_token")
            ->assertSee("Send");

    }

}
