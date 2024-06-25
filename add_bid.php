<?php
session_start(); // Запускаем сессию PHP для работы с переменными сеанса
require_once('db.php'); // Подключаем файл db.php для доступа к базе данных
// Проверяем, были ли отправлены все необходимые данные для создания заявки
if(!empty(($_POST['title'])) && !empty(($_POST['description'])) && !empty(($_POST['address']))) { 
    // Подготавливаем SQL-запрос для добавления новой заявки в базу данных
    $stmt = $conn->prepare('INSERT INTO bids (title, description, address, user_id) VALUES (?, ?, ?, ?)'); 
    // Выполняем SQL-запрос, передавая значения из формы и идентификатор текущего пользователя из сессии
    $stmt->execute([
        $_POST['title'],
        $_POST['description'],
        $_POST['address'],
        $_SESSION['user_id']
    ]);
}
header("Location: account.php?message=success"); 
// Перенаправляем на страницу учетной записи с сообщением о успешном создании заявки
?>