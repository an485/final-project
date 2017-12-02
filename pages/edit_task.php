<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Heralds</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<h3> Edit your ToDo Task and click 'Save'</h3>
<form action="index.php?page=tasks&action=store&id=<?php echo $data->id; ?>" method="post" id="updateForm">
     <div class="container edittask">
<?php print utility\htmlTable::generateFormFromOneRecord($data); ?>
<button type="submit" form="form2" value="store">Save</button></div></form>
 <a href="index.php?page=tasks&action=show&id=<?php echo $data->id; ?> "><button class="edit">Cancel</button></a><hr>

<form action="index.php?page=deleted&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form>
    





<script src="js/scripts.js"></script>
</body>
</html>