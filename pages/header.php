<?php 

if (session_status() == PHP_SESSION_NONE) {
	 session_start();
	//$_SESSION = array();
	//print_r($_SESSION);
	//echo "session started because there was none";
}

?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>ToDo List</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
<link href="css/main.css" rel="stylesheet" type="text/css">
</head>

<body>
   <header class="container">
     <div class="row">
        <div class="col-sm-6"><img src="images/TM-Logo.png" alt=""/></div>
        <nav class="col-sm-6">
        <ul>
         <li><a href="index.php">Home</a></li>
         <?php 
			if (isset($_SESSION["userID"])) {
				echo '<li><a href="index.php?page=all_tasks&action=all">My Tasks</a></li>';
				echo '<li><a href="index.php?page=show_account&action=show">My Profile</a></li>';
				echo '<li><a href="index.php?page=homepage&action=logout">Logout</a></li>';
			}
				else {
					echo '<li><a href="index.php?page=userlogin&action=login">Login</a></li>';
				
			}
				// if session active then logout ?>
		</ul>
        </nav>
     </div>
  </header>
  <section class="jumbotron">
      <div class="row text-center">
      	<p class="title">ToDo Task Manager</p>
      	<p class="subtitle">IS 601 - Final Project</p>
      </div>
  </section>