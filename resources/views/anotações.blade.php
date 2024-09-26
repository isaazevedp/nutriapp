<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Desperdício de Comida - Nutricionista</title>
    <link rel="stylesheet" href="/css/anotações.css">
    @vite(['resources/css/anotacoes.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Controle de Desperdício de Comida</h1>
        <h2>Área de Anotações - Nutricionista</h2>
    </header>

    <main>
        <form id="nota-form">
            <fieldset>
                <legend>Adicionar Anotações</legend>
                <label for="data">Data:</label>
                <input type="date" id="data" name="data" required>

                <label for="turno">Turno:</label>
                    <select id="turno" name="turno" required>
                    <option value="" disabled selected>Informe o turno</option>
                    <option value="manha">Manhã</option>
                    <option value="tarde">Tarde</option>
                </select>

                <label for="escola">Turma:</label>
                <input type="text" id="escola" name="escola" placeholder="Informe a Sala" required>

                <label for="quantidade">Quantidade Desperdiçada (kg):</label>
                <input type="number" id="quantidade" name="quantidade" step="0.1" placeholder="Quantidade (kg)" required>

                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" rows="4" placeholder="Descreva o desperdício observado..." required></textarea>

                <button type="submit">Salvar Anotação</button>
                <a href="{{ route('nutriapp') }}" class="btn-voltar">Voltar</a>
            </fieldset>
        </form>
    </main>

    
</body>
</html>