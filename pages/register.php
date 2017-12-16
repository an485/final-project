<?php include('header.php'); ?>

 <section class="container" id="alltasks">
  	<div class="row">
  		<div class="col-sm-12">
  		
		<form action="index.php?page=account&action=store" method="post" id="register">
		<h3>Create an Account</h3>
  			
  			<p><?php include('error.php'); ?></p><br>
			<div class="row" id="field">
				<div class="col-sm-2"><label>User Name:</label></div>
 				<div class="col-sm-2"> <input type="text" name="username"></div>
			</div>
 			
  			<div class="row" id="field">
  				<div class="col-sm-2"><label> First Name:</label> </div><div class="col-sm-2">  <input type="text" name="fname"></div>
			</div>
  			
  			<div class="row" id="field">
  				<div class="col-sm-2"><label>Last Name:</label> </div><div class="col-sm-2"><input type="text" name="lname"></div>
			</div>
  			
  			<div class="row" id="field">
  				<div class="col-sm-2"><label>Email: </label></div><div class="col-sm-2"><input type="text" name="email"></div>
			</div>
  			
  	     	<div class="row" id="field">
  	     		<div class="col-sm-2"><label>Password: </label> </div><div class="col-sm-2">  <input type="password" name="password"></div>
			</div>
  		<p></p>
  		<div class="col-sm-2"></div><button type="submit" form="register" value="Submit form" class="edit">Create Account</button>
		</form>
  		</div>	
  	</div>
  	
  </section>


<?php include('footer.php') ?>