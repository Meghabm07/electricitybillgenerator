<?php
session_start();
unset($_SESSION['session_user2']);
session_destroy();
header("Location: login.php");
?>