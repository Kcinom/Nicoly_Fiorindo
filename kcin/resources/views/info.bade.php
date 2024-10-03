<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Nós - Kcin Editoria</title>
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
            font-size: 16px;
            color: #555;
        }
        strong {
            color: #000;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Sobre Nós</h1>
        <p><strong>Missão:</strong> {{ $companyInfo['missao'] }}</p>
        <p><strong>Visão:</strong> {{ $companyInfo['visao'] }}</p>
        <p><strong>História:</strong> {{ $companyInfo['historia'] }}</p>
        <p><strong>Contato:</strong> {{ $companyInfo['contato'] }}</p>
    </div>
</body>
</html>
