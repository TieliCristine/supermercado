<x-guest-layout>
    <x-auth-card class="bg-light shadow-lg">
        {{--        <button id="toggle-theme" class="btn btn-outline-primary">--}}
        {{--            <i id="theme-icon" class="bi bi-sun"></i>--}}
        {{--        </button>--}}
        <div class="card-header  border-primary-subtle">
            <h2 class="card-title d-flex justify-content-center text-primary-emphasis">Acessar</h2>
        </div>
        <!-- Session Status -->
        <x-auth-session-status :status="session('status')"/>
        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors"/>
        <form class="mt-4"
              method="POST"
              action="{{ route('login') }}">
            @csrf
            <div class="form-floating mb-3">
                <x-input id="email"
                         type="email"
                         name="email"
                         :value="old('email')"
                         required
                         autocomplete="username"
                         autofocus/>
                <x-label for="email" :value="__('Email')"/>
            </div>
            <div class="form-floating mb-3">
                <x-input id="password"
                         type="password"
                         name="password"
                         required
                         autocomplete="current-password"/>
                <x-label for="password" :value="__('Senha')"/>
            </div>
            <div class="mt-4">
                <label for="remember_me">
                    <input id="remember_me"
                           type="checkbox"
                           name="remember"
                           class="form-check-input">
                    <span>{{ __('Lembrar-me') }}</span>
                </label>
            </div>
            <div class="d-flex flex-column justify-content-center">
                <div class="mt-4 d-flex flex-column">
                    <x-button class="btn btn-primary mb-2">
                        {{ __('Entrar') }}
                    </x-button>
                    @if (Route::has('password.request'))
                        <a class="text-secondary" href="{{ route('password.request') }}">
                            {{ __('Esqueceu a senha?') }}
                        </a>
                    @endif
                </div>
                <div class="d-flex align-items-center my-4">
                    <div class="flex-grow-1 border-top border-primary-subtle"></div>
                    <span class="mx-3 text-primary fw-lighter">OU</span>
                    <div class="flex-grow-1 border-top border-primary-subtle"></div>
                </div>
                <a href="{{ route('register') }}" class="btn btn-outline-primary">Registre-se</a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
