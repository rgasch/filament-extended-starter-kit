<div class="filament-fortify-reset-password-page">
    <form method="POST" action="{{ route('password.update') }}" class="space-y-8">

        @csrf
        {{ $this->form }}

        <x-filament::button type="submit" class="w-full">
            {{ __('filament-fortify::password-reset.buttons.reset.label') }}
        </x-filament::button>
    </form>

    <x-filament::notification-manager />
</div>
