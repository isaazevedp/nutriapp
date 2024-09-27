<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meta de Desperdício</title>
    <link rel="stylesheet" href="/css/metaStyle.css">
    @vite('resources/css/menuStyle.css')
    <style>
        body {
            background-image: url('/css/img/imagem\ d\ fundo.jpeg'); /* Substitua pelo caminho da sua imagem */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0; /* Remove margens padrão */
            height: 100vh; /* Garante que o fundo preencha a altura da tela */
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Fundo branco com leve transparência */
            padding: 20px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Meta</h1>
        </header>

        <div class="dropdown">
            
            <div class="dropdown-content" id="dropdownMenu">
                <a href="#" onclick="selectYear('8º Ano')">8º Ano do Ensino Fundamental</a>
                <a href="#" onclick="selectYear('9º Ano')">9º Ano do Ensino Fundamental</a>
                <a href="#" onclick="selectYear('1º Ano do Ensino Médio')">1º Ano do Ensino Médio</a>
                <a href="#" onclick="selectYear('2º Ano do Ensino Médio')">2º Ano do Ensino Médio</a>
                <a href="#" onclick="selectYear('3º Ano do Ensino Médio')">3º Ano do Ensino Médio</a>
            </div>
        </div>

        <main>
            <form class="meta-form">
                <label for="meta">Registro do Desperdício para o dia (kg):</label>
                <input type="number" id="meta" name="meta" placeholder="Digite a meta em kg" min="0" step="0.1" required>

                <label for="data">Data:</label>
                <input type="date" id="data" name="data" required>
                
                <a href="{{ route('painel') }}" class="btn-back">Registrar</a>
            </form>

            <a href="{{ route('nutriapp') }}" class="btn-back">Voltar</a> <!-- Botão de Voltar -->
        </main>

        <footer>
            <p>&copy; 2024 - Controle de Desperdício de Alimentos</p>
        </footer>
    </div>

    
</body>
</html>
