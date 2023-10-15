<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    public function testConfig(): void
    {
        $firstname = config('contoh.author.first');
        $lastname = config('contoh.author.last');
        $email = config('contoh.email');
        $web = config('contoh.web');

        $this->assertEquals('Eko', $firstname);
        $this->assertEquals('Khannedy', $lastname);
        $this->assertEquals('echo.khannedy@gmail.com', $email);
        $this->assertEquals('https://www.programmerzamannow.com', $web);
    }
}
