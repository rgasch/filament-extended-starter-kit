<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Spatie\CpuLoadHealthCheck\CpuLoadCheck;
use Spatie\Health\Checks\Checks\DebugModeCheck;
use Spatie\Health\Checks\Checks\EnvironmentCheck;
use Spatie\Health\Checks\Checks\OptimizedAppCheck;
use Spatie\Health\Checks\Checks\RedisCheck;
use Spatie\Health\Facades\Health;
use Spatie\Health\Checks\Checks\CacheCheck;
use Spatie\Health\Checks\Checks\DatabaseCheck;
use Spatie\Health\Checks\Checks\UsedDiskSpaceCheck;


class FilamentServiceProvider extends ServiceProvider
{
    // 4 CPU cores is probably/hopefully a reasonable default for modern machines -> could be made configurable
    // For a good explanation see https://scoutapm.com/blog/understanding-load-averages
    private static int $nCpuCores = 4;


    /**
     * Define your Filament services
     *
     * @return void
     */
    public function boot()
    {
        $this->configureHealthCheck();
    }


    private function configureHealthCheck()
    {
        $checks = [
            DatabaseCheck::new(),
            CacheCheck::new(),
            DebugModeCheck::new(),
            EnvironmentCheck::new(),
            OptimizedAppCheck::new(),
            UsedDiskSpaceCheck::new(),
        ];

        // Requires Redis PHP driver to be installed
        if (class_exists('Redis')) {
            $checks[] = RedisCheck::new();
        }

        $checks[] = CpuLoadCheck::new()
            ->failWhenLoadIsHigherInTheLastMinute(self::$nCpuCores * 2.0)
            ->failWhenLoadIsHigherInTheLast5Minutes(self::$nCpuCores * 1.5)
            ->failWhenLoadIsHigherInTheLast15Minutes(self::$nCpuCores * 1.0);

        Health::checks($checks);
    }
}
