# FilamentExtendedStartedKit

FilamentExtendedStarterKit is a [Filament](https://filamentphp.com/) distribution with lots 
of basic utilities and goodies pre-installed.

## New Installation

```bash
composer create-project --prefer-dist Rgasch/filament-extended-starter-kit FilamentStarterKit
```

Install dependencies

```bash
composer update
```

Run migrations

```bash
php artisan migrate
```

Create the first/admin user:

```
php artisan make:filament-user
```

Init FilamentShield

```
php artisan shield:install
```

For the FilamentShield install, answer "yes" to all questions it asks.

In theory, that should be it. You can now go to /admin on your site and you should see the filament 
login screen. Log in with the user you created in step #4 above. 


## Installed Plugins

- [Addons](https://filamentphp.com/plugins/bezhansalleh-addons)
- [Breezy](https://filamentphp.com/plugins/breezy)
- [Components](https://filamentphp.com/plugins/ralphjsmit-components)
- [EmailLog](https://filamentphp.com/plugins/email-log)
- [EnvironmentIndicator](https://filamentphp.com/plugins/environment-indicator)
- [FeatureFlags](https://filamentphp.com/plugins/feature-flags)
- [Flatpickr](https://filamentphp.com/plugins/flatpickr)
- [Flowframe](https://docs.flowfra.me/docs/laravel-trend)
- [FormBuilder](https://filamentphp.com/docs/2.x/forms/installation)
- [Fortify](https://filamentphp.com/plugins/fortify)
- [FullCalendar](https://filamentphp.com/plugins/filament-fullcalendar)
- [Gravatar](https://filamentphp.com/plugins/gravatar)
- [Google reCaptcha Field](https://filamentphp.com/plugins/google-recaptcha-field)
- [LanguageSwitch](https://filamentphp.com/plugins/language-switch)
- [LogManager](https://filamentphp.com/plugins/log-manager)
- [Menus](https://filamentphp.com/plugins/menus)
- [Notifications](https://filamentphp.com/docs/2.x/notifications/installation)
- [Profile](https://filamentphp.com/plugins/profile)
- [RatingField](https://filamentphp.com/plugins/rating-field)
- [Sitemap](https://filamentphp.com/plugins/sitemap)
- [SpatieHealth](https://filamentphp.com/plugins/spatie-health)
- [SpatieMarkdownEditor](https://filamentphp.com/plugins/spatie-markdown-editor)
- [SpatieSettings](https://filamentphp.com/plugins/spatie-settings)
- [SpatieTags](https://filamentphp.com/plugins/spatie-tags)
- [StaticAssets](https://filamentphp.com/plugins/static-asset-handler)
- [StaticChartWidgets](https://filamentphp.com/plugins/static-chart-widgets)
- [TableBuilder](https://filamentphp.com/docs/tables)
- [TallInteractive](https://filamentphp.com/plugins/tall-interactive)
- [ThemeColorSwitcher](https://filamentphp.com/plugins/theme-color-switcher)
- [Themes](https://filamentphp.com/plugins/3x1io-themes)
- [User](https://filamentphp.com/plugins/user-manager)

All relevant migrations, views and config files have been published to the main Laravel 
directory tree to the locations where you would expect them. If a package (such as, for 
exmaple, the Spatie packages) is based upon another package, the base package 
migrations and config files have been published as well. 

Some of the above packages are self-explanatory (ie: you'll see them in the admin GUI)
while others are development components which require some knowledge of the component 
for it to be used. Take a look a the component pages, some have docs on the component 
page, others on their github repo (linked from the component page). 

## Admin Menu

In order to achieve better menu item grouping, the admin menu is generated by the 
App\Providers\FilamentServiceProvider class. You can disable the use of this 
functionality (which will enable the default Filament menu generation) by 
setting the *useCustomMenuGenerator* config option to *false* in the 
/config/filament-extended-starter-kit.php config file.

## HealthCheck

The health checks are also defined and configued in the 
App\Providers\FilamentServiceProvider class. The only variable which might 
require tuning is the "nCpuCores" variable which is used to configure 
CPU load and needs to know the number of CPU cores on you system in order 
to make this calculation correct. 

## Alternative 

If you want a tweakable install script to produce a Filament instance for you, 
check out [laravel-installer-script](https://github.com/rgasch/laravel-installer-script)
