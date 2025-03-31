<?php
try {
    // Параметры подключения
    $host = 'localhost';
    $dbname = 'test_db';
    $user = 'postgres';
    $password = 'password';

    // Подключаемся через PDO
    $pdo = new PDO("pgsql:host=$host;dbname=$dbname", $user, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Включаем режим исключений

    // Пример запроса
    $stmt = $pdo->query("SELECT version()");
    $version = $stmt->fetchColumn();

    // Выводим результат (если нет ошибок)
    echo "<h1>Успешное подключение к PostgreSQL!</h1>";
    echo "<p>Версия PostgreSQL: <strong>$version</strong></p>";

} catch (PDOException $e) {
    // Ловим ошибку и выводим её в браузер
    echo "<h1 style='color: red;'>Ошибка подключения к PostgreSQL</h1>";
    echo "<p><strong>Причина:</strong> " . $e->getMessage() . "</p>";
    echo "<p>Проверьте настройки подключения или обратитесь к администратору.</p>";

    // Дополнительно можно записать ошибку в лог (опционально)
    error_log("PostgreSQL Error: " . $e->getMessage());
}
?>