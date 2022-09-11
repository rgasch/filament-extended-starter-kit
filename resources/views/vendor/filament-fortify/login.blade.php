 <div class="filament-fortify-login-page">
    <form method="POST" action="{{ route('login') }}" class="space-y-8">

        @if ($registrationEnabled)
            <p class="mt-2 text-sm text-center font-normal">
                {{__('filament-fortify::register.or')}}
                <x-tables::link href="{{route('register')}}" >
                    {{ __('filament-fortify::register.login-link') }}
                </x-table::link>
            </p>
        @endif

        {{ \Filament\Facades\Filament::renderHook('filament-fortify.login.start') }}

        @csrf
        {{ $this->form }}

        <x-filament::button type="submit" class="w-full">
            {{ __('filament::login.buttons.submit.label') }}
        </x-filament::button>

        @if ($resetPasswordEnabled)
            <div class="text-center">
                <x-tables::link href="{{route('password.request')}}" >{{__('filament-fortify::password-reset.buttons.request.label')}}</x-table::link>
            </div>
        @endif

        {{ \Filament\Facades\Filament::renderHook('filament-fortify.login.end') }}
    </form>

    <x-filament::notification-manager />
</div>
