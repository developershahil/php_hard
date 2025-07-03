<?php
// File to store data if made then fetch otherwise make new automatically
$file = 'users.json';

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id   = $_POST['id'];
    $name = $_POST['name'];

    // Load existing users from file or initialize an empty array , make array in json file
    $users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

    // Append new user in json formate
    $users[] = ['id' => $id, 'name' => $name];

    //saved data in file and then return to this page , data encoded injson file that fetch from input
    file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));
}

// this portion is for read json file and decode data here and the show in html vontent
$storedUsers = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

?>

<!DOCTYPE html>
<html>
<head>
    <title>User ID and Name Storage</title>
</head>
<body>
    <h1>Store User ID and Name</h1>
    <form method="POST">
        <label>ID: <input type="text" name="id" required></label><br><br>
        <label>Name: <input type="text" name="name" required></label><br><br>
        <button type="submit">Save</button>
    </form>

    <h2>Stored Users</h2>
    <ul>
        <!-- loop for data entery that show data that entered in form -->
        <?php foreach ($storedUsers as $user): ?>
                
            <li>ID: <?= htmlspecialchars($user['id']) ?> — Name: <?= htmlspecialchars($user['name']) ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

