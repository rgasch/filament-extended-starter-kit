<?php
// config for WyChoong/FilamentFortify
use WyChoong\FilamentFortify\Http\Livewire\Auth;
use WyChoong\FilamentFortify\Pages;

return [
    'register-page' => true,

    'auth' => [
        'login' =>  Auth\Login::class,
        'register' => Auth\Register::class,
        'password-reset' => Auth\PasswordReset::class,
        'request-password-reset' => Auth\RequestPasswordReset::class,
        'password-confirmation' => Auth\PasswordConfirmation::class,
        'login-two-factor' => Auth\LoginTwoFactor::class,
    ],

    'pages' => [
        'two-factor' => Pages\TwoFactor::class,
    ],

    'view' => [
        'verify-email' => 'filament-fortify::verify-email',
    ],

    'navigation-icon' => 'heroicon-o-key',
];
