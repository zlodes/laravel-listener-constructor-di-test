<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Events\TestEventWithoutService;
use App\Events\TestEventWithService;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Http\JsonResponse;

final class TestController
{
    public function foo(Dispatcher $eventsDispatcher): JsonResponse
    {
        $eventsDispatcher->dispatch(
            new TestEventWithService()
        );

        return new JsonResponse();
    }

    public function bar(Dispatcher $eventsDispatcher): JsonResponse
    {
        $eventsDispatcher->dispatch(
            new TestEventWithoutService()
        );

        return new JsonResponse();
    }
}
