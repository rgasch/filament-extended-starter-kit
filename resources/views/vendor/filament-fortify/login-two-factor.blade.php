<div class="filament-fortify-login-two-factor-page">
    <form method="POST" action="{{ route('two-factor.login') }}" class="space-y-8">

        @csrf
        {{ $this->form }}

        <x-filament::button type="submit" class="w-full">
            {{ __('filament-fortify::two-factor.login.buttons.submit.label') }}
        </x-filament::button>

        <x-filament::button color="secondary" class="w-full" type="button" tag="a" outlined href="{{route('login')}}">
            {{ __('filament-fortify::two-factor.login.buttons.cancel.label') }}
        </x-filament::button>
    </form>

    <x-filament::notification-manager />
</div>
