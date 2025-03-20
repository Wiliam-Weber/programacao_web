<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Gasto de Viagem</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h2>Cálculo de Gasto de Viagem</h2>

        <form action="/viagem" method="POST">
            @csrf
            <label>Distância (km):</label>
            <input type="number" name="distancia" required>

            <label>Consumo (km/l):</label>
            <input type="number" name="consumo" required>

            <label>Preço do combustível (R$):</label>
            <input type="number" name="preco" step="any" required>

            <button type="submit">Calcular Gasto</button>
            <button type="reset">Zerar</button>
            <a href="/" style="text-decoration: none;">
                <button type="button">Voltar</button>
            </a>
        </form>

        @if(isset($gasto))
            <p>Custo estimado: R$ {{ number_format($gasto, 2, ',', '.') }}</p>
        @endif
    </div>
</body>
</html>
