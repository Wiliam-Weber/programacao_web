<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do IMC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header bg-success text-white text-center">
                        <h2>Resultado do IMC</h2>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center">Olá, {{ $name }}!</h3>
                        <p class="text-center">Você tem {{ $age }} anos, sua altura é {{ $height }} metros e seu peso é {{ $weight }} kg.</p>
                        <p class="text-center">Seu IMC é: {{ $imc }}.</p>
                        <p class="text-center">Classificação: <strong>{{ $classification }}</strong></p>

                        <div class="text-center">
                            <a href="{{ route('show.form') }}" class="btn btn-primary">Calcular Outro IMC</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
