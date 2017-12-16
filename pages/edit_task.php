<?php include('header.php') ?>
    

<section class="container" id="edittask">
  	<div class="row">
  	<div class="col-sm-2"></div>
  		<div class="col-sm-10">
  			<h3> Edit your ToDo Task and click 'Save'</h3>
  			
  			<form action="index.php?page=all_tasks&action=save_task&id=<?php echo $data->id; ?>" method="post" id="updateForm">
    		<p><?php print utility\htmlTable::generateFormFromOneRecord($data); ?></p>
			<button type="submit" form="updateForm" value="store" class="edit">Save</button></form>
 			<hr>
  		</div>	
  	</div>
  	<div class="row">
  	    <div class="col-sm-2"></div>
  		<div class="col-sm-1">
  			<a href="index.php?page=all_tasks&action=show&id=<?php echo $data->id; ?> "><button class="cancel">Cancel</button></a>
  		</div>
  		<div class="col-sm-1">
  			<form action="index.php?page=deleted&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
   			 <button type="submit" form="form1" value="delete" class="delete">Delete</button>
			</form>
  		</div>
		
  	</div>
  </section>



<?php include('footer.php') ?>