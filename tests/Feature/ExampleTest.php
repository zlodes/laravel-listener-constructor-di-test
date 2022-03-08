<?php

namespace Tests\Feature;

use App\TestService;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testEventListenerWithService(): void
    {
        $this->get('/foo')
            ->assertOk();

        self::assertTrue(
            $this->app->resolved(TestService::class)
        );
    }

    public function testEventListenerWithoutService(): void
    {
        $this->get('/bar')
            ->assertOk();

        self::assertFalse(
            $this->app->resolved(TestService::class)
        );
    }
}
