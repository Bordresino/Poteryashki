<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
body {
  display: flex;
  flex-direction: column;
  min-height: 100vh;
}

footer {
  margin-top: auto;
}
        footer {  position:absolute; /* Задаем абсолютное позиционирование */
                  left:0; /* Устанавливаем отступ слева */
                  bottom:0; /* Перемещаем футер вниз на 150px */
                  height:250px; /* Задаем высоту футера */
                  width:100%; /* Задаем ширину футера */ }
        .dog   {height: 200px; /* Устанавливаем высоту изображения собаки */
                  width: 30%; /* Устанавливаем ширину изображения собаки */
                  margin-left: 35%; /* Устанавливаем отступ слева для изображения собаки */
                  position: absolute; /* Позиционируем изображение абсолютно внутри родительского контейнера */}
    </style>
</head>
<body>
<div height="500"></div>
<footer class="text-right text-lg-start bg-body-tertiary text-muted"> 
  <!-- Создаем футер с заданными классами -->
  <img src="img/dog.png" alt="" class="dog"> <!-- Вставляем изображение собаки с указанными классом и атрибутами -->
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