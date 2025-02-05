<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header text-center">
                <h2>Editar Fornecedor</h2>

            </div>
            <div class="card-body">
                {{--        @if ($errors->any())--}}
                {{--            <div class="alert alert-danger">--}}
                {{--                <ul>--}}
                {{--                    @foreach ($errors->all() as $error)--}}
                {{--                        <li>{{ $error }}</li>--}}
                {{--                    @endforeach--}}
                {{--                </ul>--}}
                {{--            </div>--}}
                {{--        @endif--}}

                <form action="{{ route('suppliers.update', $supplier->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $supplier->name }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ $supplier->email }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ $supplier->phone }}">
                    </div>
                </form>
            </div>
            <div class="card-footer d-flex justify-content-center gap-2">
                <a href="{{ route('suppliers.index') }}" class="btn btn-secondary">Cancelar</a>
                <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            </div>

        </div>

    </div>
</x-app-layout>

