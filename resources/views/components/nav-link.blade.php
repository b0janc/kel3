@props(['active' => false])

<a {{ $attributes->merge([
    'class' => ($active
        ? 'bg-indigo-700 text-white'
        : 'text-gray-300 hover:bg-indigo-600 hover:text-white') .
        ' rounded-md px-3 py-2 text-sm font-medium transition-colors duration-200'
]) }}
   aria-current="{{ $active ? 'page' : false }}">
    {{ $slot }}
</a>