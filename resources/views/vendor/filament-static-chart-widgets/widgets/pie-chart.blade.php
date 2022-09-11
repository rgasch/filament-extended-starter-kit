<x-filament::widget class="static-pie-chart-widget">
    <x-filament::card>
        <div class="flex items-center justify-between gap-8">
            <x-filament::card.heading>
            {{ $this->getHeading() }}
            </x-filament::card.heading>
        </div>

        <x-filament::hr />

        <div class="flex flex-col">
            <div class="flex items-center justify-center">
                <div @class([
                    'flex items-center justify-center rounded-full',
                    match ($size) {
                        'md' => 'w-48 h-48',
                        'lg' => 'w-72 h-72',
                        'xl' => 'w-96 h-96',
                    },
                ]) style="
                    background: conic-gradient({{ $this->getStylesBackground() }})
                ">
                    @if ($showTotalLabel)
                    <div @class([
                        'flex items-center justify-center rounded-full',
                        'bg-white dark:bg-gray-800',
                        match ($size) {
                            'md' => 'w-16 h-16',
                            'lg' => 'w-24 h-24',
                            'xl' => 'w-32 h-32',
                        },
                    ])>
                        <span @class([
                            'text-gray-500 dark:text-gray-200',
                            match ($size) {
                                'md' => 'text-base',
                                'lg' => 'text-2xl',
                                'xl' => 'text-4xl',
                            },
                        ])>
                            {{ $this->getTotalValue() }}
                        </span>
                    </div>
                    @endif
                </div>
            </div>

            <div class="flex flex-col mt-8 divide-y divide-gray-200 dark:divide-gray-700">
                @foreach ($this->getCachedData() as $slice)
                {{ $slice }}
                @endforeach
            </div>
        </div>
    </x-filament::card>
</x-filament::widget>
