<?php
include "config.php";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = $user['username'];
            header("Location: home.php");
        } else {
            echo "Sai mật khẩu!";
        }
    } else {
        echo "Không tìm thấy tài khoản!";
    }
}
?>

<form method="POST">
    <h2>Đăng nhập</h2>
    Email: <input type="email" name="email"><br>
    Password: <input type="password" name="password"><br>
    <button name="login">Đăng nhập</button>
</form>