<?php
    session_start(); // Начинаем сессию для работы с данными сеанса пользователя.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Потеряшкин</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <!-- Подключаем стили Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
      <!-- Подключаем скрипты Bootstrap -->
</head>
<body>
<header class="container-fluid bg-dark">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="img/logo.png" width="45px" height="45px" alt="Logo">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" href="index.php">Главная</a></li> 
                        <li class="nav-item"><a class="nav-link" href="info.php">О нас</a></li> 
                        <!-- Добавляем пункт меню для главной страницы -->
                        <?php 
                        if(isset($_SESSION['user_id'])==1) { ?> 
                        <!-- Проверяем, авторизован ли пользователь -->
                            <li><a class="nav-link" href="account.php">Личный кабинет</a></li> 
                            <!-- Добавляем пункт меню для личного кабинета -->
                            <li><a class="nav-link" href="logout.php">Выйти</a></li> 
                            <!-- Добавляем пункт меню для выхода из аккаунта -->
                            <?php if($_SESSION['role']==1) {?> 
                                <!-- Проверяем, является ли пользователь администратором -->
                                <li><a class="nav-link" href="admin.php">Админ панель</a></li> 
                                <!-- Добавляем пункт меню для администратора -->
                            <?php } ?>
                        <?php } else { ?> <!-- Если пользователь не авторизован -->
                            <li><a class="nav-link" href="reg.php">Регистрация</a></li> 
                            <!-- Добавляем пункт меню для регистрации -->
                            <li><a class="nav-link" href="auth_form.php">Войти</a></li> 
                            <!-- Добавляем пункт меню для входа -->
                        <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
</header>