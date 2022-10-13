<?php

use RyanChandler\LaravelFeatureFlags\Enums\MiddlewareBehaviour;
use RyanChandler\LaravelFeatureFlags\Models\FeatureFlag;

return [

    'model' => FeatureFlag::class,

    'middleware' => [
        'behaviour' => MiddlewareBehaviour::Abort,
        'code' => 403,
        'redirect' => null,
    ],

];
