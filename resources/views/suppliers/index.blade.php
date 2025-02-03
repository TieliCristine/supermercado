<x-app-layout>
    <div class="container">
        <h2>Fornecedores</h2>

        <!-- Barra de pesquisa -->
        <form action="{{ route('suppliers.index') }}" method="GET" class="mb-4">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Buscar por nome ou CNPJ"
                       value="{{ request('search') }}">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>

        <!-- Tabela de fornecedores -->
        <div class="rounded-4 p-2 border border-primary table-responsive mb-2">
            <table class="table
                          table-borderless
                          table-striped
                          table-sm">
                <thead>
                <tr>
                    <th>
                        <button type="button" class="btn btn-outline-success mb-3" data-bs-toggle="modal" data-bs-target="#addSupplierModal">
                            <i class="bi bi-person-plus-fill"></i>
                        </button>
                    </th>
                </tr>
                <tr>
                    <th>Nome Fantasia</th>
                    <th>Razão Social</th>
                    <th>Representante de Vendas</th>
                    <th>CNPJ</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Ações</th>

                </tr>
                </thead>
                <tbody class="table-group-divider" style="border-top: 2px solid var(--bs-primary);">
                @foreach ($suppliers as $supplier)
                    <tr>
                        <td>{{ $supplier->name }}</td>
                        <td>{{ $supplier->company_name }}</td>
                        <td>{{ $supplier->representative }}</td>
                        <td>{{ $supplier->cnpj }}</td>
                        <td>{{ $supplier->email }}</td>
                        <td>{{ $supplier->phone }}</td>
                        <td class="d-flex flex-row gap-2">
                            <a id="edit" href="{{ route('suppliers.edit', $supplier->id) }}"
                                    class="btn btn-outline-warning btn-sm">
                                <i id="edit" class="bi bi-pencil-fill"></i>
                            </a>
                            <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="POST"
                                  style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger btn-sm"
                                        onclick="return confirm('Tem certeza que deseja excluir?')">
                                    <i id="delete" class="bi bi-trash-fill"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>


        <!-- Paginação -->
        {{ $suppliers->links() }}
            </div>

        <!-- Modal de cadastro -->
        <div class="modal fade" id="addSupplierModal" tabindex="-1" aria-labelledby="addSupplierModalLabel"
             aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addSupplierModalLabel">Adicionar Fornecedor</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                    </div>
                    <div class="modal-body">
                        <form id="addSupplierForm" action="{{ route('suppliers.store') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome Fantasia</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="company_name" class="form-label">Razão Social</label>
                                <input type="text" class="form-control" id="company_name" name="company_name" required>
                            </div>
                            <div class="mb-3">
                                <label for="cnpj" class="form-label">CNPJ</label>
                                <input type="text" class="form-control" id="cnpj" name="cnpj" required>
                            </div>
                            <div class="mb-3">
                                <label for="representative" class="form-label">Representante de Vendas</label>
                                <input type="text" class="form-control" id="representative" name="representative"
                                       required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Telefone</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Endereço</label>
                                <textarea class="form-control" id="address" name="address"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" form="addSupplierForm" class="btn btn-primary">Salvar</button>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
