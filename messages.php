<?php
$error = "";
session_start();
if (isset($_SESSION['id'])) {
    include "connection.php";
    $id = $_SESSION['id'];
    $query = "SELECT * FROM `users` WHERE `id` = '$id'";
    $result = mysqli_query($link, $query);
    $row = mysqli_fetch_array($result);
    $user = $row['Username'];
}else{
header("Location: index.php");
}

?>
<?php include "header.php"; ?>
<?php include "nav.php"; ?>
<title>Answers | <?php echo $user; ?></title>
<div class="main-messages">

<br>
<h1 class="text-center res">My Response</h1>
<p class="text-center">Scroll down to check out the messages you have recieved</p>
<br><br>
<a href="index.php"><button  class="btn btn-info">Back <i class="fas fa-arrow-left"></i></button></a><br><br>
<?php 
include "connection.php";
$query = "SELECT * FROM `messages` WHERE `Reciever` = '$user' ORDER BY `Time` DESC";
$result = mysqli_query($link, $query);
if (mysqli_num_rows($result) <= 0) {
    $error .= "<center><div class='alert alert-danger' role='alert'>You Have No Message Yet.</div></center>";
}
    while ($row = mysqli_fetch_array($result)) {

?>
<div class="view-message">
    <div class="message-title">
        <h3>Message: </h3>
    </div>
    <div class="main-message">
        <h5><?php echo nl2br($row['Message']); ?></h5>
    </div><hr>
    <section class="details">
        <p>-Anonymous🤷‍♂️🤷‍♂️🤷‍♂️-[<?php echo $row['Time']; ?> ( WAT-GMT+1)]</p>
    </section>
</div><br>
<?php
    }
?>
<?php if (!empty($error)) {
?>  

<?php echo $error; ?>
<div class="alert alert-warning text-center" role="alert">
   Share Your Link With Friends To Recieve Messages<a href="./index.php" class="alert-link">Share</a>.
</div><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
}
?>
<div class="footer">
    <h5>Powered By <a style="color: white; text-decoration:none" href="https://udokovicsoft.netlify.com/"><strong>Udokovic Soft</strong></a></h5>
    <h5>&copy 2020</h5>
   <a target="_blank" style="color: white; text-decoration:none" href="./about.php"><h6>About Us</h6></a> 
</div>
</div>


<?php include "footer.php"; ?>