<?php

namespace App\Services\Cache;

use App\Constants\Durations;
use Illuminate\Support\Facades\Cache;

class CacheService implements CacheServiceInterface
{
    public function tryGetByKey(string $key): ?array
    {
        return Cache::get($key);
    }

    public function remember(string $key, array $data, int $durationInSeconds = Durations::ONE_DAY_IN_SECONDS): void
    {
        Cache::remember($key, $durationInSeconds, function () use ($data) {
            return $data;
        });
    }
}
