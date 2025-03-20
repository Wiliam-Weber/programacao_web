<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h2>Resultado do IMC</h2>

        <p><strong>Nome:</strong> {{ $validated['name'] }}</p>
        <p><strong>Idade:</strong> {{ $age }} anos</p>
        <p><strong>IMC:</strong> {{ number_format($imc, 2, ',', '.') }}</p>
        <p><strong>Classificação:</strong> {{ $classification }}</p>

        <a href="{{ route('imc.form') }}">
            <button type="button">Refazer Cálculo</button>
        </a>
        <a href="/">
            <button type="button">Voltar</button>
        </a>
    </div>
</body>
</html>
