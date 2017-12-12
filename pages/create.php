<?php include('header.php'); ?>

 <section class="container" id="alltasks">
  	<div class="row">
  		<div class="col-sm-12">
		<h5><a href="index.php?page=all_tasks&action=all"><< View All</a></h5>
 			<h3>Create a ToDo Task</h3>
  			
  			<form action="index.php?page=all_tasks&action=add_task" method="post" id="addTaskForm">
    		<input type="text" name="task" id="task"><br>
    		<input type="hidden" name="userid" value="<?php echo $_SESSION["userID"]; ?>">
			<button type="submit" form="addTaskForm" value="store" class="edit">Save</button></form>
  		</div>	
  	</div>
  	
  </section>




<script src="js/scripts.js"></script>
</body>
</html>