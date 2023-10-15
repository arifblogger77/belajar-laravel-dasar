<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Env;
use Tests\TestCase;

class EnvirontmentTest extends TestCase
{
    public function testGetEnv()
    {
        $youtube = env('YOUTUBE');

        $this->assertEquals('Programmer Zaman Now', $youtube);
    }

    public function testDefaultEnv()
    {
        $author = Env::get('AUTHOR', 'Eko');

        $this->assertEquals('Eko', $author);
    }
}
