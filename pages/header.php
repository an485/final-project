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
        <h1 class="col-sm-6">Manage My ToDo's</h1>
        <nav class="col-sm-6">
        <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="index.php?page=all_tasks&action=all">My ToDo's</a></li>
         <li><a href=<?php // if session active then logout ?>"index.php?page=userlogin&action=login">Login</a></li>
		</ul>
        </nav>
     </div>
  </header>
  <section class="jumbotron">
      <div class="row text-center">
      	<p class="title">Web Systems Development</p>
      	<p class="subtitle">Final Project</p>
      </div>
  </section>