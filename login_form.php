<?php
// Вказуємо абсолютний шлях до файлу з даними для логіну та паролю
$credentials_file = '/var/www/html/credentials.txt';

// Перевірка, чи файл існує
if (file_exists($credentials_file)) {
    // Читання даних з файлу
    $correct_credentials = file_get_contents($credentials_file);
    $correct_credentials = explode("\n", trim($correct_credentials));

    // Перевірка, чи існують введені дані
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $input_username = $_POST['username'];
        $input_password = $_POST['password'];

        // Перевірка на відповідність логіну та паролю
        if ($input_username == $correct_credentials[0] && $input_password == $correct_credentials[1]) {
            echo "Ви залогінені.";
        } else {
            echo "Невірний логін або пароль.";
        }
    } else {
        echo "Будь ласка, заповніть всі поля.";
    }
} else {
    echo "Файл з даними не знайдений.";
}
?>

