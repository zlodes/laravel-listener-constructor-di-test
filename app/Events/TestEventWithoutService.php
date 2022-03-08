<?php

declare(strict_types=1);

namespace App\Events;

final class TestEventWithoutService
{
    public function __construct()
    {
        echo "Hello from event w/o service constructor\n";
    }
}
