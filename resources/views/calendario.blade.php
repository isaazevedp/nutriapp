<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Desperdício de Alimentos</title>
    <link rel="stylesheet" href="./css/style.css">
    @vite(['resources/css/style.css', 'resources/js/app.js'])
    <style>
        body {
            background-image: url('\img\imagem d fundo.jpeg'); /* Substitua pelo caminho da sua imagem */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0; /* Remove margens padrão */
            height: 100vh; /* Garante que o fundo preencha a altura da tela */
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9); /* Fundo branco com leve transparência */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Sombra para destacar o container */
        }
    </style>
</head>
<body>
    <br><br><br><br>
    <div class="container">
        <header>
            <div class="top-bar">
            </div>
            <div class="header-content">
                <div class="menu-icon"></div>
                <h1>Painel</h1>
                <div class="user-icon"></div>
            </div>
        </header>
        <main>
            <div class="main-content">
                     </div>
                </section>
                <section class="calendario">
                    <h2>Calendário</h2>
                    <form action="{{ route('fetch.data') }}" method="GET">
    <input type="date" name="data" id="data" required>
    <button type="submit">Buscar Dados</button>
</form>
@if(isset($record))
    <ul>
        <li>Turma: <span>{{ $record->escola}}</span></li>
        <li>Quantidade Desperdiçada: <span>{{ $record->quantidade}}</span></li>
        <li>Descrição: <span>{{ $record->descricao}}</span></li>
    </ul>
@endif
                
                    </div>
                    <br><br>
                </section>
            </div>
        </main>
        <footer>
            <div class="footer-chat">
            <a href="{{ route('inicio') }}" class="btn-back">Voltar</a>
            </div>
        </footer>
    </div>
</body>
</html>