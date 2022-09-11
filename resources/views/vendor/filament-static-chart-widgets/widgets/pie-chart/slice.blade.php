<div {{ $attributes->class([
    'flex justify-between text-sm py-2',
]) }}>
    <div class="flex items-center space-x-2">
        <div class="block h-4 w-4 rounded {{ $getColor() }}"></div>
        <span>{{ $getLabel() }}</span>
    </div>

    <div class="flex space-x-4 text-gray-500 dark:text-gray-300">
        <span>{{ $getValue() }}</span>

        @if ($shouldShowPercentageLabel())
        <span class="w-8 text-right">{{ $getPercentageLabel() }}</span>
        @endif
    </div>
</div>
