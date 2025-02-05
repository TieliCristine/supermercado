<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bem-vindo - Sistema de Gestão para Supermercados</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Font Awesome para ícones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* Hero Section */
        .hero {
            height: 100vh;
            background: url('https://via.placeholder.com/1920x1080') no-repeat center center;
            background-size: cover;
            position: relative;
        }
        .hero-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0,0,0,0.5);
        }
        .hero-content {
            position: relative;
            z-index: 2;
            color: #fff;
        }
        section {
            padding: 60px 0;
        }
    </style>
</head>
<body>

<!-- Seção Hero -->
<section class="hero d-flex align-items-center justify-content-center">
    <div class="hero-overlay"></div>
    <div class="container text-center hero-content">
        <h1 class="display-4 animate__animated animate__fadeInDown">
            Bem-vindo ao Sistema de Gestão para Supermercados
        </h1>
        <p class="lead animate__animated animate__fadeInUp">
            A ferramenta completa para uma gestão moderna e eficiente.
        </p>
    </div>
</section>

<!-- Seção de Funcionalidades -->
<section id="funcionalidades" class="bg-light">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 animate__animated animate__fadeInLeft">
                <i class="fas fa-chart-line fa-3x mb-3"></i>
                <h3>Controle de Vendas</h3>
                <p>Visualize e acompanhe suas vendas em tempo real com relatórios detalhados.</p>
            </div>
            <div class="col-md-4 animate__animated animate__fadeInUp">
                <i class="fas fa-cash-register fa-3x mb-3"></i>
                <h3>Gestão de Caixa</h3>
                <p>Mantenha o fluxo de caixa sempre organizado e sob controle.</p>
            </div>
            <div class="col-md-4 animate__animated animate__fadeInRight">
                <i class="fas fa-warehouse fa-3x mb-3"></i>
                <h3>Controle de Estoque</h3>
                <p>Gerencie o estoque de forma inteligente, evitando perdas e otimizando o abastecimento.</p>
            </div>
        </div>
    </div>
</section>

<!-- Seção de Ação: Login e Cadastro -->
<section id="cta">
    <div class="container">
        <div class="row">
            <!-- Card de Login -->
            <div class="col-md-6 mb-4 animate__animated animate__zoomIn">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Já possui uma conta?</h5>
                        <p class="card-text">Acesse sua conta e comece a aproveitar as funcionalidades do sistema.</p>
                        <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                    </div>
                </div>
            </div>
            <!-- Card de Cadastro -->
            <div class="col-md-6 mb-4 animate__animated animate__zoomIn">
                <div class="card">
                    <div class="card-body text-center">
                        <h5 class="card-title">Novo por aqui?</h5>
                        <p class="card-text">Cadastre-se agora e descubra uma nova forma de gerenciar seu supermercado.</p>
                        <a href="{{ route('register') }}" class="btn btn-success">Cadastro</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scripts JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
