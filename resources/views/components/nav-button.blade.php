<button {{ $attributes->merge([
    'class' => 'rounded-md px-3 py-2 text-sm font-medium
                text-gray-300 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-indigo-500'
]) }} type="submit">
    {{ $slot }}
</button>
