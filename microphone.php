<?php
session_start();
require_once 'adminka/vendor/connect.php';

// Получение всех товаров из базы данных
$query = "SELECT * FROM tovar";
$result = mysqli_query($db, $query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Apgrade</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.html"> <img src="img/logo.png"></a>
        </div>
        <nav class="menu">
            <a href="katalog.html">Каталог</a>
            <a href="kontact.html">Контакты</a>
            <a href="about.html">О нас</a>
            <a href="">Личный кабинет</a>
        </nav>
        <button class="btn_1">
            
        </button>
    </header>
    <div class="container_4">
        <?php
        $count = 1; // переменная для создания уникального идентификатора формы
        // Вывод товаров из базы данных
        while ($row = mysqli_fetch_assoc($result)) {
            // Проверяем категорию товара
            if ($row['category'] == 'мыши' || $row['category'] == 'клавиатуры' || $row['category'] == 'наушники') {
              continue; // Пропускаем товары с категориями "клавиатуры", "микрофоны" и "наушники"
          }
          
            
            echo '<div class="support_4">';
            echo '<div class="product">';
            echo '<form id="form_k_tovar_' . $count . '" method="post" enctype="multipart/form-data">';
            echo '<img src="adminka/images/' . $row['image'] . '" alt="' . $row['full_name'] . '" style="">';
            echo '<p>' . $row['opisanie'] . '</p>';
            echo '<p>Цена: ' . $row['price'] . ' руб.</p>';
            echo '<p>Категория: ' . $row['category'] . '</p>'; // Выводим категорию товара
            echo '<dialog>';
            echo '<a href="#" class="card__title">' . $row['full_name'] . '</a>';
            echo '<div class="sup_tov">';
            echo '<div class="card">';
            echo '<div class="card__top">';
            echo '<a href="#" class="card__image">';
            echo '<div class="tov_img">';
            echo '<img src="adminka/images/' . $row['image'] . '" alt="' . $row['full_name'] . '" style="">';
            echo '</div>';
            echo '</a>';
            echo '</div>';
            echo '</div>';
            echo '<p class="tov_text">Тип подключения: беспроводной<br>';
            echo 'Радиосвязь на частоте: 2.4 ГГц<br>';
            echo 'Сенсор: BC3332-S, игровой <br>';
            echo 'Время отклика: 1 мс<br>';
            echo 'Частота опроса: 125 ~ 500 Гц<br>';
            echo 'Разрешение: 100~5000 CPI<br>';
            echo '</div>';
            echo '<button type="button" class="close">Закрыть</button>';
            echo '<button type="button" class="card__add">В корзину</button>';
            echo '</dialog>';
            echo '<button type="button" class="show">Просмотр</button>';
            echo '<input type="hidden" name="product_id" value="' . $row['id'] . '">';
            echo '</form>';
            echo '</div>';
            echo '</div>';
            $count++; // увеличиваем переменную для следующей итерации
        }
        ?>
    </div>
    <footer>
         <div class="support_2">
            <a href="index.html"> <img src="img/logo.png"></a>
         </div>
         <div class="support_2">
            <a href="katalog.html">Продукция</a><br>
            <a href="about.html">О нас</a><br>
            <a href="">Личный кабинет</a>
         </div>
         <div class="support_2">
            <a href="katalog.html">Продукция</a><br>
            <a href="about.html">О нас</a><br>
            <a href="">Личный кабинет</a>
         </div>
         <div class="support_2">
            <p>+7 (965) 247-25-35</p>
            <p>apgrade@gmail.com</p>
         </div>
    </footer>
      <script src="script.js"></script>
      <script src="script2.js"></script>
    <script src="korzina_script.js"></script>
</body>
</html>