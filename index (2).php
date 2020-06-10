<?php
session_start();
$error = "";
if (isset($_COOKIE['id'])) {
	header("Location: home.php");
	$_SESSION['id'] = $_COOKIE['id'];
}
?>
<?php  include "form-head.php"; ?>
	<div class="container">
		<div class="img">
		    
		</div>
		<div class="login-content">
			<form action="signup.php" id="signupform" method="POST">
				<img src="./img/udokovicsoft.png">
				<h3 class="text-center">Anonnymous Messenger!</h3><br>
				<span class="mini-nav">
				<h3 style="margin-right: 15px" id="signup" class="title active">Signup</h3> | <h3 id="login" style="margin-left: 15px;">Login</h3>
                </span><br>
                <?php
					if (isset($_GET['error'])) {
						if ($_GET['error'] == "taken") {
							
						
						include "header.php";
						?>
							<div class="alert alert-danger" role="alert">
								Username Already Taken. <br> <strong>Try Again.</strong> 
							</div>

						<?php
						}
					}
				?>
				<div class="input-div one">
					<div class="i">
							<i class="fas fa-user"></i>
					</div>
					<div class="div">
							<h5>Full Name</h5>
							<input type="text" required name="fullname" class="input">
					</div>
				 </div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" required onblur="this.value=removeSpaces(this.value);" name="username" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" required name="password" class="input">
            	   </div>
            	</div>
            	<input type="submit" class="btn text-white" name="signup" value="Signup">
			</form>
			


			<form id="loginform" method="POST" action="login.php" class="hide">
				<img src="./img/udokovicsoft.png">
				<h3 class="text-center">Anonnymous Messenger!</h3>
				<span class="mini-nav">
					<h3 style="margin-right: 15px" id="signup2" class="title">Signup</h3> | <h3 id="login2" class="active" style="margin-left: 15px;">Login</h3>
					</span><br>
					<?php

                         if (isset($_GET['error'])) {
                             if ($_GET['error'] == "passwordmismatch") {
								 include "header.php"; 
								 ?>
								 <script>
								 
								 document.getElementById("signupform").classList.add('hide');
								 document.getElementById("loginform").classList.remove('hide');
								 </script>
								 
								<div class="alert alert-danger" role="alert">
									Username & Password Mismatch! <br> Try Again.
								</div>

							<?php
                             }
                         }
					?>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Username</h5>
           		   		<input type="text" name="username" onblur="this.value=removeSpaces(this.value);" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
            	<input type="submit" class="btn text-white" name="login" value="Login">
            </form>
        </div>
    </div>
    <script>
        function removeSpaces(string) {
 return string.split(' ').join('');
}
    </script>
    <?php  include "form-foot.php" ?>
