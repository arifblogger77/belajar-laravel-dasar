<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\App;
use Tests\TestCase;

class AppEnvirontmentTest extends TestCase
{
    public function testAppEnv(): void
    {
        if (App::environment(['testing', 'prod', 'dev'])) {
            $this->assertTrue(true);
        }
    }
}
