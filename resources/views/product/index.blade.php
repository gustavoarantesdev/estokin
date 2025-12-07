@extends('layouts.app')
@section('content')
    <main class="flex h-screen flex-col items-center">
        <div class="h-screen w-full bg-gray-50 p-4 shadow-lg sm:max-w-lg">
            <div class="relative h-full rounded-lg border border-gray-300 bg-white shadow-md">
                <a href="{{ route('dashboard') }}">
                    <img
                        class="w-35 p-4"
                        src="{{ asset('img/logo.svg') }}"
                        alt="Logo"
                    />
                </a>
                <hr class="text-gray-300">
                <h1 class="p-4 text-2xl font-medium">Produtos</h1>

                <div
                    class="bg-neutral-primary-soft m-4 h-80 overflow-x-auto overflow-y-auto rounded-lg border border-gray-300 shadow-md">
                    <table class="w-full text-left text-sm">
                        <thead class="rounded-base border-b border-gray-300 bg-gray-100 text-sm text-gray-600">
                            <tr>
                                <th
                                    class="px-3 py-3 font-medium"
                                    scope="col"
                                >Nome</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr class="cursor-pointer border-b border-gray-300 hover:bg-gray-50">
                                    <td class="px-4 py-4">{{ $product->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <x-partials.mobileMenu />
            </div>
        </div>
    </main>
@endsection
