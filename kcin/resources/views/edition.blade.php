<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serviços de Edição de Livros</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 1.1em;
            line-height: 1.6;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .highlight {
            font-weight: bold;
            color: #2c3e50;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Serviços de Edição de Livros</h1>
    <p><span class="highlight">Descrição:</span> {{ $services['descricao'] }}</p>
    <p><span class="highlight">Custos:</span> {{ $services['custos'] }}</p>
    <p><span class="highlight">Exemplos:</span> {{ $services['exemplos'] }}</p>
</div>

</body>
</html>
