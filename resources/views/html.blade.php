<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriApp</title>
    <link rel="stylesheet" href="{{ asset('css/css.css') }}">
    @vite('resources/css/css.css')
    <style>
        body {
            background-image: img src="{{ asset('storage/img/.png') }}"; /* Substitua pelo caminho da sua imagem */
            background-position: center;
            background-repeat: no-repeat;
            margin: 0; /* Remove margens padrão */
            height: 100vh; /* Garante que o fundo preencha a altura da tela */
        }
    </style>
</head>
<body>

    <div class="container">
        <header class="header">
            <div class="logo-circle">
                <img src="{{ asset('storage/public/img/logo 2.png') }}" alt="Logo" class="logo-image">
            </div>
        </header>

        <main class="main-content">
        <a href="{{ route('controle') }}" class="btn">DESPERDÍCIO</a>
        <a href="{{ route('painel') }}" class="btn">RELATÓRIO</a>
        <a href="{{ route('dash') }}" class="btn">DASHBOARD</a>
        </main>

        <footer class="footer">
            <img src="{{ asset('storage/app/public/img/lixo.png') }}" alt="Lixo com alimentos" class="footer-image">
            <p class="footer-text">NutriApp</p>
        </footer>
    </div>
</body>
</html>
