<x-guest-layout>
    <x-auth-card>
{{--        <button id="toggle-theme" class="btn btn-outline-primary">--}}
{{--            <i id="theme-icon" class="bi bi-sun"></i>--}}
{{--        </button>--}}


        <div class="border border-primary card p-3 position-absolute top-50 start-50 translate-middle min-w-80">
            <div class="card-title d-flex justify-content-center">
                <h2>Acessar</h2>
            </div>


            <!-- Session Status -->
            <x-auth-session-status :status="session('status')"/>

            <!-- Validation Errors -->
            <x-auth-validation-errors :errors="$errors"/>

            <form class="mt-4"
                  method="POST"
                  action="{{ route('login') }}">

                <!-- Email Address -->
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

                <!-- Password -->
                <div class="form-floating mb-3">
                    <x-input id="password"
                             type="password"
                             name="password"
                             required
                             autocomplete="current-password"/>
                    <x-label for="password" :value="__('Senha')"/>
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

                <div class="card-footer d-flex flex-column justify-content-center">
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
                        <div class="flex-grow-1 border-top border-secondary"></div>
                        <span class="mx-3 text-muted text-black-50">OU</span>
                        <div class="flex-grow-1 border-top border-secondary"></div>
                    </div>

                    <button class="btn btn-outline-primary">Inscreva-se</button>


                </div>


            </form>
        </div>

    </x-auth-card>
</x-guest-layout>
