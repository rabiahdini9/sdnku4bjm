<x-guest-layout>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="bg-white shadow-xl rounded-2xl p-8 w-full max-w-md mx-auto">

        <!-- Judul -->
        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-green-700">
                Login Admin
            </h1>
            <p class="text-gray-500 text-sm mt-2">
                Website Profil SDN Kuin Utara 4 Banjarmasin
            </p>
        </div>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div>
                <x-input-label for="email" :value="__('Email')" />

                <x-text-input
                    id="email"
                    class="block mt-1 w-full rounded-lg"
                    type="email"
                    name="email"
                    :value="old('email')"
                    required
                    autofocus
                    autocomplete="username" />

                <x-input-error
                    :messages="$errors->get('email')"
                    class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />

                <x-text-input
                    id="password"
                    class="block mt-1 w-full rounded-lg"
                    type="password"
                    name="password"
                    required
                    autocomplete="current-password" />

                <x-input-error
                    :messages="$errors->get('password')"
                    class="mt-2" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input
                        id="remember_me"
                        type="checkbox"
                        class="rounded border-gray-300 text-green-600 shadow-sm focus:ring-green-500"
                        name="remember">

                    <span class="ms-2 text-sm text-gray-600">
                        {{ __('Remember me') }}
                    </span>
                </label>
            </div>

            <!-- Tombol -->
            <div class="flex items-center justify-between mt-6">

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}"
                        class="text-sm text-gray-500 hover:text-green-700">
                        Forgot password?
                    </a>
                @endif

                <x-primary-button
                    class="ms-3 bg-green-600 hover:bg-green-700 border-none px-6 py-2 rounded-lg">
                    {{ __('Log in') }}
                </x-primary-button>

            </div>
        </form>

    </div>

</x-guest-layout>