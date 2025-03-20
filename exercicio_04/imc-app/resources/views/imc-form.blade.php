<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de IMC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h2>Calculadora de IMC</h2>
        
        <form action="{{ route('imc.calculate') }}" method="POST">
            @csrf
            <label>Nome:</label>
            <input type="text" name="name" required>

            <label>Data de Nascimento:</label>
            <input type="date" name="birth_date" required>

            <label>Peso (kg):</label>
            <input type="number" name="weight" step="any" required>

            <label>Altura (m):</label>
            <input type="number" name="height" step="any" required>

            <button type="submit">Calcular IMC</button>
            <button type="reset">Zerar</button>
            <a href="/"><button type="button">Voltar</button></a>
        </form>
    </div>
</body>
</html>



