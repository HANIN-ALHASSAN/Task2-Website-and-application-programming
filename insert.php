<?php
$conn = new mysqli("localhost", "root", "", "my_users");

$name = $_POST['name'];
$age = $_POST['age'];

$stmt = $conn->prepare("INSERT INTO users (name, age) VALUES (?, ?)");
$stmt->bind_param("si", $name, $age);
$stmt->execute();

header("Location: inex.php");
?>