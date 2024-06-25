<?php
require_once('db.php'); // Подключаем файл db.php для доступа к базе данных

// Проверяем, были ли отправлены все необходимые данные для регистрации
if(!empty(($_POST['name'])) && !empty(($_POST['phone'])) && !empty(($_POST['email'])) 
    && !empty(($_POST['login'])) && !empty(($_POST['password']))) {
    // Подготавливаем SQL-запрос для проверки уникальности логина в базе данных
    $stmt = $conn->prepare("SELECT * FROM users WHERE login=?");
    $stmt->execute([
        $_POST['login']
    ]);
    $user = $stmt->fetch(); // Получаем результат запроса в виде ассоциативного массива
    if($user){
        header("Location: index.php?message=unique"); 
        // Перенаправляем на главную страницу с сообщением о неподходящем логине
    } else {
        // Подготавливаем SQL-запрос для добавления нового пользователя в базу данных
        $stmt = $conn->prepare("INSERT INTO users (name, phone, email, login, password) VALUES (?, ?, ?, ?, ?)");
        // Выполняем SQL-запрос, передавая значения из формы и хэшируя пароль перед сохранением в базе данных
        $stmt->execute([
            $_POST['name'],
            $_POST['phone'],
            $_POST['email'],
            $_POST['login'],
            password_hash($_POST['password'], PASSWORD_DEFAULT)
        ]);
        header("Location: index.php?message=create"); 
        // Перенаправляем на главную страницу с сообщением о успешной регистрации
    }
} else {
    header("Location: index.php?message=error_null"); 
    // Перенаправляем на главную страницу с сообщением о недостаточных данных
}
?>