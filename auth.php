<?php
require_once('db.php'); // Подключаем файл db.php для доступа к базе данных
if(!empty(($_POST['login'])) && !empty(($_POST['password']))) { // Проверяем, были ли отправлены данные для входа
    // Подготавливаем SQL-запрос для выборки пользователя по логину из базы данных
    $stmt = $conn->prepare("SELECT * FROM users WHERE login=?");
    $stmt->execute([
        $_POST['login']
    ]);
}
$user = $stmt->fetch(); // Получаем результат запроса в виде ассоциативного массива
if ($user) { // Если пользователь найден в базе данных
    // Проверяем, соответствует ли введенный пароль хэшированному паролю в базе данных
    if (password_verify($_POST['password'], $user['password'])) {
        session_start(); // Запускаем сессию PHP для работы с переменными сеанса
        $_SESSION['user_id'] = $user['id']; // Сохраняем идентификатор пользователя в сессии
        $_SESSION['role'] = $user['role']; // Сохраняем роль пользователя в сессии
        header("Location: account.php"); // Перенаправляем пользователя на страницу учетной записи
    } else {
        header("Location: index.php?message=error"); // Перенаправляем на главную страницу с сообщением об ошибке
    }
} else {
    header("Location: index.php?message=error_null"); // Перенаправляем на главную страницу с сообщением о пустых данных
}