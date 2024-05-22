<?php


include '../config.php';

$name = $_POST['project_name'];
$text1 = $_POST['text1'];

echo $name;
echo $text1;

$info = mysqli_query($conn, "UPDATE settings SET h1='$name',text1='$text1' WHERE 1");

$conn->close();
header("Location: /admin");