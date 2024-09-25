<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Приветствие пользователя</title>
</head>
<body>
    <h1>Информация об авторе</h1>
    <p>Ваше имя: [Ваше имя]</p>
    
    <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])): ?>
        <h2>Привет, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h2>
        <a href="exit.php">Выйти</a>
    <?php else: ?>
        <form action="post.php" method="POST">
            <label for="username">Введите ваше имя:</label>
            <input type="text" id="username" name="username" required>
            <button type="submit">Отправить</button>
        </form>
    <?php endif; ?>
</body>
</html>
