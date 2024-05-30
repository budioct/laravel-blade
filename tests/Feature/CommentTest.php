<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommentTest extends TestCase
{

    /**
     * Comment
     * ● Blade Template juga mendukung komentar, dengan menggunakan {{-- isi komentar --}}
     * ● Isi komentar secara otomatis tidak akan dieksekusi, dan tidak akan ditampilkan juga di hasil HTML nya
     */

    public function testComment(){

        $this->view("comment", [])
            ->assertSeeText("Comment")
            ->assertDontSeeText("ini komentar di view blade");

    }

}
