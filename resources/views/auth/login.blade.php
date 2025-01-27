<x-guest-layout>
    <x-auth-card>

        <div class="border border-primary card p-3">
            <!-- Session Status -->
            <x-auth-session-status :status="session('status')"/>

            <!-- Validation Errors -->
            <x-auth-validation-errors :errors="$errors"/>

            <form method="POST" action="{{ route('login') }}">

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')"/>

                    <x-input id="email"
                             type="email"
                             name="email"
                             :value="old('email')"
                             required
                             autofocus/>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Senha')"/>

                    <x-input id="password"
                             type="password"
                             name="password"
                             required
                             autocomplete="current-password"/>
                </div>

                <!-- Remember Me -->
                <div class="mt-4">
                    <label for="remember_me">
                        <input id="remember_me"
                               type="checkbox"
                               name="remember"
                               class="form-check-input mt-0">
                        <span class="ml-2">{{ __('Lembrar-me') }}</span>
                    </label>
                </div>

                <div class="mt-4">
                @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}">
                            {{ __('Esqueceu a senha?') }}
                        </a>
                    @endif

                    <x-button>
                        {{ __('Entrar') }}
                    </x-button>
                </div>
            </form>
        </div>

    </x-auth-card>
</x-guest-layout>
