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

                <x-partials.mobileMenu />
            </div>
        </div>
    </main>
@endsection
