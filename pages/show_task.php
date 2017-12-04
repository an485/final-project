<?php include('header.php'); ?>

 <section class="container" id="alltasks">
  	<div class="row">
  		<div class="col-sm-12">
		<h5><a href="index.php?page=all_tasks&action=all"><< View All</a></h5>
 			<p style="color:green;font-weight:bold;" class="message"><?php 
				if (!empty($_REQUEST['msg'])) 
			    echo $_REQUEST['msg'];  
	         ?></p>
  			
  			<p> <?php print utility\htmlTable::generateTableFromOneRecord($data); ?></p>
  		</div>	
  	</div>
  	<div class="row">
  		<div class="col-sm-2">
  			<a href="index.php?page=edit_task&action=edit&id=<?php echo $data->id; ?> "><button class="edit">Edit ToDo Task</button></a>
  		</div>
  		<div class="col-sm-1">
  			<form action="index.php?page=deleted&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
   			 <button type="submit" form="form1" value="delete" class="delete">Delete</button>
			</form>
  		</div>
		<div class="col-sm-8"></div>
  	</div>
  </section>




<script src="js/scripts.js"></script>
</body>
</html>