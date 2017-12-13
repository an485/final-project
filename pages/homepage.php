<?php include('header.php')  ?>

     <section class="container" id="main">
  	<div class="row">
		<div class="col-sm-2"></div>
  		<div class="col-sm-5" style="background-color:#f0f0f0;">
  		<p><?php include('error.php'); ?></p><br>
		<form action="index.php?page=account&action=store" method="POST" id="register">
		<h3>Create an account to get started!</h3>  			
  			
			<div class="row" id="field">
				<div class="col-sm-3"><label>User Name:</label></div>
 				<div class="col-sm-2"> <input type="text" name="username"></div>
			</div>
 			
  			<div class="row" id="field">
  				<div class="col-sm-3"><label> First Name:</label> </div><div class="col-sm-2"><input type="text" name="fname"></div>
			</div>
  			
  			<div class="row" id="field">
  				<div class="col-sm-3"><label>Last Name:</label> </div><div class="col-sm-2"><input type="text" name="lname"></div>
			</div>
  			
  			<div class="row" id="field">
  				<div class="col-sm-3"><label>Email: </label></div><div class="col-sm-2"><input type="email" name="email"></div>
			</div>
 			<div class="row" id="field">
  	     		<div class="col-sm-3"><label>Password: </label> </div><div class="col-sm-2"><input type="password" name="password"></div>
			</div>
  			
  	     	
  		<p></p>
  		<div class="col-sm-3"></div><button type="submit" form="register" value="register" class="edit">Create Account</button>
		</form><br><br>
  		</div>	
  		
  		
  		<div class="col-sm-4">
  		<h1>Or...<a href="index.php?page=userlogin&action=login" class="edit">Login Here</a></h1>
		</div>
  	</div>
  	
  </section>



     


</form>


<script src="js/scripts.js"></script>


<?php // include('footer.php')  ?>
</body>
</html>