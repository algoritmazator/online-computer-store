<?php
// Подключение к базе данных
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение данных из формы
$category = $_POST['category'];
$name = $_POST['name'];
$price = $_POST['price'];

// Запрос на добавление товара в соответствующую таблицу
$sql = "INSERT INTO $category (name, price) VALUES ('$name', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "Товар успешно добавлен";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>