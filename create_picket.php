<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Ticket</title>
    <style>
        .central {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .form-container {
            max-width: 500px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="central">
        <div class="form-container">
            <h2>Enviar Ticket</h2>
            <form action="submit_ticket.php" method="post">
                <label for="nome">Nome:</label><br>
                <input type="text" id="nome" name="nome" required><br><br>
                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email" required><br><br>
                <label for="problema">Problema:</label><br>
                <textarea id="problema" name="problema" rows="4" required></textarea><br><br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </div>
</body>
</html>