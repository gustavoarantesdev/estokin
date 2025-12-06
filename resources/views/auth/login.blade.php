@extends('layouts.guest')
@section('content')
    <main class="flex h-screen flex-col items-center justify-center p-6">
        {{-- Logo --}}
        <img
            class="w-35 mb-6"
            src="{{ asset('img/logo.svg') }}"
            alt="Logo"
        />
        {{-- Card --}}
        <div class="w-full rounded-xl border border-gray-300 bg-white shadow-md sm:max-w-lg">
            <div class="space-y-4 p-6">
                <h1>Acesse sua conta</h1>

                <form
                    class="space-y-4"
                    action="{{ route('login') }}"
                    method="POST"
                >
                    @csrf
                    {{-- Login --}}
                    <div>
                        <label
                            class="mb-2 block font-medium"
                            for="username"
                        >
                            Login
                            <span class="font-bold text-red-500">*</span>
                        </label>
                        <input
                            id="username"
                            name="username"
                            type="text"
                            value="{{ old('username') }}"
                            @class([
                                'ease w-full rounded-lg border p-2.5 shadow-sm transition duration-200 focus:outline-none',

                                $errors->has('username')
                                    ? 'border-red-300 bg-red-50 hover:border-red-300 focus:border-red-500 focus:ring-2 focus:ring-red-500/50'
                                    : (old('username')
                                        ? 'border-green-300 bg-green-50 hover:border-green-300 focus:border-green-500 focus:ring-2 focus:ring-green-500/50'
                                        : 'border-gray-300 bg-gray-50 hover:border-violet-300 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/50'),
                            ])
                            required
                            autocomplete="on"
                            @if (!$errors->has('username')) autofocus @endif
                            autocaptalize="none"
                            placeholder="Digite seu login"
                        >
                        @error('username')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Senha --}}
                    <div>
                        <label
                            class="mb-2 block font-medium"
                            for="password"
                        >
                            Senha
                            <span class="font-bold text-red-500">*</span>
                        </label>
                        <input
                            id="password"
                            name="password"
                            type="password"
                            @class([
                                'ease w-full rounded-lg border p-2.5 shadow-sm transition duration-200 focus:outline-none',

                                $errors->has('password')
                                    ? 'border-red-300 bg-red-50 hover:border-red-300 focus:border-red-500 focus:ring-2 focus:ring-red-500/50'
                                    : (old('')
                                        ? 'border-green-300 bg-green-50 hover:border-green-300 focus:border-green-500 focus:ring-2 focus:ring-green-500/50'
                                        : 'border-gray-300 bg-gray-50 hover:border-violet-300 focus:border-violet-500 focus:ring-2 focus:ring-violet-500/50'),
                            ])
                            required
                            placeholder="Digite sua senha"
                        >
                        @error('password')
                            <span class="text-sm text-red-500">{{ $message }}</span>
                        @enderror
                    </div>
                    <button
                        class="ease mt-2 w-full rounded-lg bg-violet-100 p-2.5 font-medium text-violet-500 transition duration-200 hover:bg-violet-400 hover:text-white focus:ring-4 focus:ring-violet-500/50"
                    >Acessar</button>
                </form>
            </div>
        </div>
    </main>
@endsection
