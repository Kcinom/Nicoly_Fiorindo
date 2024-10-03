<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Solicitar Design de Capa</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 100px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
            color: #333;
        }

        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 18px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }

        .status-message {
            margin-top: 20px;
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 4px;
            text-align: center;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Solicitar Design de Capa</h1>

        <!-- Formulário para solicitar design de capa -->
        <form method="POST" action="{{ route('services.cover.submit') }}">
            @csrf

            <!-- Campo para o título do livro -->
            <label for="bookTitle">Título do Livro:</label>
            <input type="text" name="bookTitle" id="bookTitle" placeholder="Digite o título do livro" required>

            <!-- Campo para as preferências de design -->
            <label for="preferences">Preferências de Design:</label>
            <textarea name="preferences" id="preferences" rows="5" placeholder="Descreva suas preferências de design" required></textarea>

            <!-- Botão de envio -->
            <button type="submit"><i class="fas fa-paper-plane"></i> Enviar Solicitação</button>
        </form>

        <!-- Exibe uma mensagem de sucesso caso a solicitação seja enviada -->
        @if (session('status'))
            <div class="status-message">
                <p>{{ session('status') }}</p>
            </div>
        @endif
    </div>

</body>
</html>
