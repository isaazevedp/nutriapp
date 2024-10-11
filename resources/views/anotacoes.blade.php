<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Desperdício de Comida - Nutricionista</title>
    <link rel="stylesheet" href="/css/anotacoes.css">
    @vite(['resources/css/anotacoes.css'])
</head>
<body>
    <header>
        <h1>Controle de Desperdício de Comida</h1>
    </header>

    <main>
    <form action="{{ route('desperdiciostore') }}" method="post">
            @csrf
            <fieldset>
                <legend>Área de Anotações - Nutricionista</legend>
                <label for="data">Data:</label>
                <input type="date" id="data" name="data" required>

                <label for="escola">Turma:</label>
                <input type="text" id="escola" name="escola" placeholder="Informe a Sala" required>

                <label for="quantidade">Quantidade Desperdiçada (kg):</label>
                <input type="number" id="quantidade" name="quantidade" step="0.1" placeholder="Quantidade (kg)" required>

                <label for="descricao">Descrição:</label>
                <textarea id="descricao" name="descricao" rows="4" placeholder="Descreva o desperdício observado..." ></textarea>

                <input type="submit" text="Salvar" class="btn-enviar">
               
                <a href="{{ route('inicio') }}" class="btn-voltar">Voltar</a>
            </fieldset>
        </form>
    </main>

    
</body>
</html>