<?php
session_start();
session_unset();
session_destroy();
setcookie('id', "", time() - 60*60);
$_COOKIE['id'] = "";
header("Location: index.php");
?>