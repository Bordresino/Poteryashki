<?php   
    require("header.php"); // Подключаем верхнюю часть страницы
    require("db.php"); // Подключаем файл для работы с базой данных
    // Проверяем, является ли пользователь администратором
    if($_SESSION['role'] == 1) {
        // Если пользователь администратор, получаем все заявки с информацией о пользователях
        $stmt = $conn->query("select bids.*,users.name, users.phone, users.email from bids join users on bids.user_id=users.id"); 
        $bids = $stmt->fetchAll();
    } else {
        // Если пользователь не администратор, перенаправляем его на страницу аутентификации
        header("Location: auth_form.php");
    }
?>
<div class="container-fluid w-75 mb-3 mx-avto">
    <h2 class="text-center р-3">Aдминпанель</h2> <!-- Заголовок административной панели -->
    <div class="container border">
        <h3>Заявки пользователей:</h3>
        <?php if(isset($_GET['message'])) { // Проверяем, есть ли сообщение для отображения
            if($_GET['message']=='success'){?> <!-- Если есть сообщение об успешном изменении статуса -->
                <div id='liveAlertPlaceholder' class="alert alert-info alert-dismissible fade show" role="alert">
                    <i class="bi bi-check-square" style="color:primary;"></i>
                    Статус заявки успешно изменен <!-- Отображаем сообщение об успешном изменении статуса заявки -->
                </div>
        <?php }} unset($_GET['message'])?>
        <div class='table-responsive'>
            <table class="table ">
                <thead>
                    <tr class="table">
                        <th scope="col">№</th>
                        <th scope="col">ФИО клиента</th>
                        <th scope="col">Телефон</th>
                        <th scope="col">Email</th>
                        <th scope="col">Порода</th>
                        <th scope="col">Внешний вид</th>
                        <th scope="col">Адрес</th>
                        <th scope="col">Статус</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $id = 1; // Инициализируем переменную для нумерации заявок
                        foreach($bids as $bid){ // Цикл для отображения каждой заявки
                    ?>
                    <tr>
                        <td><?=$id?></td>
                        <td><?=$bid['name']?></td>
                        <td><?=$bid['phone']?></td>
                        <td><?=$bid['email']?></td>
                        <td class=""><?=$bid['title']?></td>
                        <td><?=$bid['description']?></td>
                        <td><?=$bid['address']?></td>
                        <td><?=$bid['status']?></td>
                        <?php if($bid['status']=='Новая'){?> <!-- Если статус заявки "Новая", отображаем кнопки для изменения статуса -->
                            <td>
                                <a href="update_bid.php?id=<?=$bid['id']?>&status=Подтверждена" class="btn btn-success">Подтвердить</a>
                            </td>
                            <td>
                                <a href="update_bid.php?id=<?=$bid['id']?>&status=Отменена" class="btn btn-danger">Отменить</a>
                            </td>
                    </tr>
                    <?php } $id++;}?>
                </tbody>
            </table>
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