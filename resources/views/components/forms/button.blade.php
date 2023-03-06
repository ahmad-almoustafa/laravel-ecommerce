<button
    {{ $attributes->merge([
        'class' =>
            'inline-flex items-center px-4 py-2 uppercase  border  rounded-md font-semibold text-xs sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm tracking-widest  focus:outline-none  focus:ring-2 focus:ring-offset-2  disabled:opacity-25 transition ease-in-out duration-150',
    ]) }}>

    {{ $slot }}
</button>
