<?php
include __DIR__ . '/classes/User.php';
include __DIR__ . '/classes/Post.php';

$users = [
    new User("user 1", "password", "user1@mail.com"),
    new User("user 2", "password", "user2@mail.com"),
    new User("user 3", "password", "user3@mail.com"),
];

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-2</title>
</head>

<body>

    <div>
        <?php foreach ($users as $user) { ?>
        <ul>
            <li><?php echo $user->username ?></li>
            <li><?php echo $user->password ?></li>
            <li><?php echo $user->email ?></li>
        </ul>
        <?php } ?>
    </div>
    
</body>
</html>