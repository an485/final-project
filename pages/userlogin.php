<?php include('header.php') ?>



<section class="container" id="main">
  	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-5">
        
       <h2>User Login</h2>
       <p><?php include('error.php'); ?></p> 
        <form action="index.php?page=accounts&action=login" method="POST">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" id="username" required><br><br>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" id="password" required>
        <p>
        <br>
        </p>

        <button type="submit" class="edit">Login</button>
        </form>
        </div>
	</div>   
    <hr>
    </section>
    
     <?php include('footer.php') ?>