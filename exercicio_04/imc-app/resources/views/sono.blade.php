<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliar Sono</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h2>Avaliar Sono</h2>

        <form action="/sono" method="POST">
            @csrf
            <label>Idade:</label>
            <input type="number" name="idade" required>

            <label>Horas de Sono:</label>
            <input type="number" name="horas" required>

            <button type="submit">Avaliar Sono</button>
            <button type="reset">Zerar</button>
            <a href="/" style="text-decoration: none;">
                <button type="button">Voltar</button>
            </a>
        </form>

        @if(isset($avaliacao))
            <p>Seu sono é considerado: {{ $avaliacao }}</p>
        @endif
    </div>
</body>
</html>
