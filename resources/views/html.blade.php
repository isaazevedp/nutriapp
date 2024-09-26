<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NutriApp</title>
    <link rel="stylesheet" href="C:\Users\Aluno\Documents\nutri-app\resources\css\css.css">
    @vite('resources/css/css.css')
    <style>
        body {
            background-image: url('/css/img/imagem\ d\ fundo.jpeg'); /* Substitua pelo caminho da sua imagem */
            background-size: cover;
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
                <img src="{{ asset('storage/img/logo 2.png') }}" alt="Logo" class="logo-image">
            </div>
        </header>

        <main class="main-content">
        <a href="{{ route('inicio') }}" class="btn">REGISTRO</a>
        <a href="{{ route('controle') }}" class="btn">DESPERDÍCIO</a>
        <a href="{{ route('painel') }}" class="btn">RELATÓRIO</a>
        </main>

        <footer class="footer">
            <img src="{{ asset('storage/img/lixo.png') }}" alt="Lixo com alimentos" class="footer-image">
            <p class="footer-text">NutriApp</p>
        </footer>
    </div>
</body>
</html>
