<?php
$conn = new mysqli("localhost", "root", "", "my_users");

$id = $_GET['id'];
$conn->query("DELETE FROM users WHERE id=$id");

header("Location: inex.php");
?>