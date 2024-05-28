<?php
// Подключение к базе данных
$servername = "localhost";
$username = "ваше_имя_пользователя";
$password = "ваш_пароль";
$dbname = "имя_вашей_базы_данных";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// SQL запрос для получения информации о мыши из таблицы computermice
$sql = "SELECT * FROM computermice WHERE id = 1"; // Предполагается, что мыши с id=1

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    // Вывод информации в HTML-код карточки
    echo '<div class="support_4">
            <img src="img/' . $row["image"] . '">
            <p>' . $row["description"] . '</p>
            <dialog>
                <p>' . $row["model"] . '</p>
                <div class="sup_tov">
                    <div class="tov_img">
                        <img src="img/' . $row["image"] . '">
                    </div>
                    <p class="tov_text">' . $row["specifications"] . '</p>
                </div>
                <button id="close">Закрыть</button>
                <button>В корзину</button>
            </dialog>
            <button id="show">Просмотр</button>
        </div>';
} else {
    echo "Нет результатов";
}

$conn->close();
?>