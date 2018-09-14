<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['authuser']);
session_destroy();
header("Location: index.php");
?>
