<!DOCTYPE html>
<html lang="ru">
<?php include("logic.php") ?>                                       <!--Подключаем logic.php-->
<head>
    <meta charset="utf-8">
    <title>Task1</title>

</head>
<body>
<table rules="all" border="1">
    <thead>
    <tr>
        <th></th>
        <?php foreach ($result["subjects"] as $subject): ?>         <!--Выводим предметы-->
            <th><?= $subject ?></th>
        <?php endforeach; ?>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($result["studentsMarks"] as $key => $studentMarks): ?>   <!--Выводим фамилию и оценки ученика-->
        <tr>
            <td><?= $key ?></td>
            <?php foreach ($studentMarks as $mark): ?>
                <td><?= $mark ?: "" ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
</html>
