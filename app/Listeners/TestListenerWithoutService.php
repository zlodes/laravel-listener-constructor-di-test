<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Events\TestEventWithoutService;

final class TestListenerWithoutService
{
    public function handle(TestEventWithoutService $event): void
    {
        echo "Hello from listener handle method\n";
    }
}
