<nav class="absolute bottom-0 z-50 w-full rounded-lg border-t border-gray-300 bg-gray-50">
    <ul
        class="flex h-20 items-center justify-center space-x-3 md:space-x-4 lg:space-x-5"
        x-data="{ openDropdown: false }"
    >
        <li>
            <a
                class="{{ request()->routeIs('dashboard') ? 'font-medium text-violet-500' : '' }} my-transition flex flex-col items-center justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-violet-500"
                href="{{ route('dashboard') }}"
            >
                <x-icons.home />
                Home
            </a>
        </li>

        <li>
            <a
                class="{{ request()->routeIs('estoque') ? 'font-medium text-violet-500' : '' }} my-transition flex flex-col items-center justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-violet-500"
                href="#"
            >
                <x-icons.spreadsheet />
                Estoque
            </a>
        </li>

        <!-- Botão + Dropdown -->
        <li class="relative flex items-center justify-center">
            <button
                class="my-transition cursor-pointer rounded-full bg-violet-200 p-4 text-violet-500 hover:bg-violet-400 hover:text-white active:bg-violet-500"
                @click="openDropdown = ! openDropdown"
            >
                <x-icons.plus />
            </button>

            {{-- Dropdown --}}
            <div
                class="absolute bottom-full z-50 mb-8 w-64 rounded-lg border border-gray-200 bg-gray-50 p-4"
                x-cloak
                x-show="openDropdown"
                @click.away="openDropdown = false"
                x-transition:enter="transition ease-out duration-200"
                x-transition:enter-start="opacity-0 translate-y-8"
                x-transition:enter-end="opacity-100 translate-y-0"
                x-transition:leave="transition ease-in duration-150"
                x-transition:leave-start="opacity-100 translate-y-0"
                x-transition:leave-end="opacity-0 translate-y-8"
            >
                <ul>
                    <li class="space-y-2">
                        <p class="text-sm font-medium text-gray-600">Produto</p>
                        <a
                            class="my-transition block w-full cursor-pointer rounded-lg border border-gray-300 bg-gray-100 p-2 text-center text-gray-600 hover:border-violet-300 hover:bg-violet-100 hover:text-violet-600 active:bg-violet-400 active:text-white"
                            href="#"
                        >Cadastrar</a>
                    </li>

                    <hr class="my-2 text-gray-300">
                    <li class="space-y-2">
                        <p class="text-sm font-medium text-gray-600">Estoque</p>
                        <a
                            class="my-transition block w-full cursor-pointer rounded-lg border border-green-300 bg-green-100 p-2 text-center text-green-600 hover:border-green-300 hover:bg-green-200 hover:text-green-600 active:bg-green-400 active:text-white"
                            href="#"
                        >Entrada</a>
                        <a
                            class="my-transition block w-full cursor-pointer rounded-lg border border-red-300 bg-red-100 p-2 text-center text-red-600 hover:border-red-300 hover:bg-red-200 hover:text-red-600 active:bg-red-400 active:text-white"
                            href="#"
                        >Saída</a>
                    </li>

                </ul>


                {{-- Seta do Dropdown (borda maior) --}}
                <div
                    class="border-l-10 border-r-10 border-t-10 absolute left-1/2 top-full h-0 w-0 -translate-x-1/2 border-l-transparent border-r-transparent border-t-gray-200">
                </div>

                {{-- Seta do Dropdown (principal) --}}
                <div
                    class="absolute left-1/2 top-full h-0 w-0 -translate-x-1/2 border-l-8 border-r-8 border-t-8 border-l-transparent border-r-transparent border-t-gray-50">
                </div>
        </li>

        <li>
            <a
                class="{{ request()->routeIs('produto.*') ? 'font-medium text-violet-500' : '' }} my-transition flex flex-col items-center justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-violet-500"
                href="{{ route('produto.index') }}"
            >
                <x-icons.packageSearch />
                Produtos
            </a>
        </li>

        <li>
            <a
                class="{{ request()->routeIs('estoque.*') ? 'font-medium text-violet-500' : '' }} my-transition flex flex-col items-center justify-center rounded-lg p-2 text-gray-500 hover:bg-gray-100 hover:text-violet-500"
                href="#"
            >
                <x-icons.menu />
                Menu
            </a>
        </li>
    </ul>
</nav>
