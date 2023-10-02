<?php

namespace App\Services\Cache;

use App\Constants\Durations;

interface CacheServiceInterface
{
    public function tryGetByKey(string $key): ?array;

    public function remember(string $key, array $data, int $durationInSeconds = Durations::ONE_DAY_IN_SECONDS): void;
}
