<?php

declare(strict_types=1);

namespace App;

final class TestService
{
    public function __construct()
    {
        echo "Hello from service constructor\n";
    }

    public function foo(): void
    {
        echo "Hello from service method\n";
    }
}
