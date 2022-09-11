<x-filament::page>
    <div class="grid grid-cols-3 gap-3">
        @foreach ($data as $theme)
        <x-filament::card description="welcome">
            <x-filament::card.heading>
                {{ $theme['info']->name }}
            </x-filament::card.heading>
            <x-filament::hr />
            <img src="{{url($theme['info']->image)}}" />
            @if(setting('theme_name') !== $theme['info']->aliases)
            <a href="{{url('admin/themes/active?theme=themes.' . $theme['info']->aliases . '&name=' . $theme['info']->aliases)}}"
                class="inline-flex items-center justify-center font-medium tracking-tight transition rounded-lg focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 h-9 px-4 text-white shadow focus:ring-white">
                {{__('Active')}}
            </a>
            @else
            <a href="{{url('/')}}" target="_blank"
                class="inline-flex items-center justify-center font-medium tracking-tight transition rounded-lg focus:outline-none focus:ring-offset-2 focus:ring-2 focus:ring-inset bg-primary-600 hover:bg-primary-500 focus:bg-primary-700 focus:ring-offset-primary-700 h-9 px-4 text-white shadow focus:ring-white">
                {{__('Preview')}}
            </a>
            @endif
        </x-filament::card>
        @endforeach

    </div>

</x-filament::page>
