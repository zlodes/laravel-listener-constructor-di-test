<?php

declare(strict_types=1);

namespace App\Listeners;

use App\Events\TestEventWithService;
use App\TestService;

final class TestListenerWithService
{
    public function __construct(
        private readonly TestService $service
    ) {
    }

    public function handle(TestEventWithService $event): void
    {
        echo "Hello from listener handle method\n";

        $this->service->foo();
    }
}
