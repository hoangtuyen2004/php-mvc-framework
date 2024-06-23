<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
</head>
<body>
    <h1>User List</h1>
    <ul>
        <?php foreach ($user as $us): ?>
            <li><?= $us['name'] ?> (<?= $us['email'] ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>