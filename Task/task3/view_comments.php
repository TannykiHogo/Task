<?php
include("db.php");


// Извлечение комментариев из базы данных
$sql = "SELECT * FROM comments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<p><strong>" . $row['name'] . "</strong>: " . $row['comment'] . "</p>";
        echo "<p><small>" . $row['created_at'] . "</small></p>";
        echo "<hr>";
    }
} else {
    echo "Пока нет комментариев.";
}

$conn->close();
