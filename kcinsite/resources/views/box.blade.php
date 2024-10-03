<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Box de Livros Surpresa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            font-size: 18px;
            line-height: 1.6;
        }
        .price {
            font-size: 24px;
            color: #e74c3c;
            font-weight: bold;
        }
        button {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
        }
        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Box de Livros Surpresa</h1>
        <p><strong>Descrição:</strong> {{ $box['descricao'] }}</p>
        <p><strong>Preço:</strong> <span class="price">{{ $box['preco'] }}</span></p>
        
        <!-- Formulário para comprar o box de livros surpresa -->
        <form method="POST" action="{{ route('shop.checkout') }}">
            @csrf
            <button type="submit">Comprar</button>
        </form>
    </div>
</body>
</html>
