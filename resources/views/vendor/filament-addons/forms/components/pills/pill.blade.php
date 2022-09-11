<div aria-labelledby="{{ $getId() }}" id="{{ $getId() }}" role="tabpanel" tabindex="0"
    x-bind:class="{ 'invisible h-0 p-0 overflow-y-hidden': pill !== '{{ $getId() }}', 'p-2': pill === '{{ $getId() }}' }"
    {{ $attributes->merge($getExtraAttributes())->class([
        'focus:outline-none
      filament-forms-pills-component-pill',
    ]) }}>
    {{ $getChildComponentContainer() }}
</div>
