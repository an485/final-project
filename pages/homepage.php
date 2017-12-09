<?php include('header.php')  ?>

<h1>
    <?php

    //this how to print some data;
    echo $data['site_name'];

    ?> </h1>

<h1><a href="index.php?page=account&action=register">Register an Account</a></h1>
<h1>  <a href="index.php?page=userlogin&action=login"><button>Login</button></a></h1>

     


</form>


<script src="js/scripts.js"></script>


<?php // include('footer.php')  ?>
</body>
</html>