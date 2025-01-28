<x-guest-layout>
    <x-auth-card class="bg-light shadow-lg">
        <div class="card-header border-primary-subtle">
            <h2 class="card-title d-flex justify-content-center text-primary-emphasis">Cadastre-se</h2>
        </div>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>
        <form class="mt-4"
              method="POST"
              action="{{ route('register') }}">
            <!-- Name -->
            <div class="form-floating mb-3">
                <x-input id="name"
                         type="text"
                         name="name"
                         :value="old('name')"
                         required
                         autofocus/>
                <x-label for="name" :value="__('Name')"/>
            </div>

            <!-- Email Address -->
            <div class="form-floating mt-4">

                <x-input id="email"
                         type="email"
                         name="email"
                         :value="old('email')"
                         required/>
                <x-label for="email" :value="__('Email')"/>

            </div>

            <!-- Password -->
            <div class="form-floating mt-4">

                <x-input id="password"
                         type="password"
                         name="password"
                         required
                         autocomplete="new-password"/>
                <x-label for="password" :value="__('Password')"/>

            </div>

            <!-- Confirm Password -->
            <div class="form-floating mt-4">

                <x-input id="password_confirmation"
                         type="password"
                         name="password_confirmation"
                         required/>
                <x-label for="password_confirmation" :value="__('Confirm Password')"/>

            </div>

            <div class="card-footer border-primary-subtle mt-4 d-flex flex-column">
                <x-button class="btn btn-primary mt-3 mb-3">
                    {{ __('Enviar') }}
                </x-button>
                <a href="{{ route('login') }}" class="text-secondary">
                    {{ __('Já possui cadastrado? Faça login') }}
                </a>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
