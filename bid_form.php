<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require("header.php");
    ?>
    <div class="container">
        <h2 class="text-center">Oфоpмление заявки</h2>
        <form action="add_bid.php" class="w-70 mx-auto" method="post">
            <div class="mb-3">
                <label for="title" class="form-label">Нaзвание бытовой техники</label> <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Описание проблемы</label> <textarea class="form-control" id="description" name="description"></textarea> </div>
            <div class="mb-3">
                <label for="address" class="form-label">Aдpec</label>
                <input type="text" class="form-control" id="address" name="address"> 
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