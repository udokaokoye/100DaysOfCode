<?php
if (isset($_GET['user'])) {
    $user = $_GET{'user'};
    $success = "";
    $error = "";
    include "connection.php";
    if (array_key_exists("sendmessage", $_POST)) {
        $message = $_POST['message'];
        $query = "INSERT INTO `messages` (`Message`, `Reciever`) VALUES ('$message', '$user');";
        if(mysqli_query($link, $query)){
            $success .= "<center><div class='alert alert-success' role='alert'>Message <strong>Sent!</strong> <br>Now its your turn, <a href='index.php'>Register Now</a> to recieve anonymous messages from friends!</div></center>";
        }else{
            $error .= '<div class="alert alert-danger" role="alert">
            <strong>Oh snap!</strong> There Was An Errror <a href="#" class="alert-link">Try Again</a>.
          </div>';
        }
    }
}else{
 header("Location: index.php");
}
?>
<?php include "header.php"; ?>

<div style="height: 100%;" class="main"><br>
<h3 class="text-center send-to text-white"> Send Anonymous Message To <strong><?php echo $_GET['user'] ?></strong></h3>
<div class="form-div"><br>
    <center>
        <?php echo $success; echo $error; ?>
    <form method="POST" enctype = 'multipart/form-data'>
        <small>Say something about <strong><?php echo $_GET['user'] ?></strong></small><br>
        <textarea wrap="hard" required name="message" id="message" maxlength="500" style="color: white;" placeholder="Leave a message for <?php echo $_GET['user'] ?> here..." cols="30" rows="5"></textarea><br><br>
        <input type="submit" name="sendmessage" class="butt-send" value="Send Message">
    </form>
    </center><br>
    <p class="text-center">Say what you think about <?php echo $_GET['user']; ?> or leave a feedback for <?php echo $_GET['user']; ?> <strong>anonymously</strong> using the form above.. <br>Thank You.</p>
</div>
<br><br><br><br><br><br><br>
</div>


<?php include "footer.php"; ?>