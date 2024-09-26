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
                <div class="signal">7:29 | 30/08/2024</div>
            </div>
            <div class="header-content">
                <div class="menu-icon"></div>
                <h1>Painel</h1>
                <div class="user-icon"></div>
            </div>
        </header>
        <main>
            <div class="main-content">
                <section class="turmas">
                    <h2>Turmas</h2>
                    <div class="turma-info">
                        <!-- Menu Drop-Down com opções de salas -->
                        <select name="turmas" id="turmas">
                            <option value="8ano">8º Ano do Fundamental</option>
                            <option value="9ano">9º Ano do Fundamental</option>
                            <option value="1em">1º Ano do Ensino Médio</option>
                            <option value="2em">2º Ano do Ensino Médio</option>
                            <option value="3em">3º Ano do Ensino Médio</option>
                        </select>
                        <span>Escola Sesi - 162</span>
                    </div>
                </section>
                <section class="calendario">
                    <h2>Calendário</h2>
                    <div class="calendar-view">
                        <div class="calendar-header">
                            <span>Agosto 2024</span>
                        </div>
                        <div class="calendar-grid">
                            <!-- Cabeçalho do calendário com os dias da semana -->
                            <div class="day-header">Dom</div>
                            <div class="day-header">Seg</div>
                            <div class="day-header">Ter</div>
                            <div class="day-header">Qua</div>
                            <div class="day-header">Qui</div>
                            <div class="day-header">Sex</div>
                            <div class="day-header">Sáb</div>

                            <!-- Dias do calendário -->
                            <div class="day"></div>
                            <div class="day"></div>
                            <div class="day"></div>
                            <div class="day"></div>
                            <div class="day">1</div>
                            <div class="day">2</div>
                            <div class="day">3</div>
                            <div class="day">4</div>
                            <div class="day">5</div>
                            <div class="day">6</div>
                            <div class="day">7</div>
                            <div class="day">8</div>
                            <div class="day">9</div>
                            <div class="day">10</div>
                            <div class="day">11</div>
                            <div class="day">12</div>
                            <div class="day">13</div>
                            <div class="day">14</div>
                            <div class="day">15</div>
                            <div class="day">16</div>
                            <div class="day">17</div>
                            <div class="day">18</div>
                            <div class="day">19</div>
                            <div class="day">20</div>
                            <div class="day">21</div>
                            <div class="day">22</div>
                            <div class="day">23</div>
                            <div class="day">24</div>
                            <div class="day">25</div>
                            <div class="day">26</div>
                            <div class="day">27</div>
                            <div class="day">28</div>
                            <div class="day">29</div>
                            <div class="day">30</div>
                            <div class="day">31</div>
                        </div>
                    </div>
                    <br><br>
                </section>
            </div>
        </main>
        <footer>
            <div class="footer-chat">
            <a href="{{ route('nutriapp') }}" class="btn-back">Voltar</a>
            </div>
        </footer>
    </div>
</body>
</html>