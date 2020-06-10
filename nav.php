<?php include "header.php";  ?>
<style>
  .navbar{
    background: #005C97;  /* fallback for old browsers */
background: -webkit-linear-gradient(to top, #363795, #005C97);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #363795, #005C97); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

  }
</style>
<nav class="navbar navbar-expand-lg navbar-dark">
    <img src="/img/udokovicsoft.png" width="30px"/>
  <h4 class="text-white nav-head">Anonymous Messenger</h4>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarText">
    <center>
    <span class="navbar-text">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="./index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./about.php">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./messages.php">Messages</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
    </span>
    </center>
  </div>
</nav>

<?php include "footer.php" ?>
