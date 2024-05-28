<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
<header>
        <div class="logo">
            <a href="../index.html"> <img src="../img/logo.png"></a>
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
<!-- Форма авторизации -->
<div class="container_9">
    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="register.php">зарегистрируйтесь</a>!
        </p>
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>
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