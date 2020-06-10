<?php
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
<title>Home | <?php echo $user; ?></title>
<span class="hide">
    <input type="text" id="link-send" value="ssssss">
</span>
<div class="main">
    <br>
<h1 class="text-center welcome">Welcome <strong><?php echo $row['Full_Name']; ?></strong></h1>
<h5 class="text-center share-det">Share your profile link to friends to get response from your friends. Go to "<strong>View Messages</strong>" to check out the responses.</h5>
<div><br>
    <center><h3><a href="./messages.php"><button style="border: 1px solid white;" class=" butt-copy">View Messages <i style="font-size: 18px;" id="icn-en" class="far fa-envelope icn"></i></button></a></h3><br></center>
    <center><h3><button onclick="func()" data-clipboard-text="https://annonymousmessenger.000webhostapp.com/write.php?user=<?php echo $user; ?>" style="border: 1px solid white;" id="copy" class=" butt-copy btnn">Click To Copy <i style="font-size: 18px;" id="icn-cop" class="far fa-copy icn"></i></button></h3><br></center>
    <center><h3><a target="_blank" href="https://api.whatsapp.com/send?text= Write a secret anonymous message for me 😎😎😎 i won't know who wrote it 😉😘😘❤➡️➡️ https://annonymousmessenger.000webhostapp.com/write.php?user=<?php echo $user; ?>     Powered By ➡️➡️ *Udokovic Soft*😎 "><button style="border: 1px solid white;" class=" butt-what text-white"><i style="font-size: 20px;" id="icn-wa" class="fab fa-whatsapp icn"></i> Share on Whatsapp </button></a></h3><br></center>
    <center><h3><a href="https://www.facebook.com/sharer/?u=https://annonymousmessenger.000webhostapp.com/write.php?user=<?php echo $user; ?>" target="_blank"><button style="border: 1px solid white;" class=" butt-fb text-white"> <i style="font-size: 20px;" id="icn-fb" class="fab fa-facebook-square icn"></i> Share on Facebook</button></a></h3><br></center>
</div>
<div class="footer">
    <h5>Powered By <a style="color: white; text-decoration:none" href="https://udokovicsoft.netlify.com/"><strong>Udokovic Soft</strong></a></h5>
    <h5>&copy 2020</h5>
   <a target="_blank" style="color: white; text-decoration:none" href="./about.php"><h6>About Us</h6></a> 
</div>
</div>




<script>
    new ClipboardJS('.btnn');
    function func() {
        alert("Link Copied!");
    }
</script>


<?php include "footer.php" ?>
