<!DOCTYPEhtml>
<html lang="ru">
<head>
    <title>Система комментариев</title>
</head>
<body>
<h2>Оставить комментарий</h2>
<form action="add_comment.php" method="POST">                   <!--Форма обрабатывается add_comment.php методом POST-->
    <label>Имя:</label><br>
    <label>
        <input type="text" name="name" required>                <!--Ввод имени, required атрибут обязательного заполнения-->
    </label><br><br>
    <label>Комментарий:</label><br>
    <label>
        <textarea name="comment" rows="5" required></textarea>  <!--Ввод комментария-->
    </label><br><br>
    <input type="submit" value="Отправить комментарий">
</form>

<h2>Комментарии</h2>
<?php include 'view_comments.php'; ?>                           <!--Подключаем view_comments.php для отображения существующих комментариев-->
</body>
</html>