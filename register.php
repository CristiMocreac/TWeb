<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (!empty($username) && !empty($password)) {
        $file = 'users.json';
        $users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

        foreach ($users as $user) {
            if ($user["username"] === $username) {
                echo "Username already exists! Please choose another.";
                exit;
            }
        }

        $newUser = [
            "username" => $username,
            "password" => password_hash($password, PASSWORD_DEFAULT)
        ];

        $users[] = $newUser;
        file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));

        $_SESSION["username"] = $username;
        echo "success"; // this will be checked in AJAX
        exit;
    } else {
        echo "Please fill in all fields.";
    }
}
?>
