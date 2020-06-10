<?php
session_start();
    if (array_key_exists("signup", $_POST)) {
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        include "connection.php";
        $query = "SELECT * FROM `users` WHERE Username = '".mysqli_real_escape_string($link, $username)."'";
        $result = mysqli_query($link, $query);
        if (mysqli_num_rows($result) > 0) {
            header("Location: index.php?error=taken");
        } else {

            $query = "INSERT INTO `users` (`Full_Name`, `Username`, `Password`) VALUES (
            '".mysqli_real_escape_string($link, $fullname)."', 
            '".mysqli_real_escape_string($link, $username)."', 
            '".mysqli_real_escape_string($link, $password)."'
        )";

            
              if(mysqli_query($link, $query)){
                $_SESSION['id'] = mysqli_insert_id($link);
                setcookie("id", mysqli_insert_id($link), time() + 60*60*24*365);
                header("Location: home.php?$username&&new=1");
                $query = "UPDATE `users` SET `Password` = '".md5(md5(mysqli_insert_id($link)).$password)."' WHERE id =".mysqli_insert_id($link).' LIMIT 1';
                mysqli_query($link, $query);
              
            }
        }
    }
?>