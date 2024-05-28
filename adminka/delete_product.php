<?php
session_start();
require_once 'vendor/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['product_id'])) {
        $product_id = mysqli_real_escape_string($db, $_POST['product_id']);

        // Удаление товара из базы данных
        $query = "DELETE FROM tovar WHERE id = $product_id";
        mysqli_query($db, $query);

        $_SESSION['message'] = "Товар успешно удален";
    } else {
        $_SESSION['message'] = "Ошибка при удалении товара";
    }

    header("Location: product.php"); // Перенаправление на страницу со списком товаров
    exit();
}
?>
