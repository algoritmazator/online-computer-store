<!DOCTYPE html>
<html>
<head>
    <title>Добавление товара</title>
    <link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
    <header>
        <div class="logo">
            <a href="index.html"> <img src="../img/logo.png"></a>
        </div>
        <nav class="menu">
            <a href="katalog.html">Каталог</a>
            <a href="kontact.html">Контакты</a>
            <a href="about.html">О нас</a>
            <a href="php-auth v1 (2)/index.php">Личный кабинет</a>
        </nav>
        <button class="btn_1">
            
        </button>
    </header>
    <div class="container_9">
    <form action="add_product.php" method="post">
        <label for="category">Категория:</label>
        <select name="category" id="category">
            <option value="keyboard">Клавиатура</option>
            <option value="headphones">Наушники</option>
            <option value="microphone">Микрофон</option>
            <option value="computermice">Мышь</option>
        </select><br><br>
        <label for="name">Название товара:</label>
        <input type="text" name="name" id="name"><br><br>
        <label for="price">Цена:</label>
        <input type="text" name="price" id="price"><br><br>
        <input type="submit" value="Добавить товар">
    </form>
    </div>
    <footer>
        <div class="support_2">
           <a href="index.html"> <img src="../img/logo.png"></a>
        </div>
        <div class="support_2">
           <a href="katalog.html">Продукция</a><br>
           <a href="about.html">О нас</a><br>
           <a href="kontact.html">Контакты</a><br>
           <a href="adminka/register.php">Вы администратор?</a><br>
           <a href="">Личный кабинет</a>
        </div>
        <div class="support_2">
           <a href="microphone.html">Микрофоны</a><br>
           <a href="keyboard.html">Клавиатуры</a><br>
           <a href="computermice.html">Мыши</a><br>
           <a href="headphones.html">Наушники</a>
        </div>
        <div class="support_2">
           <p>+7 (965) 247-25-35</p>
           <p>apgrade@gmail.com</p>
        </div>
   </footer>
</body>
</html>