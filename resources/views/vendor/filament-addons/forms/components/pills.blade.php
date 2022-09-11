<div x-data="{

    pill: null,

    init: function() {
        this.pill = this.getPills()[{{ $getActivePill() }} - 1]
    },

    getPills: function() {
        return JSON.parse(this.$refs.pillsData.value)
    },

}"
    x-on:expand-concealing-component.window="
        if (getPills().includes($event.detail.id)) {
            pill = $event.detail.id
            $el.scrollIntoView({ behavior: 'smooth', block: 'start' })
        }
    "
    x-cloak {!! $getId() ? "id=\"{$getId()}\"" : null !!}
    {{ $attributes->merge($getExtraAttributes())->class([
            'p-4 rounded-xl shadow-sm bg-white filament-addons',
            'dark:bg-gray-700 dark:border-gray-600' => config('forms.dark_mode'),
        ]) }}
    {{ $getExtraAlpineAttributeBag() }}>

    <input type="hidden"
        value='{{ collect($getChildComponentContainer()->getComponents())->filter(static fn(\BezhanSalleh\FilamentAddons\Forms\Components\Pills\Pill $pill): bool => !$pill->isHidden())->map(static fn(\BezhanSalleh\FilamentAddons\Forms\Components\Pills\Pill $pill) => $pill->getId())->values()->toJson() }}'
        x-ref="pillsData" />

    <div class="sm:hidden mb-4">
        <label for="pills" class="sr-only">Select a pill</label>
        <select id="pills" name="pills" x-model="pill" @class([
            'w-full text-primary-700 border-2 px-2 border-primary-200 block h-10 transition duration-75 rounded-lg shadow-sm focus:border-primary-200 focus:ring-0 focus:ring-inset focus:ring-primary-200',
            'dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 dark:focus:border-primary-600' => config(
                'filament.dark_mode'
            ),
        ])>
            @foreach ($getChildComponentContainer()->getComponents() as $pill)
                <option value="{{ $pill->getId() }}">{{ $pill->getLabel() }}</option>
            @endforeach
        </select>
    </div>
    <div class="hidden sm:block">
        <nav class="flex space-x-4 rtl:space-x-reverse p-2" {!! $getLabel() ? 'aria-label="' . $getLabel() . '"' : null !!}>
            @foreach ($getChildComponentContainer()->getComponents() as $pill)
                <button type="button" aria-controls="{{ $pill->getId() }}"
                    x-bind:aria-selected="pill === '{{ $pill->getId() }}'" x-on:click="pill = '{{ $pill->getId() }}'"
                    role="tab" x-bind:tabindex="pill === '{{ $pill->getId() }}' ? 0 : -1"
                    class="flex items-center justify-center gap-3 px-3 py-1.5 rounded-lg font-medium transition"
                    x-bind:class="{
                        'bg-gray-500/5 text-gray-500 hover:bg-gray-500/10 focus:bg-gray-500/10 @if (config('filament.dark_mode')) dark:bg-gray-800 dark:text-gray-100 dark:hover:bg-gray-600 @endif': pill !==
                            '{{ $pill->getId() }}',
                        'bg-primary-500 text-white': pill === '{{ $pill->getId() }}',
                    }">
                    <div class="flex items-center justify-center space-x-1 rtl:space-x-reverse">
                        @if ($pill->getIcon())
                            <x-dynamic-component :component="$pill->getIcon()" x-cloak class="w-5 h-5 shrink-0" />
                        @endif
                        <span>{{ $pill->getLabel() }}</span>

                        @if ($pill->getBadge())
                            <span
                                class="inline-flex items-center justify-center ml-auto rtl:ml-0 rtl:mr-auto min-h-4 px-2 py-0.5 text-xs font-medium tracking-tight rounded-xl whitespace-normal transition"
                                x-bind:class="{
                                    'text-gray-200 bg-primary-500': pill !==
                                        '{{ $pill->getId() }}',
                                    'text-primary-700 bg-white/95': pill === '{{ $pill->getId() }}'
                                }">
                                {{ $pill->getBadge() }}
                            </span>
                        @endif
                    </div>
                </button>
            @endforeach
        </nav>
    </div>
    @foreach ($getChildComponentContainer()->getComponents() as $pill)
        {{ $pill }}
    @endforeach
</div>
