<?php include('header.php')  ?>

<h1>
    <?php

    //this how to print some data;
    echo $data['site_name'];

    ?> </h1>

<h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1>
<h1><a href="index.php?page=all_tasks&action=all">Show All Tasks</a></h1>

       <a href="index.php?page=userlogin&action=login"><button>Login</button></a>


</form>


<script src="js/scripts.js"></script>


<?php // include('footer.php')  ?>
</body>
</html>