<?php
    require("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">Peгистрация</h2>
        <form action="add_user.php" class="w-70 mx-auto" method="post"> 
            <div class="mb-3">
                <label for="name" class="form-label">ФИO</label>
                <input type="text" class="form-control" id="name" name="name"> 
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Телефoн</label>
                <input type="text" class="form-control" id="phone" name="phone">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Электронная почта</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="email@example.com"> 
            </div>
            <div class="mb-3">
                <label for="login" class="form-label">Лoгин</label>
                <input type="text" class="form-control" id="login" name="login">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Пapoль</label>
                <input type="password" class="form-control" id="password" name="password"> 
            </div>
            <div class="mb-3 text-center">
                <input type="submit" class="btn btn-success" value="Отправить">
            </div>
        </form>
    </div>
    <footer class="text-right text-lg-start bg-body-tertiary text-muted"> 
  <!-- Создаем футер с заданными классами -->
  <section class=""> 
    <!-- Создаем секцию футера -->
    <div class="container text-right text-md-start mt-5"> 
      <!-- Создаем контейнер с заданными классами -->
      <div class="row mt-3"> 
        <!-- Создаем строку в контейнере -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4"> 
          <!-- Создаем колонку в строке -->
          <h6 class="text-uppercase fw-bold mb-4"> 
            <!-- Создаем заголовок в колонке -->
            <i class="fas fa-gem me-3"></i>Потеряшкин
          </h6>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4"> 
          <!-- Создаем вторую колонку в строке -->
          <p> <a href="auth_form.php" class="text-reset">Объявления</a></p> 
          <!-- Добавляем ссылку на объявления -->
          <p> <a href="info.php" class="text-reset">О проекте</a> </p> 
          <!-- Добавляем ссылку на страницу "О проекте" -->
        </div>
      </div>
    </div>
  </section>
  <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);"> 
  <!-- Создаем блок с копирайтом и стилями -->
    © 2024 Copyright: Потеряшкин
  </div>
</footer> <!-- Закрываем тег футера -->
</body>
</html>