<?php include('header.php'); ?>

 <section class="container" id="alltasks">
  	<div class="row">
  		<div class="col-sm-12">
  		
 			<h3>Create an Account</h3>
  			
  			<p><?php include('error.php'); ?></p><br>
  			
		<form action="index.php?page=account&action=store" method="post" id="register">
			<div class="col-sm-8"></div><div class="col-sm-2"><label>User Name:</label></div>
 			<div class="col-sm-2"> <input type="text" name="username"></div>
  			<div class="col-sm-8"></div><div class="col-sm-2"><label> First Name:</label> </div><div class="col-sm-2">  <input type="text" name="fname"></div>
  			<div class="col-sm-8"></div><div class="col-sm-2"><label>Last Name:</label> </div><div class="col-sm-2">   <input type="text" name="lname"></div>
  			<div class="col-sm-8"></div><div class="col-sm-2"><label>Email: </label></div><div class="col-sm-2">  <input type="text" name="email"></div>
  		<div class="col-sm-8"></div>	<div class="col-sm-2"><label>Password: </label> </div><div class="col-sm-2">  <input type="password" name="password"></div><hr>
  		<div class="col-sm-8"></div>	<button type="submit" form="register" value="Submit form" class="edit">Create Account</button>
		</form>
  		</div>	
  	</div>
  	
  </section>




<script src="js/scripts.js"></script>
</body>
</html>