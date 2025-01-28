<x-guest-layout>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-alert type="danger" :message="$error"/>
        @endforeach
    @endif
    <x-auth-card class="shadow-lg">
        <div class="card-header border-primary-subtle">
            <h2 class="card-title d-flex justify-content-center text-primary">Cadastre-se</h2>
        </div>
        <form class="mt-4"
              method="POST"
              action="{{ route('register') }}">
            @csrf
            <div class="form-floating mb-3">
                <x-input id="name"
                         type="text"
                         name="name"
                         :value="old('name')"
                         required
                         autofocus/>
                <x-label for="name" :value="__('Nome')"/>
            </div>
            <div class="form-floating mt-4">
                <x-input id="email"
                         type="email"
                         name="email"
                         :value="old('email')"
                         required/>
                <x-label for="email" :value="__('Email')"/>
            </div>
            <div class="form-floating mt-4">
                <x-input id="password"
                         type="password"
                         name="password"
                         required
                         autocomplete="new-password"/>
                <x-label for="password" :value="__('Senha')"/>
            </div>
            <div class="form-floating mt-4">
                <x-input id="password_confirmation"
                         type="password"
                         name="password_confirmation"
                         required/>
                <x-label for="password_confirmation" :value="__('Confirmar senha')"/>
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
