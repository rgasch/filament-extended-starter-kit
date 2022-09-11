<div class="filament-fortify-register-page">
    <form wire:submit.prevent="register" class="space-y-8">

        @csrf
        {{ $this->form }}

        <x-filament::button type="submit" form="register" class="w-full">
            {{ __('filament-fortify::register.buttons.submit.label') }}
        </x-filament::button>

        <div class="text-center">
            <x-tables::link href="{{route('login')}}" >{{__('filament-fortify::register.buttons.login.label')}}</x-table::link>
        </div>
    </form>
</div>
