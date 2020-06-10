<?php
include "header.php";
?>
<title>Admin | Udokovic Soft</title>
<div style="color: white" class="main-messages">
<h1 class="text-center">USERS</h1>
<div class="container">
<table class="table">
  <thead class="thead-inverse text-white">
    <tr>
      <th>S/N</th>
      <th>Full Name</th>
      <th>Username</th>
      <th>Password</th>
    </tr>
  </thead>
<tbody class="text-white">
<?php
include "connection.php";
$query = "SELECT * FROM `users`";
$sn = "0";
$result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($result)) {
        $sn ++;
        ?>


    <tr>
        <th><?php echo $sn; ?></th>
      <th scope="row"><?php echo $row['Full_Name']; ?></th>
      <td><?php echo $row['Username']; ?></td>
      <td><?php echo $row['Password']; ?></td>
    </tr>


<?php
    }
?>

</tbody>
</table>
</div>



<h1 class="text-center">MSSAGES</h1>



<div class="container">
<table class="table">
  <thead class="thead-inverse text-white">
    <tr>
      <th>S/N</th>
      <th>Reciever</th>
      <th>Message</th>
      <th>Time</th>
    </tr>
  </thead>
<tbody class="text-white">
<?php
include "connection.php";
$query = "SELECT * FROM `messages`";
$sn = "0";
$result = mysqli_query($link, $query);
    while ($row = mysqli_fetch_array($result)) {
        $sn ++;
        ?>


    <tr>
        <th><?php echo $sn; ?></th>
      <th scope="row"><?php echo $row['Reciever']; ?></th>
      <td><?php echo $row['Message']; ?></td>
      <td><?php echo $row['Time']; ?></td>
    </tr>


<?php
    }
?>

</tbody>
</table>
</div>
</div>
<?php include "footer.php"; ?>