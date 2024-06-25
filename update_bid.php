<?php
session_start(); // Запускаем сессию PHP для работы с переменными сеанса
require('db.php'); // Подключаем файл db.php для доступа к базе данных
// Проверяем, установлены ли параметры 'id' и 'status' в запросе GET
if(isset($_GET['id']) && isset($_GET['status'])){
    // Подготавливаем SQL-запрос для обновления статуса заявки в таблице bids
    $stmt = $conn->prepare('UPDATE bids SET status=? WHERE id=?');
    // Выполняем SQL-запрос, передавая значения параметров status и id из запроса GET
    $stmt->execute([
        $_GET['status'],
        $_GET['id']
    ]);
    // Перенаправляем пользователя на страницу admin.php с параметром message=success
    header('Location: admin.php?message=success');
}