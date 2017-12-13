<?php include('header.php'); ?>

 <section class="container" id="alltasks">
  	<div class="row">
  	<div class="col-sm-2"></div>
  		<div class="col-sm-10">
  			<h1>My Tasks</h1>
  			<?php include('message.php'); ?>
  			
  			<p> <?php print utility\htmlTable::genarateTableFromMultiArray($data); ?></p>
  		</div>	
  	</div>
  	<div class="row">
  	<div class="col-sm-2"></div>
  		<div class="col-sm-2">
  			<a href="index.php?page=create&action=add_task"><button class="edit">Create a Task</button></a>
  		</div>
  		
		
  	</div>
  </section>


<script src="js/scripts.js"></script>
</body>
</html>