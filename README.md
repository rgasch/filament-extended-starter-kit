# FilamentExtendedStartedKit

FilamentExtendedStarterKit is a [Filament](https://filamentphp.com/) distribution with lots 
of basic utilities and goodies pre-installed.

## New Installation

```bash
composer create-project --prefer-dist rgasch/filament-extended-starter-kit FilamentStarterKit
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
- [Flatpickr](https://filamentphp.com/plugins/flatpickr)
- [LanguageSwitch](https://filamentphp.com/plugins/language-switch)
- [Menus](https://filamentphp.com/plugins/menus)
- [User](https://filamentphp.com/plugins/user-manager)
- [FormBuilder](https://filamentphp.com/docs/2.x/forms/installation)
- [Fortify](https://filamentphp.com/plugins/fortify)
- [FullCalendar](https://filamentphp.com/plugins/filament-fullcalendar)
- [LogManager](https://filamentphp.com/plugins/log-manager)
- [Notifications](https://filamentphp.com/docs/2.x/notifications/installation)
- [Profile](https://filamentphp.com/plugins/profile)
- [RatingField](https://filamentphp.com/plugins/rating-field)
- [Sitemap](https://filamentphp.com/plugins/sitemap)
- [SpatieHealth](https://filamentphp.com/plugins/spatie-health)
- [SpatieSettings](https://filamentphp.com/plugins/spatie-settings)
- [SpatieTags](https://filamentphp.com/plugins/spatie-tags)
- [StaticChartWidgets](https://filamentphp.com/plugins/static-chart-widgets)
- [TableBuilder](https://filamentphp.com/docs/tables)
- [Themes](https://filamentphp.com/plugins/3x1io-themes)
- [User](https://filamentphp.com/plugins/user-manager)

All relevant migrations, assets and config files have been published to the main Laravel 
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
