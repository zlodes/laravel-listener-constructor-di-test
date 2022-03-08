<?php

declare(strict_types=1);

namespace App\Events;

final class TestEventWithService
{
    public function __construct()
    {
        echo "Hello from event with service constructor\n";
    }
}
