<?php
    require("header.php"); // Подключаем файл header.php для вставки верхней части страницы
    require("db.php"); // Подключаем файл db.php для доступа к базе данных
    $stmt = $conn->prepare("select * from bids where user_id=?"); // Подготавливаем SQL-запрос для выборки заявок текущего пользователя
    $stmt->execute([$_SESSION['user_id']]); // Выполняем SQL-запрос, передавая идентификатор текущего пользователя из сессии
    $bids = $stmt->fetchAll(); // Получаем все строки результата запроса в виде массива ассоциативных массивов
?>
    <div class="container-fluid w-75 mb-3 mx-avto">
        <h2 class="text-center p-3">Личный кабинет</h2>
        <div class="container border p-5">
            <a href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bid">Новая заявкa</a> 
            <!-- Кнопка для открытия модального окна для создания новой заявки -->
            <h3>Ваши заявки: </h3>
            <!-- Модальное окно для создания новой заявки -->
            <div class="modal fade" id="bid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Новая заявка</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="add_bid.php" class="w-70 mx-auto" method="post"> <!-- Форма для создания новой заявки -->
                                    <div class="mb-3">
                                        <input type="text" placeholder="Порода питомца" class="form-control" id="title" name="title">
                                    </div>
                                    <div class="mb-3">
                                        <textarea class="form-control" placeholder="Внешний вид питомца"id="description" name="description"></textarea> 
                                    </div>
                                    <div class="mb-3">
                                        <input type="text" placeholder="Адрес"class="form-control" id="address" name="address"> 
                                    </div>
                                    <div class="mb-3 text-center">
                                        <input type="submit" class="btn btn-success" value="Отправить"> <!-- Кнопка для отправки формы создания заявки -->
                                    </div>
                                </form>
                        </div>
      
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <?php foreach ($bids as $bid) { ?> <!-- Цикл для отображения всех заявок текущего пользователя -->
                <div class="col">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Зaявка <?=$bid['id']?></h5> <h5 class="card-title"> <?=$bid['title']?></h5> <!-- Вывод заголовка и ID заявки -->
                        <p class="card-text"><?=$bid['description'] ?></p> <p class="card-text"><?=$bid['status'] ?></p> <!-- Вывод описания и статуса заявки -->
                    </div>
                </div>
            </div>
            <?php } ?>
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