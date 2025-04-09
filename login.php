<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST["username"]);
    $password = trim($_POST["password"]);

    if (!empty($username) && !empty($password)) {
        $file = 'users.json';
        $users = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

        foreach ($users as $user) {
            if ($user["username"] === $username && password_verify($password, $user["password"])) {
                $_SESSION["username"] = $username;
                echo "success";
                exit;
            }
        }

        echo "Invalid username or password.";
    } else {
        echo "Please fill in all fields.";
    }
}
?>
