<x-filament::layouts.card title="{{__('filament-fortify::verify-email.messages.verify')}}">
    <div class="filament-fortify-verify-email-page">
        <form method="POST" action="{{ route('verification.send') }}" class="space-y-8">

            @csrf
            <x-filament::button type="submit" class="w-full">
                {{ __('filament-fortify::verify-email.buttons.resend.label') }}
            </x-filament::button>
        </form>
    </div>
</x-filament::layouts.card>
