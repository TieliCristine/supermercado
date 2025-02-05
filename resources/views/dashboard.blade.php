@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
        <div class="container pb-5">
            <h4>Acesso rápido:</h4>
            <div class="p-20 d-flex flex-row gap-2 justify-content-evenly ">
                <a href="{{ route('suppliers.index') }}" class="card dash-cards text-decoration-none">
                    <div class="card-body">
                        <h5 class="card-title">Fornecedores</h5>
                        <p class="card-text">Gerencie seus fornecedores.</p>
                    </div>
                </a>
                <a href="{{ route('payments.index') }}" class="card dash-cards text-decoration-none">
                    <div class="card-body">
                        <h5 class="card-title">Pagamentos</h5>
                        <p class="card-text">Acompanhe os pagamentos.</p>
                    </div>
                </a>
                <a href="{{ route('inventory.index') }}" class="card dash-cards text-decoration-none">
                    <div class="card-body">
                        <h5 class="card-title">Estoque</h5>
                        <p class="card-text">Controle o estoque.</p>
                    </div>
                </a>
                <a href="{{ route('sales.index') }}" class="card dash-cards text-decoration-none">
                    <div class="card-body">
                        <h5 class="card-title">Vendas</h5>
                        <p class="card-text">Acompanhe as vendas.</p>
                    </div>
                </a>
            </div>
        </div>

        <div class="container text-center">
            <div class="row">
                <div class="col">
                    <h5>Gráfico de Vendas</h5>
                    <canvas id="vendasChart"></canvas>
                </div>
                <div class="col">
                    <h5>Gráfico de Estoque</h5>
                    <canvas id="estoqueChart"></canvas>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h5>Gráfico de Fornecedores</h5>
                    <canvas id="fornecedoresChart"></canvas>
                </div>
                <div class="col">
                    <h5>Gráfico de Pagamentos</h5>
                    <canvas id="pagamentosChart"></canvas>
                </div>
                <div class="col">
                    <h5>Gráfico de Desempenho</h5>
                    <canvas id="desempenhoChart"></canvas>
                </div>
            </div>
        </div>

        <script>
            // Aguarda o carregamento completo do DOM
            document.addEventListener('DOMContentLoaded', function () {
                // Gráfico de Vendas (Linha)
                const vendasCtx = document.getElementById('vendasChart').getContext('2d');
                new Chart(vendasCtx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
                        datasets: [{
                            label: 'Vendas',
                            data: [65, 59, 80, 81, 56, 55],
                            borderColor: 'rgba(75, 192, 192, 1)',
                            fill: false
                        }]
                    }
                });

                // Gráfico de Estoque (Barras)
                const estoqueCtx = document.getElementById('estoqueChart').getContext('2d');
                new Chart(estoqueCtx, {
                    type: 'bar',
                    data: {
                        labels: ['Produto A', 'Produto B', 'Produto C', 'Produto D'],
                        datasets: [{
                            label: 'Estoque',
                            data: [30, 45, 60, 20],
                            backgroundColor: 'rgba(153, 102, 255, 0.2)',
                            borderColor: 'rgba(153, 102, 255, 1)',
                            borderWidth: 1
                        }]
                    }
                });

                // Gráfico de Fornecedores (Pizza)
                const fornecedoresCtx = document.getElementById('fornecedoresChart').getContext('2d');
                new Chart(fornecedoresCtx, {
                    type: 'pie',
                    data: {
                        labels: ['Fornecedor A', 'Fornecedor B', 'Fornecedor C'],
                        datasets: [{
                            label: 'Fornecedores',
                            data: [40, 30, 30],
                            backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
                            borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
                            borderWidth: 1
                        }]
                    }
                });

                // Gráfico de Pagamentos (Linha)
                const pagamentosCtx = document.getElementById('pagamentosChart').getContext('2d');
                new Chart(pagamentosCtx, {
                    type: 'line',
                    data: {
                        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
                        datasets: [{
                            label: 'Pagamentos',
                            data: [2000, 2500, 3000, 2800, 3200, 3500],
                            borderColor: 'rgba(255, 159, 64, 1)',
                            fill: false
                        }]
                    }
                });

                // Gráfico de Desempenho (Radar)
                const desempenhoCtx = document.getElementById('desempenhoChart').getContext('2d');
                new Chart(desempenhoCtx, {
                    type: 'radar',
                    data: {
                        labels: ['Vendas', 'Estoque', 'Fornecedores', 'Pagamentos', 'Despesas'],
                        datasets: [{
                            label: 'Desempenho',
                            data: [65, 59, 80, 81, 56],
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
                        }]
                    }
                });
            });
        </script>
@endsection
