<?php include('header.php'); ?>

 <section class="container" id="alltasks">
  	<div class="row">
		<div class="col-sm-3"></div>
  		<div class="col-sm-5">
		<h5><a href="index.php?page=all_tasks&action=all"><< Back to view all tasks</a></h5>
 			<h3>Add a ToDo Task</h3>
  			
  			<form action="index.php?page=all_tasks&action=add_task" method="post" id="addTaskForm">
    		<input type="text" name="task" id="task"><br>
    		<span style="font-size: x-small; font-style: italic; ">Example: "Take out the Garbage"</span>
    		<input type="hidden" name="userid" value="<?php echo $_SESSION["userID"]; ?>">
    		<br><br>
			<button type="submit" form="addTaskForm" value="store" class="edit">Save</button></form>
  		</div>	
  	</div>
  	
  </section>




<script src="js/scripts.js"></script>
</body>
</html>