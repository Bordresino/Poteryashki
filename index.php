<?php
    include("header.php"); // Включаем файл header.php, который, вероятно, содержит общую часть верхнего колонтитула сайта.
    session_start(); // Запускаем сессию для работы с сеансами на сервере.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Указываем метаданные для корректного отображения на мобильных устройствах -->
    <title>Потеряшкин</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
    <!-- Подключаем стили Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Подключаем скрипты Bootstrap -->
    <style>
                .dog   {height: 200px; /* Устанавливаем высоту изображения собаки */
                  width: 30%; /* Устанавливаем ширину изображения собаки */
                  margin-left: 35%; /* Устанавливаем отступ слева для изображения собаки */
                  position: absolute; /* Позиционируем изображение абсолютно внутри родительского контейнера */}
    </style>
</head>
<body>
    <br> <!-- Добавляем перенос строки -->
    <div class="container-fluid w-50 mb-3 mx-avto"> <!-- Создаем контейнер Bootstrap -->
        <div class="row container-fluid w-100">
            <div class="col-sm-5 text-center w-50">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Потеряли питомца</h5>
                        <p class="card-text">Создайте объявление о пропаже питомца</p>
                        <a href="#" class="btn btn-success">Создать объявление</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 text-center w-50">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Найден питомец</h5>
                        <p class="card-text">Создайте объявление о находке питомца</p>
                        <a href="#" class="btn btn-success">Создать объявление</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container col-xxl-8 px-4 py-5">
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="img/pet.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Почему мы?</h1>
        <p class="lead">Наш сайт представляет собой важный социальный ресурс, который служит нескольким целям:
        <li>Укрепление общественной безопасности: Бродячие животные могут стать причиной дорожно-транспортных происшествий и распространения заболеваний. Сайт помогает быстро находить и возвращать животных их владельцам, тем самым снижая эти риски.
        </li><li>Поддержка благополучия животных: Пропавшие питомцы часто оказываются в опасности. Сайт способствует их скорейшему возвращению домой, предотвращая возможные травмы, болезни или гибель.
        </li><li>Эмоциональная поддержка владельцев: Потеря питомца может быть травматичным событием. Сайт обеспечивает владельцам надежду и практическую помощь в поиске, снижая уровень стресса и беспокойства.
        </li><li>Содействие в выполнении законодательства: Во многих странах существуют законы, требующие от владельцев ответственного отношения к своим животным. Сайт помогает владельцам соответствовать этим требованиям.
        </li><li>Социальная ответственность и вовлеченность: Сайт позволяет сообществу активно участвовать в поиске пропавших животных, способствуя формированию более ответственного и заботливого общества.</li>
</p>
      </div>
    </div>
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
