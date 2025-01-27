<x-guest-layout>
    <x-auth-card>

        <div class="card p-3">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors"/>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <x-label for="name" :value="__('Name')"/>

                    <x-input id="name"
                             type="text"
                             name="name"
                             :value="old('name')"
                             required
                             autofocus/>
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <x-label for="email" :value="__('Email')"/>

                    <x-input id="email"
                             type="email"
                             name="email"
                             :value="old('email')"
                             required/>
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <x-label for="password" :value="__('Password')"/>

                    <x-input id="password"
                             type="password"
                             name="password"
                             required
                             autocomplete="new-password"/>
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <x-label for="password_confirmation" :value="__('Confirm Password')"/>

                    <x-input id="password_confirmation"
                             type="password"
                             name="password_confirmation"
                             required/>
                </div>

                <div class=" mt-4">
                    <a href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    <x-button class="btn">
                        {{ __('Register') }}
                    </x-button>
                </div>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
