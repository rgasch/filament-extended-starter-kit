<div class="filament-fortify-request-reset-password-page">
    <form method="POST" action="{{ route('password.email') }}" class="space-y-8">
        @csrf
        {{ $this->form }}

        <x-filament::button type="submit" class="w-full">
            {{ __('filament-fortify::password-reset.buttons.submit.label') }}
        </x-filament::button>

        <x-filament::button color="secondary" class="w-full" type="button" tag="a" href="{{route('login')}}">
            {{ __('filament-fortify::password-reset.buttons.cancel.label') }}
        </x-filament::button>
    </form>

    <x-filament::notification-manager />
</div>
