<!DOCTYPE html>
<html>
<head>
    <title>User Status</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
</head>
<body>

<h3>Add New User</h3>
<form method="post" action="insert.php">
    Name: <input type="text" name="name" required>
    Age: <input type="number" name="age" required>
    <button type="submit">Submit</button>
</form>

<br>

<h3>Users Table</h3>
<table>
    <tr>
        <th>ID</th><th>Name</th><th>Age</th><th>Status</th><th>Action</th>
    </tr>

    <?php
    $conn = new mysqli("localhost", "root", "", "my_users");
    $result = $conn->query("SELECT * FROM users");

    while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['age']}</td>
            <td id='status{$row['id']}'>{$row['status']}</td>
            <td>
                <button onclick='toggleStatus({$row['id']})'>Toggle</button>
                <a href='delete.php?id={$row['id']}' onclick=\"return confirm('هل تريد حذف هذا المستخدم؟');\">Delete</a>
            </td>
          </tr>";
}
    ?>
</table>

<script>
function toggleStatus(id) {
    fetch(`toggle.php?id=${id}`)
        .then(res => res.json())
        .then(data => {
            document.getElementById(`status${id}`).innerText = data.status;
        });
}
</script>
<form method="post" action="insert.php">
    Name: <input type="text" name="name" required>
    Age: <input type="number" name="age" required>
    <button type="submit">Submit</button>
</form>
</body>
</html>