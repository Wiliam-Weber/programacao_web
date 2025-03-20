<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicação Laravel</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h2>Bem-vindo!</h2>
        <ul>
            <li><a href="/imc"><button type="button">Calcular IMC</button></a></li>
            <li><a href="/sono"><button type="button">Avaliar Sono</button></a></li>
            <li><a href="/viagem"><button type="button">Cálculo de Gasto de Viagem</button></a></li>
        </ul>
    </div>
</body>
</html>
