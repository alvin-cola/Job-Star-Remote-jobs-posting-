@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'text-black-900 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500  rounded-md shadow-sm']) }}>
