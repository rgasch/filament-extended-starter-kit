<?php

namespace App\Providers;

use App\Filament\Pages\HomePageSettings;
use App\Filament\Resources\CategoryResource;
use App\Filament\Resources\PageResource;
use Filament\Facades\Filament;
use Filament\Navigation\NavigationBuilder;
use Filament\Navigation\NavigationGroup;
use Filament\Navigation\NavigationItem;
use Filament\Pages\Dashboard;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use ShuvroRoy\FilamentSpatieLaravelHealth\Pages\HealthCheckResults;
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
        if (config('filament-extended-starter-kit.useCustomMenuGenerator')) {
            $this->configureAdminMenu();
        }
        $this->configureHealthCheck();
    }


    private function configureAdminMenu()
    {
        Filament::navigation(function (NavigationBuilder $builder): NavigationBuilder {
            return $builder->item(
                NavigationItem::make('Dashboard')
                    ->url(route('filament.pages.dashboard'))
                    ->label('Dashboard')
                    ->icon('heroicon-o-home'))
                ->groups([
                    NavigationGroup::make('Authentication')
                        ->items([
                            NavigationItem::make('Users')
                                ->url('/admin/users')
                                ->icon('heroicon-o-lock-closed')
                                ->sort(1),
                            NavigationItem::make('Roles')
                                ->url('/admin/shield/roles')
                                ->icon('heroicon-o-shield-check')
                                ->sort(2),
                            NavigationItem::make('Two-Factor Auth')
                                ->url('/admin/two-factor')
                                ->icon('heroicon-o-key')
                                ->sort(2),

                        ]),
                    NavigationGroup::make('System')
                        ->items([
                            NavigationItem::make('Application Health')
                                ->url(route('filament.pages.health-check-results'))
                                ->icon('heroicon-o-heart')
                                ->sort(1),
                            NavigationItem::make('Feature Flags')
                                ->url('/admin/feature-flags')
                                ->icon('heroicon-o-flag')
                                ->sort(2),
                            NavigationItem::make('Log Files')
                                ->url(route('filament.pages.logs'))
                                ->icon(config('filament-log-manager.navigation_icon'))
                                ->sort(3),
                            NavigationItem::make('Menus')
                                //->url(route('filament.pages.menus'))
                                ->url('/admin/menus')
                                ->icon('heroicon-o-menu')
                                ->sort(4),
                            NavigationItem::make('Sent Emails')
                                ->url('/admin/emails')
                                ->icon('heroicon-o-mail')
                                ->sort(5),
                            NavigationItem::make('Site Settings')
                                ->url('/admin/site-settings')
                                ->icon('heroicon-o-cog')
                                ->sort(6),
                        ]),
                ]);
        });
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
