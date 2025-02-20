<?php
include("db.php");

// Получение данных из формы
$name = $_POST['name'];
$comment = $_POST['comment'];
$sql = $conn ->prepare('INSERT INTO comments (name,comment) VALUES (?,?)');
$sql->bind_param('ss',$name,$comment);
// Вставка комментария в базу данных
if ($sql->execute())
{
    header('location: index.php');              //Перезагружаем страницу после успешного добавление
    die();
}
else
{
    echo "Ошибка: " . $sql . "<br>" . $conn->error;     //Выводим ошибки
}

$conn->close();

