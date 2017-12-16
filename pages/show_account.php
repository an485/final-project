<?php include('header.php'); ?>

 <section class="container" id="alltasks">
  	<div class="row">
  	<div class="col-sm-2"></div>
  		<div class="col-sm-5">
  		<h1>Hello <?php echo $_SESSION["FName"]; ?>!</h1>
 			<p style="color:green;font-weight:bold;" class="message"><?php 
				if (!empty($_REQUEST['msg'])) 
			    echo $_REQUEST['msg'];  
	         ?></p>
  			
  			<p> <?php print utility\htmlTable::accountValues($data); ?></p>
  			<hr>
  			<a href="index.php?page=edit_account&action=edit"><button class="edit">Edit  Profile</button></a>
  		</div>	
  	</div>
  	<div class="row">
  	</div>
  </section>



<?php include('footer.php') ?>