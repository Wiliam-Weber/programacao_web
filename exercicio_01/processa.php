<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Dados Recebidos</h2>

<?php
$metodo = $_SERVER["REQUEST_METHOD"];
echo "<p><strong>Método utilizado:</strong> $metodo</p>";

if ($metodo == "POST") {
    $dados = $_POST;
} else {
    $dados = $_GET;
}

echo "<h3>Dados do Formulário:</h3>";
foreach ($dados as $chave => $valor) {
    echo "<p><strong>$chave:</strong> " . htmlspecialchars($valor) . "</p>";
}

echo "<h3>Cabeçalhos da Requisição:</h3>";
echo "<pre>";
foreach (getallheaders() as $nome => $valor) {
    echo "$nome: $valor\n";
}
echo "</pre>";
?>

</body>
</html>
