<?php
session_start();
include "connection.php";
if (array_key_exists("login", $_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `users` WHERE Username = '".mysqli_real_escape_string($link, $username)."'";
        $result = mysqli_query($link, $query);
        $row = mysqli_fetch_array($result);
        if (isset($row)) {
            $hp = md5(md5($row['id']).$password);
 
            if ($hp == $row['Password']) {
              $_SESSION['id'] = $row['id'];
              setcookie("id", $row['id'], time() + 60*60*24*365);
              header("Location: home.php");
            }else{
                header("Location: index.php?error=passwordmismatch");
            }
    }else{
        header("Location: index.php?error=passwordmismatch");
    }
}
?>