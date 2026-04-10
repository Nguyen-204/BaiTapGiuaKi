<?php
include "config.php";

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
}
?>

<h2>Xin chào <?php echo $_SESSION['user']; ?></h2>
<a href="logout.php">Đăng xuất</a>