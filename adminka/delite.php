<?php
session_start();
require_once 'connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['delete_id'])) {
    $deleteId = mysqli_real_escape_string($db, $_GET['delete_id']);

    // Получение информации об изображении для удаления
    $query = "SELECT image FROM tovar WHERE id = $deleteId";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_assoc($result);
    $imagePath = "images/" . $row['image'];

    // Удаление записи из базы данных
    $query = "DELETE FROM tovar WHERE id = $deleteId";
    mysqli_query($db, $query);

    // Удаление изображения с сервера
    unlink($imagePath);

    $_SESSION['message'] = "Товар успешно удален";
}

header("Location: ../tovar.php");
exit();
?>