<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма логіну</title>
</head>
<body>
    <h2>Вхід</h2>
    <form action="login_form.php" method="POST">
        <label for="username">Логін:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Пароль:</label>
        <input type="password" id="password" name="password" required><br><br>

        <input type="submit" value="Увійти">
    </form>
</body>
</html>
