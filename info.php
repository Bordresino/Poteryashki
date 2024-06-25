<?php
        require("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<main>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->
  <div class="container marketing">
    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><span class="text-muted"></span></h2>
        <p class="lead text-center">Добро пожаловать на Потеряшкин, ваш надежный помощник в поиске пропавших домашних животных. Мы — команда энтузиастов, объединенных общей целью: помочь вам воссоединиться с вашими питомцами. Наш сайт был создан как ответ на растущую потребность в централизованной, доступной и эффективной системе поиска пропавших животных.</p>
      </div>
      <div class="col-md-5">
      <img src="img/dog2.jpg" alt="" width="500" height="500">
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7 order-md-2">
        <h2 class="featurette-heading">Мы предлагаем:<span class="text-muted"></span></h2>
        <p class="lead">
    <li>Базу данных пропавших и найденных животных: Удобный поиск с фильтрами по виду, породе, возрасту и местоположению.</li>
    <li>Систему уведомлений: Оперативное информирование о новых сообщениях и потенциальных совпадениях.</li>
    <li>Ресурсы и советы: Информация о том, как предотвратить потерю животных и обеспечить их безопасность.</li>
</p>
      </div>
      <div class="col-md-5 order-md-1">
      <img src="img/hampter.jpg" alt="" width="500" height="500">
      </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading"><span class="text-muted"></span></h2>
        <p class="lead">Мы верим, что каждое животное заслуживает быть в безопасности и любви. Вместе мы можем создать сообщество, где каждый питомец найдет свой дом, а каждый владелец — своего верного друга.</p>
      </div>
      <div class="col-md-5">
        <img src="img/cat.png" alt="" width="500" height="500">
      </div>
    </div>
    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->
  </div><!-- /.container -->
  <!-- FOOTER -->
</main>
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
    <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
