<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Your To Do List Management</title>
    <meta name="description" content="This site allows you to create and manage a to do list.">
    <meta name="author" content="Anthony Nater & KWilliams">

    <link rel="stylesheet" href="css/styles.css">


</head>

<body>


<h1>
    <?php

    //this how to print some data;
    echo $data['site_name'];

    ?> </h1>

<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
<h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1>

       <a href="index.php?page=userlogin&action=login"><button>Login</button></a>


</form>


<script src="js/scripts.js"></script>
</body>
</html>