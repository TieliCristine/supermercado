<x-guest-layout>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <x-alert type="danger" :message="$error"/>
        @endforeach
    @endif
    @if (session('status'))
        <x-alert type="success" :message="session('status')"/>
    @endif
    <x-auth-card class="shadow-lg">
        <div class="card-header border-primary-subtle">
            <h2 class="card-title d-flex justify-content-center text-primary">Redefinição de Senha</h2>
        </div>
        <div class="mb-4 mt-4">
            {{ __('Esqueceu sua senha? Não se preocupe. Informe o seu e-mail e enviaremos um link para criar uma nova senha.') }}
        </div>
        <form
            method="POST"
            action="{{ route('password.email') }}">
            @csrf
            <div class="form-floating mb-3">
                <x-input id="email"
                         type="email"
                         name="email"
                         :value="old('email')"
                         required
                         autofocus/>
                <x-label for="email" :value="__('Email')"/>
            </div>

            <div class="card-footer border-primary-subtle mt-4 d-flex flex-column">
                <x-button class="btn btn-primary mt-3 mb-3">
                    {{ __('Enviar') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
