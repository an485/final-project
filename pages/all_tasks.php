<?php include('header.php'); ?>

 <section class="container" id="alltasks">
  	<div class="row">
  		<div class="col-sm-12">
  			<h1>My Tasks</h1>
  			<p> Below is a list of my ToDo's. Click the View link to edit, update, or delete a ToDo item in your list.</p>
  			<p> <?php print utility\htmlTable::genarateTableFromMultiArray($data); ?></p>
  		</div>	
  	</div>
  </section>


<script src="js/scripts.js"></script>
</body>
</html>