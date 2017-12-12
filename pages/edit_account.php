<?php include('header.php') ?>
    

<section class="container" id="edittask">
  	<div class="row">
  		<div class="col-sm-12">
  		  <h1>Hello <?php echo $_SESSION["FName"]; ?></h1>
  			<h3> Edit your Profile and click 'Save'</h3>
  			
  			<form action="index.php?page=show_account&action=update" method="post" id="updateForm">
    		<p><?php print utility\htmlTable::accountEditForm($data); ?></p>
			<button type="submit" form="updateForm" value="store" class="edit">Save</button></form>
 			<hr>
  		</div>	
  	</div>
  	<div class="row">
  		<div class="col-sm-1">
  			<a href="index.php?page=show_account&action=show"><button class="cancel">Cancel</button></a>
  		</div>
		<div class="col-sm-10"></div>
  	</div>
  </section>



<script src="js/scripts.js"></script>
</body>
</html>