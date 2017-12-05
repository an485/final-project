<?php include('header.php'); ?>

 <section class="container" id="alltasks">
  	<div class="row">
  		<div class="col-sm-12">
  			<h1>My Tasks</h1>
  			<p> Below is a list of my ToDo's. Click the View link to edit, update, or delete a ToDo item in your list.</p>
  			<p style="color:green;font-weight:bold;" class="message"><?php 
				if (!empty($_REQUEST['msg'])) 
			    echo $_REQUEST['msg'];  
	         ?></p>
  			
  			<p> <?php print utility\htmlTable::genarateTableFromMultiArray($data); ?></p>
  		</div>	
  	</div>
  	<div class="row">
  		<div class="col-sm-2">
  			<a href="index.php?page=create&action=add_task"><button class="edit">Create a Task</button></a>
  		</div>
  		
		<div class="col-sm-10"></div>
  	</div>
  </section>


<script src="js/scripts.js"></script>
</body>
</html>