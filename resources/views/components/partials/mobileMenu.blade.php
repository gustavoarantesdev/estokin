<div class="absolute bottom-0 z-50 w-full rounded-lg border-t border-gray-300 bg-gray-50">
    <div class="flex h-20 items-center justify-center space-x-3 lg:space-x-5 md:space-x-4">
        <a
            class="{{ request()->routeIs('dashboard') ? 'font-medium text-violet-500' : '' }} ease flex flex-col items-center justify-center rounded-lg p-2 text-gray-500 transition duration-200 hover:bg-gray-100 hover:text-violet-500"
            href="{{ route('dashboard') }}"
        >
            <x-icons.home />
            Home
        </a>
        <a
            class="{{ request()->routeIs('estoque') ? 'font-medium text-violet-500' : '' }} ease flex flex-col items-center justify-center rounded-lg p-2 text-gray-500 transition duration-200 hover:bg-gray-100 hover:text-violet-500"
            href="#"
        >
            <x-icons.spreadsheet />
            Estoque
        </a>
        <button
            class="ease focus:ring-3 cursor-pointer rounded-full bg-violet-200 p-4 text-violet-500 transition duration-200 hover:bg-violet-400 hover:text-white focus:ring-violet-500/50"
        >
            <x-icons.plus />
        </button>
        <a
            class="{{ request()->routeIs('estoque') ? 'font-medium text-violet-500' : '' }} ease flex flex-col items-center justify-center rounded-lg p-2 text-gray-500 transition duration-200 hover:bg-gray-100 hover:text-violet-500"
            href="#"
        >
            <x-icons.packageSearch />
            Produtos
        </a>
        <a
            class="{{ request()->routeIs('estoque') ? 'font-medium text-violet-500' : '' }} ease flex flex-col items-center justify-center rounded-lg p-2 text-gray-500 transition duration-200 hover:bg-gray-100 hover:text-violet-500"
            href="#"
        >
            <x-icons.menu />
            Menu
        </a>
    </div>

</div>
