<button {{ $attributes->merge(['type' => 'submit', 'class' => 'items-center px-4 py-2
    bg-gray-800
    dark:bg-gray-200 border border-transparent rounded-md font-semibold text-white dark:text-black font-bold
    uppercase
    tracking-widest hover:bg-lime-700 dark:hover:bg-lime-500 dark:hover:text-white focus:bg-lime-700
    dark:focus:bg-lime-500 active:bg-lime-900
    dark:active:bg-lime-300 focus:outline-none focus:ring-2 focus:ring-lime-500 focus:ring-offset-2
    dark:focus:ring-offset-lime-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>